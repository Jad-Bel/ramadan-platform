<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\User;

class Recettes extends Model
{
    use HasFactory;

    protected $table = 'recettes';
    protected $primaryKey = 'id_recettes';

    protected $fillable = [
        'title',
        'description',
        'ingredients',
        'instructions',
        'image_url',
        'user_id',
        'categorie_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categorie_id');
    }
}
