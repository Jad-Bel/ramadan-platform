<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'content',
        'pub_id',
        'user_id'
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'pub_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
