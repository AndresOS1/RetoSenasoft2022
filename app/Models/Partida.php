<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table  = "partida";

    protected $primaryKey = "id_partida";


    protected $fillable = ['user_id','password'];

    protected $hidden = ['id_partida'];
}
