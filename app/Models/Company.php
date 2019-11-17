<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Company
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyJob[] $jobs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property string|null $company_name
 * @property string|null $description
 * @property string $logo
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $website
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $google_plus
 * @property string|null $map
 * @property string|null $location
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereGooglePlus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereWebsite($value)
 */
class Company extends Model
{
    protected $table = 'companies';

    protected $fillable =[
        'user_id',
        'company_name',
        'description',
        'logo',
        'phone',
        'email',
        'website',
        'facebook',
        'twitter',
        'linkedin',
        'google_plus',
        'map'
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function jobs()
    {
        return $this->hasMany(CompanyJob::class);
    }
}
