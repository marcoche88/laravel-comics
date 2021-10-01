@extends('layouts.main')

@section('title','Home')

@section('content')
    {{-- hero section --}}
    @include('includes.hero')

    {{-- cards section --}}
    <section id="contents">
        <section class="series-contents container">
            <div class="title">current series</div>
            <div class="series">
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                    <figcaption>{{ $comic['series'] }}</figcaption>
                </div>
                @endforeach
            </div>
            <div class="load-more">
                <div class="button-load pointer">load more</div>
            </div>
        </section>
    </section>

    {{-- content blue section --}}
    @include('includes.content_blue') 
@endsection