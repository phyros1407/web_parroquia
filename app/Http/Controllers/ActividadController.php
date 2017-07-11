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
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ActividadController extends Controller {

    public function listar($id_evento){

        $actividades = DB::table('t_actividad')->where('id_evento',$id_evento)->get();

        return view('actividad')->with(['actividades'=>$actividades,'id_evento'=>$id_evento]);
    }

    public function eliminar($id_actividad,$id_evento){

        DB::table('t_actividad')->where('id', $id_actividad)->delete();

        return redirect('/actividades_evento/'.$id_evento);

    }

    public function editar(){

        $id_actividad = Input::get('id_actividad');
        $id_evento = Input::get('id_evento');
        $titulo = Input::get('titulo');
        $descripcion = Input::get('descripcion');
        $fecha_inicio = Input::get('fec_ini');
        $fecha_fin = Input::get('fec_fin');

        DB::table('t_actividad')
            ->where('id', $id_actividad)
            ->update (array('titulo' => $titulo, 'descripcion' => $descripcion,'inicio'=>date('Y-m-d',strtotime($fecha_inicio)), 'fin'=>date('Y-m-d',strtotime($fecha_fin))));

        return redirect('/actividades_evento/'.$id_evento);

    }

    public function crear(){

        $id_evento = Input::get('id_evento');
        $titulo = Input::get('titulo');
        $descripcion = Input::get('descripcion');
        $fecha_inicio = Input::get('fec_ini');
        $fecha_fin = Input::get('fec_fin');



        print $fecha_inicio;

        $id = DB::table('t_actividad')->insertGetId(
            array('titulo' => $titulo, 'descripcion' => $descripcion,'id_evento'=>$id_evento,'inicio'=>date('Y-m-d',strtotime($fecha_inicio)), 'fin'=>date('Y-m-d',strtotime($fecha_fin)))
        );

        return redirect('/actividades_evento/'.$id_evento);
    }

}