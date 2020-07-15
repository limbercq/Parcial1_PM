<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identificador;

class IdentificadorController extends Controller
{
      public function index(Request $request)
      {
            if(!$request->ajax()) return redirect('/');
            $personas = Identificador::join('users','users.usuario','=','identificadors.ci')
            ->select('nombre','ci','f_naci','residencia')
            ->orderBy('id', 'asc')
            ->get();
            return $personas;
      }

      public function usuario(Request $request)
      {
            if(!$request->ajax()) return redirect('/');
            $usuario = Identificador::join('users','users.usuario','=','identificadors.ci')
            ->select('nombre','identificadors.ci','f_naci','residencia','color')
            ->where('identificadors.ci',\Auth::user()->usuario)
            ->get();

            return $usuario[0];
      }

}
