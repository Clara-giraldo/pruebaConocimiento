<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{

    public function index()
    {
        //
        if (Auth::check()) {

	        // Si la validación es correcta muestra las noticias.
	        return view('noticias');
	    }

	    // Si la validación es incorrecta le mostramos la vista con el formulario de login
	    return view('login');

    }


    public function create()
    {
        //Se direcciona al formulario de agregar
        return view('agregar');
    }


    public function store(Request $request)
    {
        //Se obtienen los datos y se guarda en la base de datos
        $usuarios = new User();
        $usuarios->name = $request->post('name');
        $usuarios->email = $request->post('email');
        $usuarios->password = bcrypt($request->post('password'));
        $usuarios->save();
        // si la creación del corido es correcta se procede a ingresar al Dashboard
        auth()->login($usuarios);
        return redirect('dashboard');
    }

    public function login(Request $request)
	{
	    // Comprobamos que el email y la contraseña han sido introducidos
        $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);

	    // Almacenamos las credenciales de email y contraseña
	    $credentials = $request->only('email', 'password');

	    // Si el usuario existe ingresa y lo llevamos a la vista de "noticias"
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('noticias')
	            ->withSuccess('Logado Correctamente');
	    }

	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');
	}


	public function noticias()
	{
        //si el usuario se loguea correctamente se redirecciona al formulario de noticias
	    if (Auth::check()) {
	        return view('noticias');
	    }

	    return redirect("/")->withSuccess('No tienes acceso, por favor inicia sesión');
    }



}
