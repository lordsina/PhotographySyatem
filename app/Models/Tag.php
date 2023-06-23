<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Tag extends Model
{
    use HasFactory;
    public function books(){
        $this->belongsToMany(Book::class);
    }
}
