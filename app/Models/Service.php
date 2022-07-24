<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,'image' ,'description','description_en','name_en'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class,'service_id','id');
    }

    public function subServices()
    {
        return $this->hasMany(SubService::class,'service_id','id');
    }
}
