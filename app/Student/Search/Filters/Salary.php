<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Jun-18
 * Time: 22:21
 */

namespace App\Student\Search\Filters;

use Illuminate\Database\Eloquent\Builder;

class Salary implements Filter
{

    public static function apply(Builder $builder, $values)
    {
        foreach ($values as $value) {
            preg_match_all('!\d+!', $value, $matches);

            if (count($matches) > 1) {
                $builder->whereBetween('salary', $matches);
            } else {
                $builder->where('salary', '>=', $matches[0]);
            }
        }

        return $builder;
    }
}
