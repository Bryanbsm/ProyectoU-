<?php

namespace App\Http\Controllers;


use App\Proveedor;
use App\Http\Requests;
use App\Http\Requests\ProveedorRequest;


class ProveedorController extends Controller
{


function registar() {
    confirm("Se ha registrado correctamente ");
}




function eliminar() {
    confirm("Se ha eliminado correctamente ");
}





  public function index(){
        $prov=Proveedor::orderBy('id','DESC')->paginate(3);
    	return view('proveedor.index',compact('prov'));
    }


    public function create(){
        return view('proveedor.create');
    }

public function store(ProveedorRequest $request){
    $prov = new Proveedor;
    $prov->id = $request->id;
$prov->Nombre = $request->Nombre;
$prov->Telefono = $request->Telefono;
$prov->Direccion = $request->Direccion;
$prov->Correo = $request->Correo;

$prov->save();


    return redirect()->route('proveedor.index');
    registar();
  
    
}



public function edit($id){
    $prov = Proveedor::find($id);
        return view('proveedor.edit',compact('prov'));
    }


public function show($id){
    $prov = Proveedor::find($id);
        return view('proveedor.show',compact('prov'));
    }



public function update(ProveedorRequest $request,$id){
$prov = Proveedor::find($id);
$prov->id = $request->id;
$prov->Nombre = $request->Nombre;
$prov->Telefono = $request->Telefono;
$prov->Direccion = $request->Direccion;
$prov->Correo = $request->Correo;

$prov->save();


    return redirect()->route('proveedor.index');
    
    
}





    public function destroy($id){
        $prov = Proveedor::find($id);
        $prov->delete();
        
    	 return redirect()->route('proveedor.index');
         
    }





}
