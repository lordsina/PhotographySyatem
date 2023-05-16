<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookcomment extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(Book::class);
    }

}
