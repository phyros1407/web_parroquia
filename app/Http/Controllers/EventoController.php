<?php
/**
 * Created by PhpStorm.
 * User: barbb
 * Date: 10/07/2017
 * Time: 17:42
 */
    namespace App\Http\Controllers;
    use Illuminate\Contracts\Session\Session;
    use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    class EventoController extends Controller {

        public function listar(){

            $id_persona = Session::get('id_persona');

            $id_parroquia = DB::table('t_clerigo')->where('id_sacerdote',$id_persona)->first();
            $eventos = DB::table('t_evento')->where('id_parroquia', 1)->get();

            return view('evento')->with(['eventos'=>$eventos]);
            //return view('eventos')->with(['eventos'=>$eventos]);
        }

    }