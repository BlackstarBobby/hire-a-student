<?php

namespace App\Models;

use App\Models\CompanyJob as CompanyJobModel;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CompanyJob
 *
 * @property-read Collection|User[] $applicants
 * @property-read \App\Models\Company $company
 * @method static Builder|CompanyJobModel newModelQuery()
 * @method static Builder|CompanyJobModel newQuery()
 * @method static Builder|CompanyJobModel query()
 * @mixin Eloquent
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $company_id
 * @property string $title
 * @property string $description
 * @property string $job_type
 * @property string|null $salary
 * @property string $city
 * @method static Builder|CompanyJobModel whereCity($value)
 * @method static Builder|CompanyJobModel whereCompanyId($value)
 * @method static Builder|CompanyJobModel whereCreatedAt($value)
 * @method static Builder|CompanyJobModel whereDescription($value)
 * @method static Builder|CompanyJobModel whereId($value)
 * @method static Builder|CompanyJobModel whereJobType($value)
 * @method static Builder|CompanyJobModel whereSalary($value)
 * @method static Builder|CompanyJobModel whereTitle($value)
 * @method static Builder|CompanyJobModel whereUpdatedAt($value)
 */
class CompanyJob extends Model
{
    protected $table = 'company_jobs';

    const FULL_TIME = 10;
    const PART_TIME = 20;
    const FREELANCER = 30;
    const PRACTICE = 40;
    const VOLUNTEER = 50;
    const PROJECT = 60;
    const INTERNSHIP = 70;

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
            self::INTERNSHIP
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
            self::INTERNSHIP => 'Internship'
        ]);
    }

    public function getJobTypeLabel($jobType)
    {
        switch ($jobType) {
            case static::FULL_TIME:
                return "FULL TIME";
            case static::PART_TIME:
                return 'Part Time';
            case static::FREELANCER:
                return 'FREELANCER';
            case static::PRACTICE:
                return 'PRACTICA';
            case static::VOLUNTEER:
                return 'VOLUNTARIAT';
            case static::PROJECT:
                return 'Proiect';
            case static::INTERNSHIP:
                return 'Internship';
            default:
                return '';

        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function applicants()
    {
        return $this->belongsToMany(User::class, 'company_job_user', 'user_id', 'company_job_id');
    }
}
