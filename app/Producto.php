<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
         protected $fillable = ['codigo','categoria','producto', 'descripcion','cod_prov1','cod_prov2','precio','precio_uss'];
}
