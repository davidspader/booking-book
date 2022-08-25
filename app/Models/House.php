<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    private ?int $id = NULL;

    protected $fillable = [
        'house_name', 'slug', 'user_id', 'id'
    ];
}
