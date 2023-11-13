<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporal extends Model
{
    use HasFactory;
    protected $table = "temporals";
    protected $fillable = ['nombre', 'sexo','zonas', 'cantidad_min_sesion', 'cantidad_max_sesion', 'precio_min_sesion', 'precio_max_sesion', 'url_imagen', 'descuento', 'descripcion','tipo_id'];
    protected $hidden = ['id'];
}
