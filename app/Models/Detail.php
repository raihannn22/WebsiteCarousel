<?php

namespace App\Models;

use App\Models\Postdetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable =[
        'judul',
        'caption',
        'image',
    ];

    public function postDetail ()
    {
        return $this->hasOne(PostDetail::class, 'detail_id', 'id');
    }
}
