@extends('template')
@section('container')
<h1>Cadastro de Ator</h1>
<form action="cadastro" method="post">
@csrf
<input type="text" name="primeiroNome" id="">
<input type="text" name="segundoNome" id="">
<button type="submit">Enviar</button>
@if(isset($resultado))
    @if($resultado)
    <h1>cadastro concluido</h1>
    @else
    <h1>erro ao tentar cadastrar</h1>
    @endif
@endif
</form>