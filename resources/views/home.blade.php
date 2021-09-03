@extends('templates.base')

@section('title', 'HomePage')

@section('content')
    <div class="container home-page-content">
        <div class="row">
            @foreach($comics as $item)
                <div class="product-card col-2 px-15">
                    <div
                    class="img-container"
                    style=" background-image: url('{{$item['thumb']}}');"
                    ></div>
                    <h3>{{ strtoupper($item['title'])}}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection