<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Libro extends Model
{
    //
     protected $fillable = ['nombre', 'resumen', 'dato_contacto','f_pedido','dire_entrega','precio'];
}