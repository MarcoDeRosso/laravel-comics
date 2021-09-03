@extends('templates.base')

@section('title', 'Product')

@section('content')
@dump($comics[$arrayIndex])
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>{{$comics[$arrayIndex]['title']}}</h1>
            <div>
                <span>U.S.Price:{{$comics[$arrayIndex]['price']}}</span>
                <span>Check Availability</span>
            </div>
            <p>{{$comics[$arrayIndex]['description']}}</p>
        </div>
        <div class="col-6">
            <img src="{{$comics[$arrayIndex]['thumb']}}" alt="">
        </div>
    </div>
</div>
    <a href="{{route ('homepage')}}">CLICCA QUI!</a>
@endsection