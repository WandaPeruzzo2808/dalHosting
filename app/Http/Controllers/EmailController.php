<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío
use Session;
use Redirect;

class EmailController extends Controller
{
  
    public function contact(Request $request){
        $subject = "Nuevo Mensaje de Contacto WEB";
        $for = "dalpedidos@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("dalpedidos@gmail.com","Dal");
            $msj->subject($subject);
            $msj->to($for);
            Session::flash('message','Formulario de contacto enviado exitosamente!');
   
        return redirect()->back();
             });
    }

    public function pedidoWeb(Request $request){
        $subject = "Nuevo PEDIDO WEB";
        $for = "dalpedidos@gmail.com";
        Mail::send('emailPedido',$request->all(), function($msj) use($subject,$for){
            $msj->from("dalpedidos@gmail.com","Dal");
            $msj->subject($subject);
            $msj->to($for);

   
        return redirect()->back()->with('success','Nuevo PEDIDO enviado exitosamente! A la brevedad nos comunicaremos con usted para coordinar la entrega.');
             });
    }
}