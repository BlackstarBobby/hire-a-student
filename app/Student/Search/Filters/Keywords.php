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
        });


        return $builder;
    }
}
