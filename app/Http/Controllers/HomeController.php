<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view("PaginaPrincipal.index");
    }

    public function loginAdministracion(){
        return view("Administracion.loginAdministracion");
    }

    public function login(Request $request){

        $request =  request()->only("email","password");
        if(Auth::attempt($request)){
            request()->session()->regenerate();
            //return "logeado correctamente";
            return redirect()->route("loginDentro");
        }else{
            session()->flash("errorLogueo","Correo o contraseña incorrecto");
            return redirect()->route("loginAdministracion");
        }
    }

    public function loginDentro(){
        return view("Administracion.loginDentro");
    }

    public function loginFuera(Request $request){
        $request->session()->invalidate(); //invalida la sesion del usuario 
        $request->session()->regenerateToken(); // regenera el token

        return redirect()->route("loginAdministracion");
    }
    
}
