<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;  
use Illuminate\Http\Request;
use App\Libro;
use App\Comments;
 
class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros=Libro::orderBy('id','DESC')->paginate(6);
        return view('Libro.index',compact('libros')); 
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Libro.create');
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
        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required']);
        Libro::create($request->all());
        return redirect()->route('libro.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libros=Libro::find($id);
        return  view('libro.show',compact('libros'));
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
        $libro=libro::find($id);
        return view('libro.edit',compact('libro'));
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
        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required']);
 
        libro::find($id)->update($request->all());
        return redirect()->route('libro.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Libro::find($id)->delete();
        return redirect()->route('libro.index')->with('success','Registro eliminado satisfactoriamente');
    }
    public function verLibroPedidos()
    {
        
     return view('index');
    }
}