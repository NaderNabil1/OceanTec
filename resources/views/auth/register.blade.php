@extends('FrontEnd.app')
@section('title') Login & Register @endsection
@section('content')
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login & Register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <form method="post" action="{{ route('login') }}" id="login-form" class="border p-3 rounded">		
                    @csrf
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email*">
                        @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>

                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password*">
                        @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>

                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="flex-1">
                                <input class="checkbox-custom" value="1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                <label for="remember" class="checkbox-custom-label">Remember Me</label>
                            </div>	
                            <div class="eltio_k2">
                                <a href="{{ route('password.request') }}">Lost Your Password?</a>
                            </div>	
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
                    </div>
                </form>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
                <form class="border p-3 rounded" method="POST" id="create-account" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First Name *</label>
                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name">
                            @error('first_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name">
                            @error('last_name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email*">
                            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone *</label>
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone*">
                            @error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password*">
                            @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Confirm Password *</label>
                            <input type="password" class="form-control" placeholder="Confirm Password*" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group">
                        <p>By registering your details, you agree with our Terms & Conditions, and Privacy and Cookie Policy.</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Create An Account</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection

@section('javascripts')
<script src="{{ asset('FrontEnd/vendor/jquery-validate/jquery.validate.min.js') }}"></script>

<script>
$(document).ready(function() {
    $("#login-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            },   
        },
        messages: {
            email: {
                required: "please enter your email",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please enter a password",
            },
        },

    submitHandler: function (form) {

        $(form).submit();
    }
    });

    $("#create-account").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15,   
            },
            password: {
                required: true,
                minlength: 8
            }, 
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }, 
        },
        messages: {
            first_name: {
                required: "Please enter your first-name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 50 characters"
            },
            last_name: {
                required: "Please enter your last-name",
                minlength: "Name must be at least 2 characters long",
                maxlength: "Name cannot exceed 50 characters"
            },
            email: {
                required: "please enter your email",
                email: "Please enter a valid email address"
            },
            phone: {
                required: "Please enter your phone number",
                digits: "Please enter only digits",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
            password: {
                required: "Please enter a password",
                minlength: "Your password must be at least 8 characters long"
            },
            password_confirmation: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match"
            }
        },

    submitHandler: function (form) {

        $(form).submit();
    }
    });
});
</script>
@endsection