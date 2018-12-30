<?php

namespace pld\Http\Controllers;

use Illuminate\Http\Request;

class TormentaController extends Controller
{
    public function index(){
        return view('tormenta.index');
    }
}
