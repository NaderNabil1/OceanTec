@extends('FrontEnd.app')
@section('title', 'My account')

@section('content')
<div class="page section-header text-center mb-0">
    <div class="page-title">
        <div class="wrapper"><h1 class="page-width">My Account</h1></div>
    </div>
</div>
<!-- End Page Title -->
<div class="bredcrumbWrap bredcrumbWrapPage bredcrumb-style2 text-center">
    <div class="container breadcrumbs">
        <a href="{{ route('home') }}" title="Back to the home page">Home</a><span aria-hidden="true">|</span><span class="title-bold">My Account</span>
    </div>
</div>

<div class="container">
    <div class="dashboard-upper-info">
        <div class="row align-items-center g-0">
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="d-single-info">
                    <p class="user-name">Hello <span class="font-weight-600">{{ Auth::User()->first_name . ' ' . Auth::User()->last_name }}</span></p>
                </div>
            </div>
    </div>
</div>
@endsection
