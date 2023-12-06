<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{

    public function index()
    {
        //
        if (Auth::check()) {

	        // Si está logado le mostramos la vista de noticias
	        return view('noticias');
	    }
    }


    public function create()
    {
        //
        return view('agregar');
    }


    public function store(Request $request)
    {
        //
        $usuarios = new Usuarios();
        //echo "<pre>";print_r($request->post());exit;
        $usuarios->name = $request->post('nombre');
        $usuarios->email = $request->post('email');
        $usuarios->password = $request->post('password');
        $usuarios->save();

        return redirect()->route('usuarios.index')->with('success', "Agregado con Exito");
    }


    public function show(Usuarios $usuarios)
    {
        //
    }

    public function edit(Usuarios $usuarios)
    {
        //
    }


    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }


    public function destroy(Usuarios $usuarios)
    {
        //
    }

    
}
