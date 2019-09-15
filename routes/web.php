<?php
//ruta para borrar cache laravel
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {  
    $date = date('d-m-Y    H:i:s');
    return view('welcome', ['date' => $date]);
});
Route::get('/welcome', 'HomeController@index')->name('welcome');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('producto/index', 'ProductoController@index')->name('verPanelAdmin');
        Route::get('/actualizaPrecios', 'CambioPreciosController@index')->name('ver-cambio-precio');
        Route::post('/actualizaPrecioCategoria', 'CambioPreciosController@updatePrecioCategoria')->name('update-precio-categoria');
    });
    
    
    //Route::get('/reportepdf', 'ProduController@listar')->name('verReporte');
    Route::get('/reportepdf', 'ProdusController@export')->name('verReporte');
   //Route::get('/reportepdf', 'InvoiceController@export')->name('verReporte');
   Route::get('/verlistado', 'verlistadoController@listar')->name('verlista');
    
    Route::resource('libro', 'LibroController');
    Route::resource('producto', 'ProductoController');


    Route::get('/home', 'HomeController@index')->name('home');



    Route::get('productos', function () {
           $productos = App\Producto::paginate(20);

        $Productos->withPath('custom/url');
    });

    Route::get('libros', function () {
           $libros = App\Libro::paginate(20);

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

   

});

































