<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 28-Jun-18
 * Time: 02:37
 */

namespace App\Student\Search\Filters;


use Illuminate\Database\Eloquent\Builder;

class CandidateJobType implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        $builder->where('resume->job_type', '=', $value);

        return $builder;
    }
}