<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'personas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'apellidos',
        'numero_cedula',
        'direccion',
        'telefono',
        'ciudad',
    ];

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }
}
