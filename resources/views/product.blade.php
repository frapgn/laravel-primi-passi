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
    <a href="{{$id >= 1 && $id <= count($products) - 1 ? route('product.show', $id - 1) : '#'}}" class="products-navigation prev-prod">
        <span class="{{$id < 1 ? 'hidden' : 'visible'}}"> < </span>
        <span class="{{$id >= 1 ? 'hidden' : 'visible'}}"> x </span>
    </a>

    <a href="{{$id >= 0 && $id <= count($products) - 2 ? route('product.show', $id + 1) : '#'}}" class="products-navigation next-prod">
        <span class="{{$id > count($products) - 2 ? 'hidden' : 'visible'}}"> > </span>
        <span class="{{$id <= count($products) - 2 ? 'hidden' : 'visible'}}"> x </span>
    </a>

    {{-- <a href={{route('product.show', $id - 1)}} class="products-navigation prev-prod">
        <span> < </span>
    </a> --}}

    {{-- <a href={{route('product.show', $id + 1)}} class="products-navigation next-prod">
        <span> > </span>
    </a> --}}
@endsection
