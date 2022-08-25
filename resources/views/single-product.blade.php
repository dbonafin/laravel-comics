@extends('layout.app')

@section('title')
    Details
@endsection

@section('main-section')
    <section>
        <div class="top-details">
            <div class="details-thumb">
                <img src="{{ $active_item['thumb'] }}" alt="{{ $active_item['title'] }}">
            </div>
        </div>

        <div class="comic-details-wrapper">

            <div class="comic-details-top">
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
    </section>
@endsection

@section('main-class')
    main-bg-details
@endsection