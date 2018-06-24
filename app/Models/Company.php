<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
