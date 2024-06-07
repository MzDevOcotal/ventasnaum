<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['nombres', 'apellidos', 'cedula', 'telefono', 'direccion', 'ciudad_id', 'departamento_id', 'pais_id'];


    //Un cliente pertenece a una ciudad
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    //Un cliente pertenece a un departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    //Un cliente pertenece a un pais
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

}
