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

class ActividadController extends Controller {

    public function __construct()
    {


    }

    public function listar($id_evento){

        $actividades = DB::table('t_actividad')->where('id_evento',$id_evento)->get();

        if($actividades==null){
            return view('actividad')->with(['actividades'=>null,'id_evento'=>$id_evento]);
        }else{
            return view('actividad')->with(['actividades'=>$actividades,'id_evento'=>$id_evento]);
        }

    }

    public function eliminar($id_actividad,$id_evento){

        DB::table('t_actividad')->where('id', $id_actividad)->delete();

        return redirect('/actividades_evento/'.$id_evento);

    }

    public function editar(){

        date_default_timezone_set('America/Mexico_City');

        $id_actividad = Input::get('id_actividad');
        $id_evento = Input::get('id_evento');
        $titulo = Input::get('titulo');
        $descripcion = Input::get('descripcion');
        $fecha_inicio = Input::get('fec_ini2');
        $fecha_fin = Input::get('fec_fin2');
        $hora_inicio = Input::get('hor_ini');
        $hora_fin = Input::get('hor_fin');

        DB::table('t_actividad')
            ->where('id', $id_actividad)
            ->update (array('titulo' => $titulo, 'descripcion' => $descripcion,'inicio'=>$fecha_inicio." ".$hora_inicio, 'fin'=>$fecha_fin." ".$hora_fin));

        return redirect('/actividades_evento/'.$id_evento);

    }

    public function crear(){

        date_default_timezone_set('America/Mexico_City');

        $id_evento = Input::get('id_evento');
        $titulo = Input::get('titulo');
        $descripcion = Input::get('descripcion');
        $fecha_inicio = Input::get('fec_ini');
        $fecha_fin = Input::get('fec_fin');
        $hora_inicio = Input::get('hor_ini');
        $hora_fin = Input::get('hor_fin');



        $id = DB::table('t_actividad')->insertGetId(
            array('titulo' => $titulo, 'descripcion' => $descripcion,'id_evento'=>$id_evento,'inicio'=>$fecha_inicio." ".$hora_inicio, 'fin'=>$fecha_fin." ".$hora_fin)
        );

        return redirect('/actividades_evento/'.$id_evento);
    }

}