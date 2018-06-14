<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Jun-18
 * Time: 22:10
 */

namespace App\Student\Search\Filters;

use Illuminate\Database\Eloquent\Builder;

class Keywords implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        $builder->where(function (Builder $subbuilder) use ($value) {
            $subbuilder->where(function (Builder $subquery) use ($value) {
                foreach ($value as $word) {
                    $subquery->where('title', 'ILIKE', '%' . $word . '%');
                }
            });

//            $subbuilder->orWhere(function (Builder $subquery) use ($value) {
//                foreach ($value as $word) {
//                    $subquery->where('description', 'ILIKE', '%' . $word . '%');
//                }
//            });

//            $subbuilder->orWhere(function (Builder $subquery) use ($value) {
//                $subquery->whereHas('tags', function ($subq) use ($value) {
//                    $subq->where(function (Builder $subqu) use ($value) {
//                        foreach ($value as $word) {
//                            $subqu->orWhere('name', 'ILIKE', '%' . $word . '%');
//                        }
//                    });
//                });
//            });
        });


        return $builder;
    }
}
