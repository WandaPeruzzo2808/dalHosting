<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| para enviar de una pagina a otra por link ruta 

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {  
    $date = date('d-m-Y    H:i:s');
    return view('welcome', ['date' => $date]);
});
Route::get('/welcome', 'HomeController@index')->name('welcome');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('Producto/index', 'ProductoController@index')->name('verPanelAdmin');
        Route::get('/actualizaPrecios', 'CambioPreciosController@index')->name('ver-cambio-precio');
        Route::post('/actualizaPrecioCategoria', 'CambioPreciosController@updatePrecioCategoria')->name('update-precio-categoria');
    });
    
    Route::get('/verlistado', 'verlistadoController@listar')->name('verlista');
    Route::resource('libro', 'LibroController');
    Route::resource('producto', 'ProductoController');


    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('produ-list-pdf', 'ProduController@exportPdf')->name('produs.pdf');

    Route::get('productos', function () {
           $productos = App\Producto::paginate();

        $productos->withPath('custom/url');
    });

    Route::get('libros', function () {
           $libros = App\Libro::paginate();

        $Libros->withPath('custom/url');
    });






    Route::get('Libro/index', 'LibroController@index')->name('verLibroPedidos');

    //rutas para envio de mail 
Route::resource('/contactar','EmailController@contact');
    Route::post('/contactar', 'EmailController@contact')->name('contact');
    //Ruta que esta señalando nuestro formulario
    Route::get('/test', 'VistaTestController@vista');

    //Route::post('/contactar', 'EmailController@pedidoWeb')->name('pedidoWeb');
    //Route::get('Libro/create', 'VistaTestController@vistaPedido');
    //Ruta para envio cuando se hace pedido


    Route::get('/search','ProductoController@search');

    //ruta para search-boton busqueda
    /*Route::get('home/searchredirect', function(){
         
         Nuevo: si el argumento search está vacío regresar a la página anterior 
        if (empty(Input::get('search'))) return redirect()->back();
        
        $search = urlencode(e(Input::get('search')));
        $route = "/search/$search";
        return redirect($route);
    });
    Route::get("/search/{search}", "HomeController@search");
    */

});

































