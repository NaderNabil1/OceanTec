@extends('Dashboard.app')

@section('title', 'Add admin')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/switchery/dist/switchery.min.css') }}">
@endsection

@section('content')

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Add admin</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ Route('be-admins') }}">Admins</a></li>
            <li class="breadcrumb-item active">Add admin</li>
        </ol>

        <div class="box box-block bg-white">
            <form method="post" id="form">
            @csrf
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">First name</label>
                            <input name="first_name" type="text" class="form-control" placeholder="Enter first name">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Last name</label>
                            <input name="last_name" type="text" class="form-control" placeholder="Enter last name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input name="phone" type="tel" class="form-control" placeholder="Enter phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Enter password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('javascripts')
<script type="text/javascript" src="{{ asset('BackEnd/vendor/switchery/dist/switchery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/js/jquery.validate.js') }}"></script>
<script>
$(document).ready(function(){

/* =================================================================
    Switchery
================================================================= */
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function() {
        new Switchery($(this)[0], $(this).data());
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#form').validate({
            rules: {
                first_name: { required: true },
                last_name: { required: true },
                email: { required: true },
                phone: { required: true },
                role: { required: true },
                password: { required: true },
            },
            messages: {
                first_name: { required: "First name is required" },
                last_name: { required: "Last name is required" },
                email: { required: "Email is required" },
                phone: { "Phone is required" },
                role: { required: "Role is required" },
                password: { required: "Password is required" },
            }
        });
    });
</script>
@endsection
