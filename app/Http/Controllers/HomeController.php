<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use Illuminate\Support\Facades\Input;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function search($search){
        $search = urldecode($search);
        $comments = Comments::select()
                ->where('comment', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();
        
        if (count($comments) == 0){
            return View('home.search')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else{
            return View('home.search')
            ->with('comments', $comments)
            ->with('search', $search);
        }
    }
}

