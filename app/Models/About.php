<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle1',
        'description1',
        'subtitle2',
        'description2',
        'image1',
        'image2',
    ];
}
