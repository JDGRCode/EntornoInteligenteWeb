<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Usuario;
use App\Perfil;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class HorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::all(); 
        return view('horarios.index', compact('horarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $horarios = Usuario::all();
         return view('horarios.crear',  compact('horarios'));

        $horarios = Perfil::all();
        return view('horarios.crear',  compact('horarios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horarios = $request->all();
        $validator = Validator::make($horarios, [
        'nomusuario' => 'required|max:50',
        'apeusuario' => 'required|max:50',
        'telefono' => 'required|max:50',
        'rol_id' => 'required|max:50',
        
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            usuario::create($usuario);
            return redirect('horarios');
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
      $horarios = Horario::find($id);
       return view('horarios.editar', compact('horarios'));
     }

        public function update(Request $request, $id)
         { 
             $nuevosDatosHorario = $request->all();
              $horarios = Horario::find($id);
        $validator = Validator::make($nuevosDatosHorario, [ 
            'id'    => 'required|max:50', 
            'horainicio'  => 'required|max:50', 
            'horafin'    => 'required|max:50', 
            'fechainicio' => 'required|max:50',
               'fechafin'  => 'required|max:50', 
               'diasemana'=> 'required|max:50'
               ]);
        
        $horarios->update($nuevosDatosHorarios); return redirect('Horario');
        }
       
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Horario::find($id)->delete();
        return redirect('horarios');
    }
}
