<?php

use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$productos = [
    ['nombre' => 'LAPIZ', 'descripcion' => 'Azul' , 'img' => 'http://www.jdevoto.cl/web/wp-content/themes/storefront/img/lapices-cat.jpg'],
    ['nombre' => 'BOLIGRAFO' , 'descripcion' => 'Linea', 'img' => 'http://www.jdevoto.cl/web/wp-content/themes/storefront/img/cat_boligrafos.jpg'],
    ['nombre' => 'CORCHETERA' , 'descripcion' => 'Grande', 'img' => 'http://www.jdevoto.cl/web/wp-content/uploads/2018/04/0912012-416x416.jpg'],
    ['nombre' => 'ESTUCHE' , 'descripcion' => 'Metalico', 'img' => 'http://www.jdevoto.cl/web/wp-content/uploads/2018/04/2629004-416x416.jpg'] ,
    ['nombre' => 'SELLOS' , 'descripcion' => 'Cuadro', 'img' => 'http://www.jdevoto.cl/web/wp-content/themes/storefront/img/sellos.jpg'], 
    ['nombre' => 'REGLAS', 'descripcion' => '30 CM', 'img' => 'http://www.jdevoto.cl/web/wp-content/themes/storefront/img/regla-cat.jpg'],
    ['nombre' => 'NAIPES', 'descripcion' => 'Ingles', 'img' => 'http://www.jdevoto.cl/web/wp-content/themes/storefront/img/naipes_cat.jpg'],    
];

/*
$productos = array(		
	'Bolígrafo Azul' => array(
		'marca' => "Bic",
		'precio'  => "0.75€",
		'referencia'  => "552BIC12"
	),	
	'Pegamento' => array(
		'marca' => "Pritt",
		'precio'  => "1.75€",
		'referencia'  => "567PRI13"
	)
);

*/




$marcas = [
    ['nombre' => 'INSTANT'],
    ['nombre' => 'RAPID'],
    ['nombre' => 'LUZOZ'],
    ['nombre' => 'CARIOCA'],
    ['nombre' => 'M+R'], 
    ['nombre' => 'TRAXX'],
    ['nombre' => 'SDI'],   
    ['nombre' => 'FORTNIER'],  
    ['nombre' => 'HANDS'],
];


$carro =  [];



Route::view('/productos','productos', compact('productos'))->name('productos');
Route::view('/marcas','marcas', compact('marcas'))->name('marcas');
Route::view('/carro','carro', compact('carro'))->name('carro');

Route::view('/conn','conn')->name('conn');


Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});


Route::get('conn', function () {
    return view('conn');
});

/*
Route::get('marcas', function () {
    return view('marcas');
});
*/
Route::get('sucursales', function () {
    return view('sucursales');
});
Route::get('quienessomos', function () {
    return view('quienessomos');
});


Route::get('cotizacion', function () {
    return view('cotizacion');
});

/*
Route::get('carro', function () {
    return view('carro');
});
*/


Route::get('ayuda', function () {
    return view('ayuda');
});



Route::get('contacto', function () {
    $correo = new ContactanosMailable;
    Mail::to('alex_heresmann@live.cl')->send($correo);
    return "Mensaje enviado";
    return view('emails/contactanos');
});


Route::post('contact','MessagesController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


