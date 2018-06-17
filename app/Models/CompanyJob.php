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
        return $this->hasOne(Company::class, 'id', 'company_id');
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

    public static function jobTypes()
    {
        return collect([
            self::FULL_TIME => 'Full Time',
            self::PART_TIME => 'Part Time',
            self::FREELANCER => 'Freelancer',
            self::PRACTICE => 'Practica',
            self::VOLUNTEER => 'Voluntar',
            self::PROJECT => 'Proiect',
        ]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function applicants()
    {
        return $this->belongsToMany(User::class, 'company_job_user');
    }
}
