<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define mass-assignable fields
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'image'
    ];
}