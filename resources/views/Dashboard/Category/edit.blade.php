@extends('Dashboard.app')
@section('title') Edit category @endsection

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/dropify/dist/css/dropify.min.css') }}">
@endsection

@section('content')
<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit category</h4>
        <ol class="breadcrumb no-bg m-b-1">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ Route('be-categories') }}">Categories</a></li>
            <li class="breadcrumb-item active">Edit category</li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="row">
                <div class="col-md-6 col-xs-12"><h5 class="m-b-1">Edit category</h5></div>
            </div>

            <div class="box box-block bg-white">
                <form method="post" id="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter category title" value="{{ $category->title }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" rows="4" id="description" class="form-control" placeholder="Enter category description">{{ $category->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="image">Image </label>
                                <input type="file" name="image" class="dropify" id="image" data-max-file-size="2M" @if($category->image != '') data-default-file="{{ url('/uploads') . '/' . $category->image }}" @endif>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@section('javascripts')
<script type="text/javascript" src="{{ asset('BackEnd/js/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('FrontEnd/vendor/jquery-validate/jquery.validate.min.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify();
        $('#form').validate({
            rules: {
                title: { required: true },
            },
            messages: {
                title: { required: "Title is required" },
            }
        });
    });
</script>

<script>
    $("#form").validate({
        rules: {
            title: {
                required: true,
            },
        },
        messages: {
            title: {
                required: "Please enter the title",
            },
        },

    submitHandler: function (form) {
        $(form).submit();
    }
    });
</script>
@endsection
