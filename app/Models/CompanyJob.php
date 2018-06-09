<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyJob extends Model
{
    protected $table = 'company_jobs';

    const FULL_TIME = 10;
    const PART_TIME = 20;
    const FREELANCER = 30;
    const PRACTICE = 40;
    const VOLUNTEER = 50;
    const PROJECT = 60;

    public function company()
    {
        return $this->hasOne(Company::class, 'id');
    }

    public static function getJobTypes()
    {
        return [
            self::FULL_TIME,
            self::PART_TIME,
            self::FREELANCER,
            self::PRACTICE,
            self::VOLUNTEER,
            self::PROJECT,
        ];
    }
}
