<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function search(Request $resquest){

        $input = $request->all();
        $nome= $request->input('nome');
        $response =  Http::get('https://api.jikan.moe/v4/anime?q='.$nome);
       $animeTrovati = $response->json();

       return view('listaAnime',['anime'=>$animeTrovati['data']]);

    }

    public function animeById($id){

        $response =  Http::get('https://api.jikan.moe/v4/anime/'.$id);
        $anime=$responde->json();

        return view('dettaglioAnime',['anime'=>$anime['data']]);

    }
}
