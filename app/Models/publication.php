<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $primaryKey = 'pub_id';

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'image_url'
    ];
}
