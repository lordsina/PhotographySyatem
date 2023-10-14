<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Date;
use App\Models\place;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [ 'place_id','date_id'];

    public function invoice()
    {
        return $this->belongsTo(Date::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
