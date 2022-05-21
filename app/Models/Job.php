<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name','description', 'gallery'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

}
