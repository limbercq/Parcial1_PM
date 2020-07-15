<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotasController extends Controller
{
    public function index(Request $request)
      {
        if(!$request->ajax()) return redirect('/');
        $notas = DB::select("select COUNT(residencia) as nro_aprobado,
        case residencia 
            when 'lp' then 'La Paz'
            when 'cb' then 'Cochamaba' 
            else 'Oruro' end as depto
        FROM identificadors ident, notas nt
        where ident.ci = nt.ci
        and  nota_final>50
        GROUP BY residencia");

        $personas = DB::select("select nombre, nt.ci, nota_final, materia,
        case residencia 
            when 'lp' then 'La Paz'
            when 'cb' then 'Cochamaba' 
            else 'Oruro' end as depto
        FROM identificadors ident, notas nt
        where ident.ci = nt.ci
        order by depto");
        return [
          'notas'=>$notas,
          'personas'=>$personas
        ];
      }
}
