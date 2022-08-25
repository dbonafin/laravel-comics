@extends('layout.app')

@section('title')
    {{ $active_item['title'] }}
@endsection

@section('main-section')
    <section>

        {{-- Floating thumb of the active comic book --}}
        <div class="top-details">
            <div class="details-thumb">
                <img src="{{ $active_item['thumb'] }}" alt="{{ $active_item['title'] }}">
            </div>
        </div>

        {{-- General infos about the active comic book --}}
        <div class="item-details-wrapper">
            {{-- Top section of the single comic details: overview, availability.. --}}
            <div class="item-details-top">
                <div class="details-info">
                    <h1>{{ $active_item['title'] }}</h1>

                    <div class="price-and-available">
                        <h4>available</h4>
                    </div>

                    <p>{{ $active_item['description'] }}</p>
                </div>
    
                <div class="adv-thumb">
                    <h4>advertisement</h4>
                    <img src="../images/adv.jpg" alt="advertising dc power visa">
                </div>
            </div>
        </div>

        {{-- Top section of the single comic details: specs, written by.. --}}
        <div class="item-specs-wrapper">

            <div class="info-specs">
                <div class="talent-box">
                    <h4>Talent</h4>

                    <div class="details-paragraph">
                        Art by: 
                       <div class="author-names">
                            @foreach ($active_item['artists'] as $writer) 
                                <a href="#">
                                    {{ $writer }}@if(!$loop->last), @endif
                                </a>
                            @endforeach
                       </div>
                    </div>

                    <div class="details-paragraph">
                        Written by: 
                        <div class="author-names">
                            @foreach ($active_item['artists'] as $writer) 
                                <a href="#">
                                    {{ $writer }}@if(!$loop->last), @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="specs-box">
                    <h4>Specs</h4>

                    <div class="details-paragraph">
                        Series
                        <div class="comic-specs series-detail">
                            {{ $active_item['series'] }}
                        </div>
                    </div>

                    <div class="details-paragraph">
                        U.S. price:
                        <div class="comic-specs">
                            {{ $active_item['price'] }}
                        </div>
                    </div>

                    <div class="details-paragraph">
                        On Sale Date:
                        <div class="comic-specs">
                            {{ $active_item['sale_date'] }}
                        </div>
                    </div>
                 

                </div>
            </div>
        </div>

        {{-- Shop section of the single comic book page --}}
        <div class="shop-wrapper">
            <div class="shop-section-single-item">
                <div class="container">
        
                    <!-- Shop section with all the shop-options elements -->
                    <ul>
                        <li>
                            <span>DIGITAL COMICS</span>
                            <a id="digital" href="#"></a>
                            
                        </li>
    
                        <li>
                            <span>SHOP DC</span>
                            <a id="shop" href="#"></a>
                        </li>
    
                        <li>
                            <span> COMIC SHOP LOCATOR</span>
                            <a id="locator" href="#"></a>
                        </li>
    
                        <li class="last-item">
                            <span>SUBSCRIPTIONS</span>
                            <a id="subscriptions" href="#"></a>
                        </li>
                         
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main-class')
    main-bg-details
@endsection