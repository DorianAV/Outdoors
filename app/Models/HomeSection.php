<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'span',
        'title',
        'description',
        'image1',
        'image2',
//        'mainTitle',
//        'subtitle1',
//        'description1',
//        'subtitle2',
//        'description2',
//        'subtitle3',
//        'description3',
//        'subtitle4',
//        'description4',
//        'videoUrl'
    ];
}
