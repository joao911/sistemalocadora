@extends('template')

@section('container')
<h1>filmes</h1>
@if(isset($todosFilmes))
<ul>
    @foreach($todosFilmes as $filme)
    <li>
    {{ $filme->titulo }} <a href="/filme/editar/{{$filme->filme_id}}">Editar</a>
    </li>
    @endforeach
</ul>
@endif
@endsection