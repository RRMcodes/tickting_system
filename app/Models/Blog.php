<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'Blogs';
    protected $fillable = [
        'id',
        'title',
        'image_name',
        'description',
        'text',
    ];
}
