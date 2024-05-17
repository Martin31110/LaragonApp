<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juguete extends Model
{
    use HasFactory;
    protected $fillable = ['NombreJ', 'PrecioJ', 'GeneroJ','MaterialJ','ProvedorJ'];


    public function categorias(){
        return $this->belongsToMany(categorias::class);
    }
}
