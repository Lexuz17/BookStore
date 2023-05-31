<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title', 'author', 'language', 'cover', 'genre', 'price', 'publication_date', 'publisher', 'description', 'stock'
    ];

    protected $hidden = [
        'remember_token',
    ];

}
