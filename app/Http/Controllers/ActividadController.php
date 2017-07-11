<?php
/**
 * Created by PhpStorm.
 * User: barbb
 * Date: 11/07/2017
 * Time: 11:13
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ActividadController extends Controller {

    public function listar($id_evento){

        $actividades = DB::table('t_actividad')->where('id_evento',$id_evento)->get();

        return view('actividad')->with(['actividades'=>$actividades]);
    }

}