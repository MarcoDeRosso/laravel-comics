@extends('templates.base')

@section('title', 'Product')

@section('content')
<div class="contaier-fluid product-main">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>{{$comics[$arrayIndex]['title']}}</h1>
                <div>
                    <span>U.S.Price:{{$comics[$arrayIndex]['price']}}</span>
                    <span>Check Availability</span>
                </div>
                <p>{{$comics[$arrayIndex]['description']}}</p>
            </div>
            <div class="col-2">
                <img src="{{$comics[$arrayIndex]['thumb']}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4>Talent</h4>
                <div class="d-flex">
                    <h5>Art By:</h5>
                    @foreach($comics [$arrayIndex]['artists'] as $item )
                        <a href="">{{$item}}</a>
                    @endforeach
                </div>
                <div class="d-flex">
                    <h5>Written By:</h5>
                    @foreach($comics [$arrayIndex]['writers'] as $item )
                        <a href="">{{$item}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-6">

            </div>

        </div>
    </div>
</div>
    <a href="{{route ('homepage')}}">CLICCA QUI!</a>
@endsection