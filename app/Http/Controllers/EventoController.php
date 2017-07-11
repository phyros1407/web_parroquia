<?php
/**
 * Created by PhpStorm.
 * User: barbb
 * Date: 10/07/2017
 * Time: 17:42
 */
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Input;

    class EventoController extends Controller {

        public function listar(){

            $id_persona = Auth::user()->id_persona;

            $resultado = DB::table('t_clerigo')->where('id_sacerdote',$id_persona)->first();

            $eventos = DB::table('t_evento')->where('id_parroquia', $resultado->id_parroquia)->get();

            return view('evento')->with(['eventos'=>$eventos, 'id_parroquia'=> $resultado->id_parroquia]);
        }

        public function crear(){

            $titulo = Input::get('titulo');
            $descripcion = Input::get('descripcion');
            $id_parroquia = Input::get('id_parroquia');

            $id = DB::table('t_evento')->insertGetId(
                array('titulo' => $titulo, 'descripcion' => $descripcion,'id_parroquia'=>$id_parroquia ,'estado'=>'A')
            );

            return view('evento');

        }

    }