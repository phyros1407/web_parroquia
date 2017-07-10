<?php
/**
 * Created by PhpStorm.
 * User: barbb
 * Date: 10/07/2017
 * Time: 17:42
 */
    use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\DB;

    class EventoController extends Controller {

        public function listarEventos(){
            $id_parroquia = DB::table('t_clerigo')->where('id_sacerdote',Auth::user()->id_persona);
            $eventos = DB::table('t_evento')->where('id_parroquia', $id_parroquia);

            return $eventos;
        }

    }