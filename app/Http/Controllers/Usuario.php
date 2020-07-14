<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Identificador;
use Illuminate\Support\Facades\DB;

class Usuario extends Controller
{
    public function guardar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try{
            DB::beginTransaction();
            $persona = new Identificador();
            $persona->nombre = $request->nombre;
            $persona->ci = $request->ci;
            $persona->f_naci = $request->f_naci;
            $persona->residencia = $request->residencia;
            $persona->save();

            $user = new User();
            $user->usuario = $request->ci;
            $user->password = bcrypt($request->ci);
            $user->color = '#f8f9fa';
            $user->save();

            DB::commit();

        } catch (Exception $e){
            DB::rollBack();
        }   
    }

    public function update(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $persona = User::findOrFail($request->ci);
        $persona->color = $request->color;
        $persona->save();

        return $persona;
    }
}
