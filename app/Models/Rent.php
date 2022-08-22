<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'house_id', 'initial_date', 'final_date', 'initial_date', 'daily_price',  'cleaning_price', 'discount'
    ];
}
