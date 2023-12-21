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

	        // Si está logado le mostramos la vista de logados
	        return view('noticias');
	    }

	    // Si no está logado le mostramos la vista con el formulario de login
	    return view('login');

    }


    public function create()
    {
        //
        return view('agregar');
    }


    public function store(Request $request)
    {
        //
        $usuarios = new User();
        //echo "<pre>";print_r($request->post());exit;
        $usuarios->name = $request->post('nombre');
        $usuarios->email = $request->post('email');
        $usuarios->password = $request->post('password');
        $usuarios->save();

        return redirect()->route('noticias')->with('success', "Agregado con Exito");
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

	    // Si el usuario existe lo logamos y lo llevamos a la vista de "noticias" con un mensaje
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('noticias')
	            ->withSuccess('Logado Correctamente');
	    }

	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');
	}

	/**
	* Función que muestra la vista de noticias si el usuario está logado y si no le devuelve al formulario de login
	* con un mensaje de error
	*/
	public function noticias()
	{
	    if (Auth::check()) {
	        return view('noticias');
	    }

	    return redirect("/")->withSuccess('No tienes acceso, por favor inicia sesión');
    }



}
