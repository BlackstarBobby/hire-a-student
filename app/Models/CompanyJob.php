<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyJob extends Model
{
    protected $table = 'company_jobs';

    public static $FULL_TIME = 10;
    public static $PART_TIME = 20;
    public static $FREELANCER = 30;
    public static $PRACTICE = 40;
    public static $VOLUNTEER = 50;
    public static $PROJECT = 60;

    public function company()
    {
        return $this->hasOne(Company::class, 'id');
    }

    public static function getJobTypes()
    {
        return [
            self::$FULL_TIME,
            self::$PART_TIME,
            self::$FREELANCER,
            self::$PRACTICE,
            self::$VOLUNTEER,
            self::$PROJECT,
        ];
    }
}
