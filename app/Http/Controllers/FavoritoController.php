<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Favorito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritoController extends Controller
{
 
    public function index()
    {
        $favoritas = DB::table('noticias')
            ->join('categorias', 'noticias.id_categoria', '=', 'categorias.id')
            ->join('favoritos', 'favoritos.id_noticia', '=', 'noticias.id')
            ->join('users', 'users.id', '=', 'favoritos.id_usuario')
            ->select('noticias.*', 'categorias.nombre as categoria')
            ->where('users.id', Auth::id())->paginate(2);

        return view('favoritas', compact('favoritas'));
    }

    public function store($id)
    {
        //verificar que no se repita
        $existe = DB::select("SELECT count(*) as cantidad from favoritos where id_usuario = ".Auth::id()." and id_noticia = ".$id);
        if($existe[0]->cantidad == 0){
            DB::insert("INSERT into favoritos (id_usuario, id_noticia) values (".Auth::id().", ".$id.")");
            return redirect()->route("favoritas.index")->with("success", "Noticia agregada a favoritos.");
        }else{
            return redirect()->route("noticias.index")->with("warning", "Ya tenías esa noticia en favoritos.");
        }
    }

    public function destroy($id)
    {
        DB::delete("DELETE from favoritos where id_usuario = ".Auth::id()." and id_noticia = ".$id);
        return redirect()->route("favoritas.index")->with("warning", "Noticia eliminada de favoritos.");
    }
}
