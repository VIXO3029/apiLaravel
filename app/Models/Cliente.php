<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Establecer si el modelo tiene marcas de tiempo
    public $timestamps = true;

    // Atributos asignables en masa (mass assignment)
    protected $fillable = [
        'nombre', 'apellidos', 'created_at',
    ];

    // Atributos que deben ser tratados como fechas
    protected $dates = [
        'created_at',
    ];

    // Puedes agregar relaciones aquí si es necesario
    // Ejemplo:
    // public function pedidos()
    // {
    //     return $this->hasMany(Pedido::class);
    // }
}
