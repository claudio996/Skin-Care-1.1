<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetalleServicios extends Model
{
    protected $table = "detalle_servicios";
    protected $fillable = ['url_imagen','descuento','total','descripcion','servicios_id'];
    protected $hidden = ['id'];

    public function Servicios(): HasMany
    {
        return $this->hasMany(Servicios::class);
    }
}
