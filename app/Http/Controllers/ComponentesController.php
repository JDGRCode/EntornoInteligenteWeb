<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Componentes;
use Validator;

class ComponentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componentes = Componentes::all();
        return View('componentes.index', compact('componentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componentes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $componente = $request->all();
        $validator = Validator::make($componente, [
        'Nombrecomp' => 'required|max:50',
        'Idtipocomp' => 'required|max:50',
        'Idatrixtipo' => 'required|max:50',
        
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            Componentes::create($componente);
            return redirect('componentes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $componentes = Componentes::find($id);
        return view('componentes.editar', compact('componentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nuevosDatoscomponentes = $request->all();
        $componente = Componentes::find($id);

        $validator = Validator::make($nuevosDatoscomponentes, [
        'Nombrecomp' => 'required|max:50',
        'Idtipocomp' => 'required|max:50',
        'Idestado' => 'required|max:50',


        'Idatrixtipo' => 'required|max:50',
        
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
       } else {           
           $componente->update($nuevosDatoscomponentes);
           return redirect('componentes');
}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Componentes::find($id)->delete();
        return redirect('componentes');
    }
}
