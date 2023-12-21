<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Preferencia;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreferenciaController extends Controller
{

    public function edit(Preferencia $preferencia)
    {
        $categorias = Categoria::all();

        $preferencias_user = DB::select("SELECT c.id, c.nombre
            from categorias c
            join preferencias p on p.id_categoria = c.id
            join users u on u.id = p.id_usuario
            where u.id = ".Auth::id());
        return view('preferencias', compact('categorias', 'preferencias_user'));
    }

    public function update(Request $request)
    {
        //borramos lo anterior
        DB::delete("DELETE from preferencias where id_usuario = ".Auth::id());

        //insertamos las nuevas preferencias
        if($request->post('preferencia') !== null){
            foreach($request->post('preferencia') as $valor){
                DB::insert("INSERT into preferencias (id_usuario, id_categoria) values (".Auth::id().", ".$valor.")");
            }
        }

        return redirect()->route("noticias.index");
    }

}
