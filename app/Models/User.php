<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Book;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'phone_number',
        'address',
        'credit_card_number',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bookcomments(){
        return $this->hasMany(Book::class);
    }

    public function owns($related) {

        return $this->id==$related->user_id;
    }

    // Accessor Firstname user lowercase 
    public function getFirstnameAttribute($value){
        return strtolower($value);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
    // Mutator
    // public function setFirstnameAttribute($value){
    //     //before you store in database

    //     $this->attributes['username']=strtolower($value);
    // }
    // Define the relationship between User and Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
