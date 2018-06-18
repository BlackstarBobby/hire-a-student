<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 14-Jun-18
 * Time: 01:01
 */

namespace App\Student\Search\Filters;

use Illuminate\Database\Eloquent\Builder;

class CompanySearch implements Filter
{

    public static function apply(Builder $builder, $value)
    {
        $builder->where(function (Builder $subbuilder) use ($value) {
            $subbuilder->where(function (Builder $subquery) use ($value) {
                foreach ($value as $word) {
                    $subquery->where('company_name', 'ILIKE', '%' . $word . '%');
                }
            });
        });

        return $builder;
    }
}
