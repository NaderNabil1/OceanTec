@extends('FrontEnd.app')
@section('title'){{ $product->title }}@endsection

@section('content')


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- ----start new img  -->
                <div class="shop-single-image">
                        <div class="gallery-top">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-img zoom">
                                        @if($product->image != '')
                                        <img src="{{ url('/uploads') }}/{{ $product->image }}" alt="{{ $product->title}}" class="img-responsive" />
                                        @else
                                        <img src="{{ asset('FrontEnd/img/nophoto.jpg') }}" alt="{{ $product->title}}" class="img-responsive" />
                                        @endif
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="{{ url('/uploads') }}/{{ $product->image }}">
                                                    <a href="javascript:void(0)">
                                                        <i class="lastudioicon-full-screen"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ----end new img  -->
            </div>

            <div class="col-lg-6">
                <!-- Shop Single Content Start -->
                <div class="shop-single-content">
                    </br>
                    <h3 class="product-name" style="font-size:50px;">{{ $product->title }}</h3>
                    <div class="product-prices">
                        <span class="sale-price"style="font-size:30px;">{{ number_format($product->price) }} {{ __('EGP') }}</span>
                    </div>
                    <div class="product-description">
                        <ul>
                            <li style="font-size:30px;">{!! $product->description !!}</li>
                        </ul>
                    </div>
                </div>
                <!-- Shop Single Content End -->
            </div>
        </div>
    </div>
</div>



@endsection
