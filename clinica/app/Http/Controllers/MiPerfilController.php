<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class MiPerfilController extends Controller
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
        return view('modulos.Mis-Datos');
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
        //
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
        $id = auth()->user()->id;
        $pacientes = DB::select('select * from users where id=' . $id);
        return view('modulos.Mis-Datos', compact('pacientes'));
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
        $pacientes[0] = User::findOrFail($id);

        $Contraseña = $request->input('password');

        if (strlen($Contraseña)<= 0) {

            $pacientes[0]->name = $request->input('name');
            $pacientes[0]->email = $request->input('email');
            $pacientes[0]->password = $pacientes[0]->password;
            $pacientes[0]->documento = $request->input('documento');
            $pacientes[0]->telefono = $request->input('telefono');
            $pacientes[0]->save();

            return redirect('Mis-Datos-edit/{id}')->with('actualizadoD', 'Si');
        }else{
            if (strlen($Contraseña) >= 8) {

                $pacientes[0]->name = $request->input('name');
                $pacientes[0]->email = $request->input('email');
                $ContraseñaDB = Hash::make($Contraseña);
                $pacientes[0]->password = $ContraseñaDB;
                $pacientes[0]->documento = $request->input('documento');
                $pacientes[0]->telefono = $request->input('telefono');
                $pacientes[0]->save();
    
                return redirect('Mis-Datos-edit/{id}')->with('actualizadoD', 'Si');
    
            } else {
    
                $pacientes[0]->name = $request->input('name');
                $pacientes[0]->email = $request->input('email');
                $pacientes[0]->documento = $request->input('documento');
                $pacientes[0]->telefono = $request->input('telefono');
                $pacientes[0]->save();
    
                return redirect('Mis-Datos-edit/{id}')->with('actualizadoD', 'No');
            }
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
        //
    }
}
