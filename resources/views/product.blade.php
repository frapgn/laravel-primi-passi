@php
    $products = config('custom.products');
    $product = $products[$id];
@endphp

@extends('layouts.lyt_html_base')
@section('title')
    Home
@endsection

@section('common_css')
    {{asset('css/la-molisana.css')}}
@endsection

@section('specific_css')
    {{asset('css/product.css')}}
@endsection

@section('main_content')
    <div class="container">
        <h1>{{$product['titolo']}}</h1>
        <img src="{{$product['src-h']}}" alt="{{$product['titolo']}}">
        <img src="{{$product['src-p']}}" alt="{{$product['titolo']}}">
        <p>{!!$product['descrizione']!!}</p>
    </div>
@endsection
