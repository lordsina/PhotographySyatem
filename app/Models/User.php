<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Bookcomment;
use App\Models\Book;
use App\Models\Role;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'password',
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

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    
    public function hasRole($role){
        if(is_string($role)){
            return $this->roles->contains('name',$role);
        }
        return !! $role->intersect($this->roles)->count();
    }

    public function assignRole($role){
        $this->roles()->sync(
            Role::whereName()->firstOrFail()
        );
    }

    // Accessor Firstname user lowercase 
    public function getFirstnameAttribute($value){
        return strtolower($value);
    }

    // Mutator
    // public function setFirstnameAttribute($value){
    //     //before you store in database

    //     $this->attributes['username']=strtolower($value);
    // }


}
