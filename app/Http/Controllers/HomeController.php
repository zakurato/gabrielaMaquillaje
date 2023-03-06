<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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

    public function vistaCrearCategoria(){
        return view("Administracion.vistaCrearCategoria");
    }

    public function storeCategoria(Request $request){

        $categorias = Categoria::all();

        $existe = 0;
        
        foreach($categorias as $item){
            if($item->nombreCategoria == $request->nombreCategoria){
                $existe = 1;
                break;
            }
        }

        if($existe == 0){
            $nuevaCategoria = new Categoria();
            $nuevaCategoria->nombreCategoria = $request->nombreCategoria;
            $nuevaCategoria->save();
            session()->flash("categoriaCorrectamente","La categoria creada correctamente");
            return redirect()->route("vistaCrearCategoria");
        }else{
            session()->flash("categoriaExiste","La categoria ya existe");
            return redirect()->route("vistaCrearCategoria");
        }
    }
    
}
