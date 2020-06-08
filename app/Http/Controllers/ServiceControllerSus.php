<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Suscriptore;
use App\Pago;
use Illuminate\Support\Facades\DB;

class serviceControllerSus extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services = Servicio::all();
        return view('home',compact('services'));
    }

    
    public function store(Request $request)
    {
    
        $inserc = new Suscriptore();
        $inserc->user_id= $request->input('usuario');
        $inserc->servicio_id= $request->input('servicio');
        $inserc->save();

        $select = DB::table('suscriptores')->latest()->first();
        $ultimo = $select->id;
        $inserc2 = new Pago();
        $inserc2->user_id= $request->input('usuario');
        $inserc2->suscriptor_id= $ultimo;
        $inserc2->save();
        return redirect('/suscriptor/ServicioSus');
    }


    public function historialsus()
    {
    	$select1 = DB::select('SELECT servicios.nombre,servicios.costo,pagos.* FROM servicios,suscriptores,pagos WHERE servicios.id IN(SELECT suscriptores.servicio_id FROM servicios WHERE suscriptores.id IN(SELECT pagos.suscriptor_id FROM suscriptores))'); 
    	
    	return view('historialSus',compact("select1"));
    	
    }

}
