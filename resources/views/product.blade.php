@extends('templates.base')

@section('title', 'Product')

@section('content')
<div class="blue-row">
    <div class="container">
        <img src="{{$comics[$arrayIndex]['thumb']}}" alt="">
    </div>
</div>
<div class="contaier-fluid product-main">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>{{$comics[$arrayIndex]['title']}}</h1>
                <div class="green d-flex justify-content-between">
                    <div class="green-price">U.S.Price: {{$comics[$arrayIndex]['price']}}</div>
                    <div class="green-av">Check Availability</div>
                </div>
                <p>{{$comics[$arrayIndex]['description']}}</p>
            </div>
            <div class="col-3">
                <img src="/images/adiv.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <div class="details">
                    <h4>Talent</h4>
                    <div class="details-inner d-flex">
                        <h5>Art By:</h5>
                        <p>
                            @foreach($comics [$arrayIndex]['artists'] as $item )
                                <a href="">{{$item}}</a>
                            @endforeach
                        </p>
                    </div>
                    <div class="details-inner d-flex">
                        <h5>Written By:</h5>
                        <p>
                            @foreach($comics [$arrayIndex]['writers'] as $item )
                                <a href="">{{$item}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
                <di class="details"v>
                    <h4>Specs</h4>
                    <div class="details-inner d-flex">
                        <h5>Series:</h5>
                        <a href="">{{strtoupper($comics [$arrayIndex]['series'])}}</a>
                    </div>
                    <div class="details-inner d-flex">
                        <h5>U.S.Price:</h5>
                        <span>{{$comics[$arrayIndex]['price']}}</span>
                    </div>
                    <div class="details-inner d-flex">
                        <h5>On Sale Date:</h5>
                        <span>{{$comics[$arrayIndex]['sale_date']}}</span>
                    </div>
                </di>
            </div>

        </div>
    </div>
</div>
@endsection