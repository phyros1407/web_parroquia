<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AuthController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function doLogin()
    {
        $usuario = mb_strtolower(trim(Input::get('usuario')));
        $password = Input::get('password');


        if (Auth::attempt(['usuario'=>$usuario, 'password'=>$password]))
        {
            return redirect('/home');
        }

        return back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('/')->with('msg', 'Gracias por visitarnos!.');
    }


}
