@php
    $products = config('custom.products');
    $product = $products[$id];
@endphp

@extends('layouts.lyt_html_base')
@section('title')
    {{$product['titolo']}}
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
    <a {{($id >= 2 && $id <= count($products) - 2 ? 'href="' . route('product.show', ($id - 1)) . '"' . ' class="products-navigation prev-prod"' : 'href="#"' . ' class="products-navigation prev-prod stop-navigation"')}}>
        <span> < </span>
    </a>
    @php
        // dd(count($products));
    @endphp
    <a href="c" class="products-navigation next-prod">
        <span> > </span>
    </a>
@endsection
