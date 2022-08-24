@extends('layout.app')

@section('main-section')
    <section class="cards-section">
        <div class="container">

            <!-- Element between jumbotron and the comics section -->
            <span class="current-btn btn">CURRENT SERIES</span>

            <!-- Container of all the cards -->
            <div class="cards-container">
                @foreach ($comics as $item)
                    {{-- Single product --}}
                    <div class="product-card single-card">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                        <h3>{{ $item['title'] }}</h3>
                    </div>
                @endforeach
            </div>

            <!-- Element at the end of the section - load more -->
            <div class="load-btn btn">LOAD MORE</div>

        </div>
    </section>
@endsection
