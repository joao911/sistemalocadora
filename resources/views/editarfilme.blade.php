@extends('template')
@section('container')
<h1>Editar Filme</h1>
<form action="/filme/editar/{{$filme->filme_id}}" method="post">
@csrf
<input type="text" name="filmeTitulo" value="{{$filme->titulo}}">
<input type="text" name="filmeId" value="{{$filme->filme_id}}" hidden>
<button type="submit">Enviar</button>
</form>
@if(isset($resultado))
    @if($resultado)
    <h1>Edição concluida</h1>
    @else
    <h1>erro ao tentar editar</h1>
    @endif
@endif
@endsection