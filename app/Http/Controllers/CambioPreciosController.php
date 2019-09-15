<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CambioPreciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('Producto.actualizaPrecio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePrecioCategoria(Request $request)
    {
        $porcentaje = ($request->porcentaje / 100);

        $productoModel = new Producto();

        if ($request->descripcion == "todos") {
           $productos = $productoModel->all();
        } else {
            $productos = $productoModel->where('descripcion', $request->descripcion)->get();
        }

        foreach ($productos as $producto) {
           
            if ($producto->precio != null) {
                $producto->precio = $producto->precio + ($producto->precio * $porcentaje);
            }

            if ($producto->precio_uss != null) {
                $producto->precio_uss = $producto->precio_uss + ($producto->precio_uss * $porcentaje);
            }

            

            $producto->save();
         }

        

        return redirect()->route('ver-cambio-precio');
        //controlador para subir5% el precio de los descripcion=automaticos
       //producto::find($precio)->update($request->all($precio=precio*1.05)->where'automaticos');
       // return redirect()->route('producto.index')->with('success','Precios de la categoria automaticos actualizados correctamente');
    }
    public function updateTodosLosPrecios(Request $request, $id)
    {
       ////controlador para subir5% el precio toda la tabla
       //producto::find($id)->update($request->all($precio=precio*1.05));
        //return redirect()->route('producto.index')->with('success','Precios de toda la lista actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
