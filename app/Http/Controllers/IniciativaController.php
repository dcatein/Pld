<?php

namespace pld\Http\Controllers;

use Illuminate\Http\Request;

class IniciativaController extends Controller
{
    public function index(){
        return view('iniciativa.index');
    }
}
