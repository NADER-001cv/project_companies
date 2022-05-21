<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['job_post', 'name','email', 'mobile_no', 'minmum_education', 'minimum_experience','description', 'logo'];
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
