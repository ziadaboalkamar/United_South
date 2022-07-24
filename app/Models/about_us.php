<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_us extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_us','about_us_en','message','target_en','target','vision_en','vision','message_en'
    ];
}
