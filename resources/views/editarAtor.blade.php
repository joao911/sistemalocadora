@extends('template')
@section('container')
<h1>Cadastro de Ator</h1>
<form action="/ator/editar{{}}" method="post">
@csrf
<input type="text" name="ator_id" value="{{ator->ator_id}}" hidden>
<input type="text" name="primeiroNome" value="{{ator->primeiro_nome}}">
<input type="text" name="segundoNome" value="{{ator->ultimo_nome}}">
<button type="submit">Enviar</button>
@if(isset($resultado))
    @if($resultado)
    <h1>Edição concluida</h1>
    @else
    <h1>erro ao tentar editar</h1>
    @endif
@endif
@endsection
</form>