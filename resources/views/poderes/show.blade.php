@extends('layout.mainlayout')
    @section('content')
        <h1>{{$poder->nome}}</h1>
        <ul>
            <li>
                {{$poder->acao}}
            </li>
            <li>
                {{$poder->tipo}}
            </li>
            <li>
                {{$poder->descricao}}
            </li>
        </ul>

    @stop