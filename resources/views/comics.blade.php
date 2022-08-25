@extends('layout.app')

@section('title')
    Comics
@endsection

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

    <div class="shop-section">
        <div class="container">

            <!-- Shop section with all the shop-options elements -->
            <ul>
                <li>
                    <a href="#">
                        <img src="../images/buy-comics-digital-comics.png" alt="digital comics">
                    </a>
                    <span>DIGITAL COMICS</span>
                </li>
                 <li>
                    <a href="#">
                        <img src="../images/buy-comics-merchandise.png" alt="merchandise">
                    </a>
                    <span>DC MERCHANDISE</span>
                </li>
                 <li>
                    <a href="#">
                        <img src="../images/buy-comics-subscriptions.png" alt="subscriptions">
                    </a>
                    <span>SUBSCRIPTIONS</span>
                </li>
                 <li>
                    <a href="#">
                        <img src="../images/buy-comics-shop-locator.png" alt="shop locator">
                    </a>
                    <span>SHOP LOCATOR</span>
                </li>
                 <li>
                    <a href="#">
                        <img src="../images/buy-dc-power-visa.svg" alt="dc power visa">
                    </a>
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
