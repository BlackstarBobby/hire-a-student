<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Jun-18
 * Time: 22:08
 */

namespace App\Student\Search\Filters;

use Illuminate\Database\Eloquent\Builder;

interface Filter
{
    public static function apply(Builder $builder, $value);
}
