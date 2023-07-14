<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Book;

class Bookcomment extends Model
{
    use HasFactory;

    protected $fillable=['fullname','description'];

    public function book(){
        return $this->belongsTo(Book::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
