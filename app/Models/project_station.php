<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_station extends Model
{
    use HasFactory;

    protected $fillable = [
        'testing','development','design','wireframe','research_img','research','wireframe_img','development_img','design_img','testing_img','research_en','wireframe_en','development_en','design_en','testing_en'
    ];
}
