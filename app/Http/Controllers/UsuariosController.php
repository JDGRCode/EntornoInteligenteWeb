<?php
// Este es el controlador
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Validator;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = $request->all();
        $validator = Validator::make($usuario, [
        'NomUsuario' => 'required|max:50',
        'ApeUsuario' => 'required|max:50',
        'Telefono' => 'required|max:50',
        'IdRol' => 'required|max:50',
        
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            usuario::create($usuario);
            return redirect('usuarios');
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
        $usuario = usuario::find($id);
        return view('usuarios.editar', compact('usuario'));
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
        $nuevosDatosUsuario = $request->all();
        $usuario = usuario::find($id);

        $validator = Validator::make($nuevosDatosUsuario,[
            'NomUsuario' => 'required|max:50',
            'ApeUsuario' => 'required|max:50',
            'Telefono' => 'required|max:50',
            'IdRol' => 'required|max:50',
        ]);
         if ($validator->fails()) {
                 return back()->withErrors($validator)->withInput();
            } else {           
                $usuario->update($nuevosDatosUsuario);
                return redirect('usuarios');
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
        usuario::find($id)->delete();
        return redirect('usuarios');
    }
}
