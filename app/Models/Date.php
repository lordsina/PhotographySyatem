<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
class Date extends Model
{
    use HasFactory;
    protected $fillable = [ 'date'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
