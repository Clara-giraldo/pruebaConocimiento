<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{

    public function index()
    {
        $noticias = DB::table('noticias')
            ->join('categorias', 'noticias.id_categoria', '=', 'categorias.id')
            ->join('preferencias', 'preferencias.id_categoria', '=', 'categorias.id')
            ->join('users', 'users.id', '=', 'preferencias.id_usuario')
            ->select('noticias.*', 'categorias.nombre as categoria')
            ->where('users.id', Auth::id())->paginate(2);

        return view('dashboard', compact('noticias'));
    }

}
