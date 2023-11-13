<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Servicios extends Model
{
    protected $table = "servicios";
    protected $fillable = ['nombre', 'sexo', 'cantidad_min_sesion', 'cantidad_max_sesion', 'precio_min_sesion', 'precio_max_sesion', 'zonas', 'tipo_id', 'estado'];
    protected $hidden = ['id'];

    public function DetalleServicio(): BelongsTo
    {
        return $this->belongsTo(DetalleServicios::class);
    }

    public function TipoServicio(): HasMany
    {
        return $this->hasMany(Tipo_servicio::class);
    }
}
