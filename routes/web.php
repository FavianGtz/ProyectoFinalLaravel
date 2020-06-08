<?php

use Illuminate\Support\Facades\Route;
use App\Servicio;
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

Route::get('/', function () {
    if( Auth::user() )
    {
        if(Auth::user()->hasRole('cobrador')){
            return redirect("/cobrador/Servicio");
        }
        if(Auth::user()->hasRole('suscriptor')){
            return redirect("/suscriptor/ServicioSus");
        }
    }
    return redirect("/ServicioAno");
});

Route::get('/home', function () {
	if(Auth::user()->hasRole('cobrador')){
        return redirect("/cobrador/Servicio");
        }
        if(Auth::user()->hasRole('suscriptor')){
          
            return redirect("/suscriptor/ServicioSus");
        }
        return redirect("/ServicioAno");
});
Auth::routes();

Route::get('/historialPagosSuscriptor', function () {
    return view('hdepagossuscriptor');
});


Route::get('/ServicioAno', function () {
    $services = Servicio::all();
    return view('welcome',compact('services'));
});

Route::group(['prefix'=>'suscriptor','middleware'=>'role:suscriptor'],function(){
    Route::resource('ServicioSus','ServiceControllerSus');
    Route::get('historial','ServiceControllerSus@historialsus');
});

Route::group(['prefix'=>'cobrador','middleware'=>'role:cobrador'],function(){
    Route::resource('Servicio','ServiceController');
    Route::get('create', function () {
        return view('createService');
    });
    Route::get('verSusciptores','SuscriptoresController@datas');
    Route::get('proxPagos','SuscriptoresController@pagos');
});