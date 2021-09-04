@extends('templates.base')

@section('title', 'HomePage')

@section('content')
    <div  class="black-bacground">
        <div class="container home-page-content">
            <div class="row">
                @foreach($comics as $item)
                    <div class="product-card col-custom-2 px-15">
                        <a href="{{ route('productpage', [ 'id' => $loop->iteration ]) }}">
                            <div class="img-container" style=" background-image: url('{{$item['thumb']}}');"></div>
                            <h3>{{ strtoupper($item['title'])}}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection