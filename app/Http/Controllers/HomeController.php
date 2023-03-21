<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Trabajo;
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

        $categorias = Categoria::all();

        $trabajos = Trabajo::orderBy('id', 'desc')->paginate(10);

        return view("Administracion.loginDentro",compact("categorias","trabajos"));
    }

    public function loginFuera(Request $request){
        $request->session()->invalidate(); //invalida la sesion del usuario 
        $request->session()->regenerateToken(); // regenera el token

        return redirect()->route("loginAdministracion");
    }

    public function vistaCrearCategoria(){
        $categorias = Categoria::all()->sortBy("nombreCategoria");
        return view("Administracion.vistaCrearCategoria",compact("categorias"));
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
    

    public function store(Request $request){
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heif|max:16384',
        ]);
    
        foreach ($request->file('image') as $image) {
            $imageName = time().'_'.rand().'.'.$image->extension();//la funcion rand me genera un numero aleatorio para que las imagenes no se repitan
            $image->move(public_path('imagenesTrabajos'), $imageName);
    
            $trabajo = new Trabajo();
            $trabajo->nombreCategoria = $request->categoria;
            $trabajo->imagen = $imageName;
            $trabajo->save();
        }
        session()->flash("correcto","Se han guardado correctamente las imágenes.");
        return redirect()->route("loginDentro");
    }



    public function eliminarCategoria(Request $request){
        $delete = Categoria::where("id",$request->id)->delete();
        session()->flash("eliminado","Se ha eliminado la categoría correctamente");

        return redirect()->route("vistaCrearCategoria");
    }
    public function eliminarTrabajo(Request $request){

        //return $request->imagen;
        $delete = Trabajo::where("id",$request->id)->delete();

        //$request->image->move(public_path('imagenesTrabajos'), $imageName);
        session()->flash("eliminado","Se ha eliminado correctamente");
        unlink(public_path('imagenesTrabajos') . '/' . $request->imagen);
        return redirect()->route("loginDentro");
    }


    public function fotos(){
        $trabajos = Trabajo::orderBy('id', 'desc')->get();
        $categorias = Categoria::all();
        return view("PaginaPrincipal.fotos",compact("trabajos","categorias"));
    }
}
