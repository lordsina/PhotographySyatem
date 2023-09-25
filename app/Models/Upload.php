<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

       protected $fillable = [
        'post_id',
        'image_path',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
