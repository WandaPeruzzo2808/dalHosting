<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Producto;
 use Illuminate\Support\Facades\Input;
 use App\Comments; 
 use Session;

class ProductoController extends Controller
{
 
    public function index()
    {
        //
        $productos=Producto::orderBy('id','DESC')->paginate(20);
        return view('Producto.index',compact('productos')); 
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Producto.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //['codigo', 'producto', 'descripcion','cod_prov1','cod_prov2','precio','precio U$S'];
       $this->validate($request,[ 'codigo'=>'required', 'producto'=>'required', 'categoria'=>'required']);
        Producto::create($request->all());
        return redirect()->route('producto.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos=Producto::find($id);
        return  view('Producto.show',compact('productos'));
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
        $producto=producto::find($id);
        return view('Producto.edit',compact('producto'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
       $this->validate($request,[ 'codigo'=>'required', 'producto'=>'required', 'categoria'=>'required']);
 
        producto::find($id)->update($request->all());
        return redirect()->route('producto.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Producto::find($id)->delete();
        return redirect()->route('producto.index')->with('success','Registro eliminado satisfactoriamente');
    }

         
    public function verPanelAdmin()
    {
        
     return view('index');
    }
        public function verCambioPrecio()
    {
        
     return view('actualizaPrecio');
    }
}