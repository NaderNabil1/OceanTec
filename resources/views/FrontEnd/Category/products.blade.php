@extends('FrontEnd.app')
@section('title'){{ $category->title }}  @endsection

@section('content')
@if($products->Count() > 0)
<div class="shell">
  <div class="container">
        <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3"><a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug]) }}" >
                <div class="wsk-cp-product" >
                    <div class="wsk-cp-img"> 
                        @if($product->image != '')
                        <img src="{{ url('/uploads') }}/{{ $product->image }}" alt="{{ $product->title}}" class="img-responsive" />
                        @else
                        <img src="{{ asset('FrontEnd/img/nophoto.jpg') }}" alt="{{ $product->title}}" class="img-responsive" />
                        @endif
                    </div>
                    <div class="wsk-cp-text">
                        <div class="title-product">
                        <a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug]) }}">{{ $product->title }}</a></3>
                        </div>
                        <div class="card-footer">
                            <div class="wcf-left"><span class="price">{{$product->price}}</span></div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="alert alert-warning">There is no available Products now!</div>
</div>
@endif
@endsection
