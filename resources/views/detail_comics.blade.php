@extends('layouts.app')

@section('content')
    <div class="blue-section-image">
        <div class="wrapper-single-item">
            <img <img src="{{$item['thumb']}}" alt="">>
        </div>
    </div>
    <div class="white-section-description">
        <div class="wrapper-single-item">
            <div class="title-comic">{{$item['title']}}</div>
            <div class="row-white-section gap-20">
                <div class="left-col">
                    <div class="green-buttons">
                        <div class="row-white-section">
                            <div class="price-button">
                                <div class="row-white-section">
                                    <div class="price">U.S Price {{ $item['price'] }}</div>
                                    <div class="availability">AVAILABLE</div>
                                </div>
                            </div>
                            <div class="availability-button">Check avaibility</div>
                        </div>
                    </div>
                    <div class="paragraph-comic">{{$item['description']}}</div>
                </div>
                <div class="right-col">
                    <img src="{{Vite::asset('/resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection