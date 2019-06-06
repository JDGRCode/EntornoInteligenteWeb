<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Perfil;
use Validator;
class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil = Perfil::all();
        return View('perfil.index', compact('perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perfil = Perfil::all();
        return View('perfil.crear',compact('perfil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = $request->all();
        $validator = Validator::make($perfil, [
            'componentes_id',
            'estados_id', 
            'usuario_id' 
        
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            Perfil::create($perfil);
            return redirect('perfil');
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
        $perfil = perfil::find($id);
        return view('perfil.editar', compact('perfil'));
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
        $nuevosDatosPerfil = $request->all();
        $perfil = Perfil::find($id);

        $validator = Validator::make($nuevosDatosPerfil, [
            'componentes_id',
            'estados_id', 
            'usuario_id' 

        
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
       } else {           
           $perfil->update($nuevosDatosPerfil);
           return redirect('perfil');
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
        Perfil::find($id)->delete();
        return redirect('perfil');
    }
}
