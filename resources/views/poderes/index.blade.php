@extends('layout.mainlayout')
    @section('content')
        <form method="get" action="/poderes/filter">
            <input name="nome" />
            <button type='submit'>PESQUISAR</button>
        </form>
        <table class="table">
           <thead>
            <tr>
                <td><strong>Nome</strong></td>
                <td><strong>Tipo</strong></td>
                <td><strong>Custo</strong></td>
            </tr>
           </thead>
            @foreach ($poderes as $poder)
            <tr>
                <td>{{$poder->nome}}</td>
                <td>{{$poder->tipo}}</td>
                <td>{{$poder->custo}}</td>
                <td><a href="{{action('PoderesController@find',$poder->id)}}"><i class="fas fa-search"></i></a></td>
            </tr>
            @endforeach
        </table>
    @stop
    