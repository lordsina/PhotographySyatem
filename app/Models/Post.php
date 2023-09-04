<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

        protected $fillable = [
        'user_id',
        'title',
        'content',
        'category_id',
    ];

  // Define the relationship between Post and Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the inverse relationship between Post and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments():HasMany
    { // we choose name of table which we want to relate it for this function. we use 's' beacuse it has many nodes
        return $this->hasMany(Comment::class);
    }
}
