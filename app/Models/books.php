<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $table = 'books_legend';
    
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'price',
        'published_at',
    ];
}
