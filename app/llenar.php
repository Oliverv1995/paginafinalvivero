<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class llenar extends Model
{
	protected $table = 'comentario';
    public $timestamps= false;
    protected $fillable = [
        'nombre',  'correo','telefono', 'descripcion'
    ];
}
