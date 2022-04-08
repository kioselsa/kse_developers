<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
      //Nombre de la tabla para la que va a funcionar el modelo
      protected $table="contacts";
      //Datos que se mostraran en los objetos Jasón
      protected $fillable=['name','lastName','email','phone'];
}
