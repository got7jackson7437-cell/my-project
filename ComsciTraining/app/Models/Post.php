<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ระบุ field ที่อนุญาตให้ mass assignment ได้
    protected $fillable = [
        'title',
        'content',
        'hours'
        // เช่น 'content', 'user_id'
    ];
}
