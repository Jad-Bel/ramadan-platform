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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'pub_id');
    }
}
