@extends('FrontEnd.app')
@section('title'){{ $category->title }}  @endsection

@section('content')
<!--Page Banner Start-->
<div class="section page-banner-wrapper bg-cover" style="background-image: url({{ asset('FrontEnd/images/page-banner.jpg') }});">
    <div class="container">
        <div class="page-banner">
            <ul class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('Home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories') }}">{{__('Categories') }}</a></li>
                <li class="breadcrumb-item active">{{ $category->title }}</li>
            </ul>
        </div>
    </div>
</div>
<!--Page Banner Start-->

<!--Shop Start-->

<div class="section section-padding-02 mt-n8">
    <div class="container">
        <!-- Tab Content Start -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="grid">
                @if($products->Count() > 0)
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-sm-6">  
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-thumbnail" href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug,'locale'=>app()->getLocale()]) }}">
                                    <img src="{{ $product->image != '' ? url('/uploads') . '/' . $product->image :  asset ('FrontEnd/images/product/product-14.jpg') }}" alt="{{$product->title}}">
                                    <img class="image-hover" src="{{ $product->image != '' ? url('/uploads') . '/' . $product->image :  asset ('FrontEnd/images/product/product-14.jpg') }}" alt="{{$product->title}}">
                                </a>
                                <div class="product-action">
                                    <a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug ,'locale'=>app()->getLocale()]) }}" class="action"><i class="ion-bag"></i></a>
                                </div>
                                @if($product->sale_end_date > now())
                                <div class="product-flag">
                                    <span class="discount">-{{ number_format(100 - ($product->sale_price / $product->price * 100)) }}%</span>
                                </div>
                                @endif
                            </div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug ,'locale'=>app()->getLocale()]) }}">{{$product->title}}</a></h4>
                                <div class="manufacturer"><a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug , 'locale'=>app()->getLocale()]) }}">{{$product->Category->title}}</a></div>
                                <div class="product-price">
                                    @if ($product->sale_price != NULL && $product->sale_end_date > now())
                                    <span class="sele-price">{{ number_format($product->sale_price) }} {{ __('EGP') }}</span>
                                    <span class="regular-price">{{ number_format($product->price) }}{{ __('EGP') }}</span>
                                    @else
                                     <span class="sele-price">{{ number_format($product->price) }} {{ __('EGP') }}</span>
                                 @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                 @else
                <div class="alert alert-warning">{{__('There is no available Products now!') }}</div>
                @endif
            </div>
        </div>

        <!-- Tab Content End -->

        <!-- Page pagination Start -->
        <div class="page-pagination">
             {{ $products->links() }}
        </div>
        <!-- Page pagination End -->
    </div>
</div>
<!--Shop End-->
@endsection
