<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recettes;

class Categories extends Model
{
    use HasFactory;

    protected $primaryKey = 'categorie_id';

    protected $fillable = [
        'categorie_name'
    ];

    public function recipes()
    {
        return $this->hasMany(Recettes::class, 'categorie_id', 'categorie_id');
    }
}
