<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable =[
        'judul',
        'caption',
        'image',
        'judulpost',
        'harga',
        'captionpost',
        'map',
        'imagesatu',
        'imagedua',
        'imagetiga',
        'imageempat',

    ];
}
