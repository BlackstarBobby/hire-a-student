<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 28-Jun-18
 * Time: 02:35
 */

namespace App\Student\Search\Filters;


use Illuminate\Database\Eloquent\Builder;

class Address implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        $builder->where(function (Builder $subbuilder) use ($value) {
            $subbuilder->where(function (Builder $subquery) use ($value) {
                foreach ($value as $word) {
                    $subquery->where('resume->basic->address', 'ILIKE', '%' . $word . '%');
                }
            });
        });

        return $builder;
    }
}