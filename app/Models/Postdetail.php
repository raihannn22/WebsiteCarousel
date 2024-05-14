<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postdetail extends Model
{
    use HasFactory;
    protected $fillable =
        [
        'detail_id',
        'postjudul',
        'postcaption',
        'harga',
        'map',
        'stock',
        'imagesatu',
        'imagedua',
        'imagetiga',
        'imageempat',
        ];

}
