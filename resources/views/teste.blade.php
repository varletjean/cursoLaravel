@extends('layout.site')

@section('titulo','Teste')

@section('conteudo')

<h2>Abriu a view Teste!</h2>
<br>

@foreach ($menu as $links )

<p>{{$links['titulo']}}</p>
    
@endforeach

@endsection