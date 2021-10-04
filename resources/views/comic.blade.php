@extends('layouts.main')

@section('title', $comic['title'])

@section('content')
<section id="comic">
    <div class="cover">
        <figure class="container">
            <img src="{{ $comic['thumb'] }}" alt="$comic['title']">
        </figure>
    </div>
    <div class="row container">
        <div class="col description">
            <h1>{{ $comic['title'] }}</h1>
            <div class="price">
                <div class="price-left">
                    <div class="price-number">U.S. Price: <span>{{ $comic['price'] }}</span></div>
                    <div class="available">AVAILABLE</div>
                </div>
                <div class="price-right">Check Availability &#9660;</div>
            </div>
            <div class="text">
                {{ $comic['description'] }}
            </div>
        </div>
        <div class="col adv">
            <img src="{{ asset('images/adv.jpg') }}" alt="adv">
        </div>
    </div>
</section>
    
@endsection