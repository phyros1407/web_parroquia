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
    use Illuminate\Support\Facades\Redirect;

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

            return redirect('/eventos');

        }

        public function desactivar($id_evento){

            print $id_evento;
            DB::table('t_evento')
                ->where('id', $id_evento)
                ->update(array('estado' => 'I'));

            return redirect('/eventos');

        }

        public function activar($id_evento){

            DB::table('t_evento')
                ->where('id', $id_evento)
                ->update(array('estado' => 'A'));

            return redirect('/eventos');

        }


        public function actualizar(){

            $titulo = Input::get('titulo');
            $descripcion = Input::get('descripcion');
            $id_evento = Input::get('id_evento2');

            DB::table('t_evento')
                ->where('id', $id_evento)
                ->update(array('titulo' => $titulo, 'descripcion'=>$descripcion));

            return redirect('/eventos');

        }

    }