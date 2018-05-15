<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Categoria;
use Illuminate\Support\Facades\ReDirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB; /**/


class CategoriaController extends Controller
{
    public function __contruct()
    {

    }
    
    /*index--recibe param objeto de tipo request*/
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText')); /*es un campo de busqueda q va a tener el formulario */
    		$categorias=DB::table('categorias')->where('nombre','like','%'.$query.'%')
    		->where('condicion','=','1')
    		->orderBy('idcategoria','desc')
    		->paginate(7);
    		/* devuelvo los datos en la vista que definon carpeta/subcarpeta/nombre
    		y le mando los parametros */
    		return view('almacen.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);


    	}
    }
    public function create()
    {
    	/*vamos a crear luego un create.php dentro de alamcen/categria/ */
    	return view("almacen.categoria.create");
    }
    /* almacena el objeto del modelo categora en la tabla categoria de la BD.
    DEbo validar usando el request que defini anteriormente */
    public function store(CategoriaFormRequest $request)
    {
    	$categoria=new Categoria;
    	$categoria->nombre=$request->get('nombre');
    	$categoria->descripcion=$request->get('descripcion');
    	$categoria->condicion='1';
    	$categoria->save();
    	
    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
