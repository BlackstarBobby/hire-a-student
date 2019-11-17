<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 12-Jun-18
 * Time: 23:17
 */

namespace App\Student\Search;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class Search
{
    /**
     * @param Request $filters
     * @param $pageResults
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    abstract public static function apply(Request $filters, $pageResults = 10);

    /**
     * @param Request $request
     * @param Builder $query
     * @return Builder
     */
    protected static function applyDecoratorFromRequest(Request $request, Builder $query)
    {
        foreach ($request->all() as $filterName => $value) {
            $decorator = static::createFilterDecorator($filterName);

            if (static::isValidDecorator($decorator)) {
                $query = $decorator::apply($query, $value);
            }
        }

        return $query;
    }

    /**
     * @param $name
     * @return string
     */
    protected static function createFilterDecorator($name)
    {
        return __NAMESPACE__ . '\\Filters\\' . studly_case($name);
    }

    /**
     * @param $decorator
     * @return bool
     */
    protected static function isValidDecorator($decorator)
    {
        return class_exists($decorator);
    }

    /**
     * @param Builder $query
     * @param $pageResults
     * @param null $pageNumber
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    protected static function getResults(Builder $query, $pageResults, $pageNumber = null)
    {
        if ($pageNumber) {
            return $query->orderByDesc('id')->paginate($pageResults, ['*'], 'page', $pageNumber);
        } else {
            return $query->orderByDesc('id')->paginate($pageResults);
        }
    }
}
