<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'vehiculos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'placa',
        'color',
        'marca',
        'tipo_vehiculo',
        'conductor_id',
        'propietario_id',
    ];

    public function personas(){
        return $this->hasMany(Persona::class);
    }
}
