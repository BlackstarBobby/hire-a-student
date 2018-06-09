<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function jobs()
    {
        return $this->hasMany(CompanyJob::class);
    }
}
