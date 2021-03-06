<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categorias';

    protected $primeryKey='idcategoria';

    /* laravel agrega 2 columnas especificando cuando se ha crado/modificado el registro-Fede */
    public $timestamp=false; 

    /* especificamos campos q reciben valor para grabar en BD */
    protected $fillable = [
 		'nombre',
 		'descripcion',
 		'condicion'
    ];

    /* se especifican cuando no queremos q se asignen al modelo  */
    protected $guarded =[

    ];
}
