<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle1',
        'description1',
        'subtitle2',
        'description2',
        'subtitle3',
        'description3',
        'subtitle4',
        'description4',
        'image',
        'videoUrl'
    ];
}
