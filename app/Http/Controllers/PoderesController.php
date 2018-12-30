<?php
namespace pld\Http\Controllers;

use Request;
use pld\poderes;

class PoderesController extends Controller {
    
    public function index(){
        $poderes = Poderes::all();
        return view('poderes.index')->with('poderes', $poderes);
    }

    public function find($id){
        $reposta = Poderes::find($id);
        if (empty($reposta)){
            return 'Dado inexistente';
        }
        return view('poderes/show')->with('poder',$reposta);
    }
    
    public function findByNome(){
        // dd(Poderes::where('nome',Request::input('nome')));
        $poderes = Poderes::where('nome', 'like', Request::input('nome').'%')->get();

// dd($poderes[0]);

        return view('poderes.index')->with('poderes', $poderes);
    }
}
