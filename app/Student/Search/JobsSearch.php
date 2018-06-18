<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Jun-18
 * Time: 22:46
 */

namespace App\Student\Search;

use App\Models\CompanyJob;
use Illuminate\Http\Request;

class JobsSearch extends Search
{

    /**
     * @param Request $filters
     * @param $pageResults
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function apply(Request $filters, $pageResults = 10)
    {
        $query = parent::applyDecoratorFromRequest($filters, (new CompanyJob())->newQuery());

        $query->with('company');

        return parent::getResults($query, $pageResults);
    }
}
