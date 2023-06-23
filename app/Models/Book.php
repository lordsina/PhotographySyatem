<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Bookcomment;
use App\Models\user;

class Book extends Model
{
     protected $fillable=['name','title'];


    public function bookcomments():HasMany{ // we choose name of table which we want to relate it for this function. we use 's' beacuse it has many nodes
       
        return $this->hasMany(Bookcomment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);  //Many To Many

        //return $this->belongsToMany(Tag::class,'Sina_alis_tables','col1',col2);  // if change the name of table or col
    }


}
