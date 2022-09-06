<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartas extends Model
{
    use HasFactory;

    
    protected $table  = "cartas";

    protected $primaryKey = "id_carta";


    protected $fillable = ['carta', 'modelo','cilindraje','cilindros','potencia','revoluciones','peso'];

    protected $hidden = ['id_carta'];
}
