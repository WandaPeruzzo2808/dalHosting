<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Producto;

class verlistadoController extends Controller
{
    public function listar(Request $request)
    {    
        $productos = DB::table('productos')
          ->where('categoria','like',"%".$request->search."%")
          ->where('codigo','like',"%".$request->codigo."%")
          ->paginate(20);

        return view('pdf.verlistado', ['productos' => $productos]);

    }

  		public function search(Request $request)
  		{
  			$search = $request->get('search');
  			$productos =DB::table('productos')->where('producto','like','%'.$search.'%')->paginate(20);
  			return view('pdf.verlistado',['productos' => $productos]);

  		}
    }



















