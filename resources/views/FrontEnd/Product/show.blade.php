@extends('FrontEnd.app')
@section('title'){{ $product->title }}@endsection

@section('content')
<!--Page Banner Start-->
<div class="section page-banner-wrapper bg-cover" style="background-image: url({{ asset('FrontEnd/images/page-banner.jpg') }});">
    <div class="container">
        <div class="page-banner">
            <ul class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('home',app()->getLocale()) }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories',app()->getLocale()) }}">{{ __('Categories') }}</a></li>
                <li class="breadcrumb-item active">{{ $product->title }}</li>
            </ul>
        </div>
    </div>
</div>
<!--Page Banner Start-->

<!--Shop Single Start-->

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
                                            <img src="{{ url('/uploads') }}/{{ $product->image }}" alt="{{ $product->title }}">
                                            @else
                                            <img src="{{ asset ('FrontEnd/images/logo.png') }}" alt="{{ $product->title }}">
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
                                    @foreach ($gallery as $item)
                                    <div class="swiper-slide">
                                        <div class="single-img zoom">
                                            <img src="{{ url('/uploads') }}/{{ $item->path }}" alt="{{ $product->title }}">
                                            <div class="inner-stuff">
                                                <div class="gallery-item" data-src="{{ url('/uploads') }}/{{ $item->path }}">
                                                    <a href="javascript:void(0)">
                                                        <i class="lastudioicon-full-screen"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <a href="#gallery-1" class="btn-gallery"><i class="ion-arrow-expand"></i></a>
                        </div>
                        <div class="product-thumbnail gallery-thumbs">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($gallery as $item)
                                    <div class="swiper-slide">
                                        <img src="{{ url('/uploads') }}/{{ $item->path }}" alt="{{ $product->title }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <div id="gallery-1" class="gallery-hidden">
                            @foreach ($gallery as $item)
                            <a href="{{ url('/uploads') }}/{{ $item->path }}">Koshary</a>
                            @endforeach
                        </div>
                    </div>
                <!-- ----end new img  -->
            </div>

            <div class="col-lg-6">
                <!-- Shop Single Content Start -->
                <div class="shop-single-content">
                    <h3 class="product-name">{{ $product->title }}</h3>
                    <div class="product-prices">
                        @if ($product->sale_price != NULL && $product->sale_end_date > now())
                        <span class="old-price">{{ number_format($product->sale_price) }} {{ __('EGP') }}</span>
                        <span class="sale-price">{{ number_format($product->price) }} {{ __('EGP') }}</span>
                        @else 
                        <span class="sale-price">{{ number_format($product->price) }} {{ __('EGP') }}</span>
                        @endif
                        @if($product->sale_end_date > now())
                        <span class="discount-percentage">{{ __('Save') }} {{ number_format(100 - ($product->sale_price / $product->price * 100)) }}%</span>
                        @endif
                    </div>
                    <div class="product-description">
                        <ul>
                            <li>{!! $product->description !!}</li>
                        </ul>
                    </div>

                    <form class="addtocart col-md-12" method="post" action="{{ Route('add-to-cart',app()->getLocale()) }}">
                        @csrf
                        <div class="product-action clearfix d-flex align-items-center gap-3">
                            <div class="product-quantity">
                                <button type="button" class="sub"><i class="ion-ios-arrow-down"></i></button>
                                <input type="number" name="qty" value="1" min='1' class="product-form__input qty" />
                                <button type="button" class="add"><i class="ion-ios-arrow-up"></i></button>
                            </div>

                            <input type="hidden" name="product" value="{{ $product->id }}" required=""/>
                            <input type="hidden" name="size" id='orderSize' value="" class="product-form__input" required="" />
                            @if($product->available =='Available')
                            <div class="product-form__item--submit">
                                <button type="submit" class="btn product-form__cart-submit btn-primary btn-hover-dark"><span>{{ __('Add to cart') }}</span></button>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
                <!-- Shop Single Content End -->
            </div>
        </div>
    </div>
</div>

@if($relatedProducts->Count() > 0)
<!--New Arrivals Start-->
<div class="section section-padding-02">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <span class="sub-title">{{ __('other products in the same category:') }} </span>
            <h2 class="title">{{ __('Other Products') }}</h2>
        </div>
        <!-- Section Title End -->


       <!-- new ---------------------------------------------------------- -->
       <div class="product-4-active">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($relatedProducts as $relatedProduct)
                <div class="swiper-slide">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <div class="product-image">
                            <a class="product-thumbnail" href="{{ Route('product-details', ['slug' => $relatedProduct->Category->slug, 'prodSlug' => $relatedProduct->slug,'locale'=>app()->getLocale()]) }}">
                                <img src="{{ url('/uploads') }}/{{ $relatedProduct->image }}" alt="{{$relatedProduct->title}}">
                                @if($relatedProduct->image_two !='')
                                    <img class="image-hover" src="{{ url('/uploads') }}/{{ $relatedProduct->image_two }}" alt="product">
                                @else
                                    <img class="image-hover" src="{{ url('/uploads') }}/{{ $relatedProduct->image }}" alt="product">
                                @endif
                            </a>
                            <div class="product-action">
                                <a href="{{ Route('product-details', ['slug' => $relatedProduct->Category->slug, 'prodSlug' => $relatedProduct->slug,'locale'=>app()->getLocale()]) }}" class="action"><i class="ion-bag"></i></a>
                            </div>
                            @if($relatedProduct->sale_end_date > now())
                                <div class="product-flag">
                                    <span class="discount">-{{ number_format(100 - ($relatedProduct->sale_price / $relatedProduct->price * 100)) }}%</span>
                                </div>
                            @endif
                        </div>
                        <div class="product-content">
                            <h4 class="product-title"><a href="{{ Route('product-details', ['slug' => $relatedProduct->Category->slug, 'prodSlug' => $relatedProduct->slug ,'locale'=>app()->getLocale()]) }}">{{ $relatedProduct->title }}</a></h4>
                            <div class="manufacturer"><a href="{{ Route('product-details', ['slug' => $relatedProduct->Category->slug, 'prodSlug' => $relatedProduct->slug,'locale'=>app()->getLocale()]) }}">{!! $relatedProduct->description !!}</a></div>
                            <div class="product-price">
                                @if ($relatedProduct->sale_price != NULL && $relatedProduct->sale_end_date > now())
                                    <span class="sele-price">{{$relatedProduct->sale_price}} {{ __('EGP') }}</span>
                                    <span class="regular-price">{{$relatedProduct->price}} {{ __('EGP') }}</span>
                                    @else 
                                    <span class="sele-price">{{$relatedProduct->price}} {{ __('EGP') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
                @endforeach

            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-button-next"><i class="ion-ios-arrow-right"></i></div>
        <div class="swiper-button-prev"><i class="ion-ios-arrow-left"></i></div>
    </div>
   <!-- end-new ------------------------------------------------------------------- -->

    </div>
</div>
<!--New Arrivals End-->
@endif

@endsection
