<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Servicio;
use Illuminate\Http\Request;

class SuscriptoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function pagos()
    {
        $services = Servicio::all();
        return view('proxpagos',compact('services'));
    }
    public function datas(){
         $select = DB::select('SELECT * FROM users WHERE id IN(SELECT user_id FROM suscriptores)'); 
    	 $select1 = DB::select('SELECT servicios.nombre,servicios.costo,pagos.* FROM servicios,suscriptores,pagos WHERE servicios.id IN(SELECT suscriptores.servicio_id FROM servicios WHERE suscriptores.id IN(SELECT pagos.suscriptor_id FROM suscriptores))'); 
         $select2 = DB::select('SELECT servicios.nombre,suscriptores.* FROM servicios,suscriptores WHERE servicios.id IN(SELECT suscriptores.servicio_id FROM servicios)'); 
        
        return view('suscriptores',compact("select","select1","select2"));
    }
}
