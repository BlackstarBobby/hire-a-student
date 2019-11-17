<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 28-Jun-18
 * Time: 02:13
 */

namespace App\Student\Search;


use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;

class CandidatesSearch extends Search
{

    /**
     * @param Request $filters
     * @param $pageResults
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function apply(Request $filters, $pageResults = 10)
    {
        $query = parent::applyDecoratorFromRequest($filters, (new Resume())->newQuery());

        $ids = $query->select('user_id')->get()->pluck('user_id');

        $query = User::with('resume')
            ->whereIn('id', $ids);

        $page = $filters->get('page');
        if ($page) {
            return parent::getResults($query, $pageResults, $page);
        } else {
            return parent::getResults($query, $pageResults);
        }
    }
}