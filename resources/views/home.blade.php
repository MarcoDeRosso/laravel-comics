@extends('templates.base')

@section('title', 'HomePage')

@section('content')
 <h1>Qui ci vanno tutti i fumetti</h1>
    <a href="{{route ('productpage')}}">CLICCA QUI!</a>
@endsection