<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
   protected $table='articulo';

    protected $primaryKey='idarticulo';

    public $timestamps=false;

    //Variables para tabla Articulo
    protected $fillable =[
    	'idcategoria',
    	'codigo',
    	'nombre',
    	'stock',
    	'descripcion',
    	'imagen',
    	'estado'
    ];

    protected $guarded =[

    ];
}
