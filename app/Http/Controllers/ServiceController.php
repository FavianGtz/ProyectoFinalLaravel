<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class serviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Servicio::all();
        return view('homecobrador',compact('services'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('ima')) {
            $file=$request->file('ima');
            $name = time().$request->file('ima')->getClientOriginalName();
            $file->move(public_path().'/plantilla/images/',$name);
        }
        
        $servicio = new Servicio();
        $servicio->nombre= $request->input('nombre');
        $servicio->costo= $request->input('costo');
        $servicio->mora= $request->input('mora');
        $servicio->horario= $request->input('horario');
        $servicio->imagen= $name;
        $servicio->slug=$request->input('nombre');
        $servicio->save();

        return redirect('/cobrador/Servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $Servicio)
    {

        return view('watchServices',compact('Servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $Servicio)
    {
        return view('updateService',compact('Servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $Servicio)
    {
        $Servicio->fill($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $file=$request->file('imagen');
            $name = time().$request->file('imagen')->getClientOriginalName();
            $Servicio->imagen = $name;
            $file->move(public_path().'../plantilla/images/',$name);
        }
        $Servicio->save();

        return redirect('/Servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Servicio $Servicio)
    {
        
        $services = Servicio::find($Servicio);
        $Servicio->delete();
        return redirect("/cobrador/Servicio");
    }
}
