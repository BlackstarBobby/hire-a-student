<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Jun-18
 * Time: 22:22
 */

namespace App\Student\Search\Filters;

use Illuminate\Database\Eloquent\Builder;

class JobType implements Filter
{

    public static function apply(Builder $builder, $values)
    {
        $builder->whereIn('job_type', $values);

        return $builder;
    }
}
