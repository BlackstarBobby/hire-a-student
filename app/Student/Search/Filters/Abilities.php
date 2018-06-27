<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 28-Jun-18
 * Time: 02:16
 */

namespace App\Student\Search\Filters;


use Illuminate\Database\Eloquent\Builder;

class Abilities implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        $builder->where(function (Builder $subbuilder) use ($value) {
            $subbuilder->where(function (Builder $subquery) use ($value) {
                foreach ($value as $word) {
                    $subquery->where('resume->abilities', 'ILIKE', '%' . $word . '%');
                }
            });
        });

//
//        $builder->with([
//            'resume' => function (Builder $subQuery) use ($value) {
//                $subQuery->where(function (Builder $subquery) use ($value) {
//                    foreach ($value as $word) {
//                        $subquery->where('company_name', 'ILIKE', '%' . $word . '%');
//                    }
//                });
//            }
//        ]);
        return $builder;
    }
}