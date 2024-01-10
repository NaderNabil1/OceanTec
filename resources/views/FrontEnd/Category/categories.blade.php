@extends('FrontEnd.app')
@section('title', __('Categories'))

@section('content')

<!--Page Banner Start-->
    <div class="section page-banner-wrapper bg-cover" style="background-image: url(FrontEnd/images/page-banner.jpg);">
        <div class="container">
            <div class="page-banner">
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Categories') }}</li>
                </ul>
            </div>
        </div>
    </div>
<!--Page Banner Start-->

<!--Banner Start-->
   @if($categories->Count() > 0)
    <div class="section section-padding mt-10">
        <div class="container">
            <div class="row justify-content-center mb-5">
                @foreach($categories as $category)
                <div class="col-md-4">
                    <!-- Single banner Start -->
                    <div class="single-banner mt-6">
                        <a href="{{ route('products',  ['slug' => $category->slug, 'locale' => app()->getLocale()]) }}">
                            <img src="{{ $category->image != '' ? url('/uploads') . '/' . $category->image : asset('FrontEnd/images/banner-02.jpg') }}">
                            <div class="text-center">
                                <h2>{{$category->title}}</h2>
                            </div>
                        </a>
                    </div>
                    <!-- Single banner End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!--Banner End-->
@endsection