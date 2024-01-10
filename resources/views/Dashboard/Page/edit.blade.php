@extends('BackEnd.app')

@section('title', 'Edit page')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/dropify/dist/css/dropify.min.css') }}">
@endsection

@section('content')

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>Edit page</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ Route('pages') }}">Pages</a></li>
            <li class="breadcrumb-item active">Edit page</li>
        </ol>

        <form method="POST" id="form" enctype="multipart/form-data">
            @csrf
            <div class="box box-block bg-white">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter page title" value="{{ $page->title }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="meta_title">Meta title</label>
                            <input type="text" name="meta_title" class="form-control" id="title_ar" placeholder="Enter meta title" value="{{ $page->meta_title }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" rows="4" class="form-control" id="description" placeholder="Enter page description">{{ $page->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="meta_description">Meta description</label>
                            <textarea name="meta_description" rows="4" id="meta_description" class="form-control" placeholder="Enter meta description">{{ $page->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
                @if ($page->id == 1)
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Video</label>
                            <input name="video" class="form-control" id="video" placeholder="Video" value="{{ $video->value }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Video Title</label>
                            <input name="video_title" class="form-control" id="video_title" placeholder="Video Title" value="{{ $video_title->value }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Video Link</label>
                            <input name="video_link" class="form-control" id="video_link" placeholder="Video Link" value="{{ $video_link->value }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label for="video_description">Video description</label>
                            <textarea name="video_description" rows="4" id="meta_description" class="form-control" placeholder="Enter Video description">{{ $video_description->value }}</textarea>
                        </div>
                    </div>
                </div>
                @endif


                @if ($page->id == 2)
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Mission</label>
                            <textarea name="mission" rows="4" class="form-control" id="mission" placeholder="Enter mission">{{ $mission->value }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Vision</label>
                            <textarea name="vision" rows="4" class="form-control" id="vision" placeholder="Enter vision">{{ $vision->value }}</textarea>
                        </div>
                    </div>
                </div>
                @elseif ($page->id == 3)
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter phone" value="{{ $phone->value }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Enter email" value="{{ $email->value }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input name="facebook" type="text" class="form-control" id="facebook" placeholder="Enter Facebook page URL" value="{{ $facebook->value }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input name="instagram" type="text" class="form-control" id="instagram" placeholder="Enter Instagram page URL" value="{{ $instagram->value }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input name="youtube" type="text" class="form-control" id="youtube" placeholder="Enter youtube channel URL" value="{{ $youtube->value }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="tiktok">Tiktok</label>
                            <input name="tiktok" type="text" class="form-control" id="tiktok" placeholder="Enter Tiktok account URL" value="{{ $tiktok->value }}">
                        </div>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Image</label><br>
                            <input type="file" name="image" class="dropify" id="image" data-max-file-size="2M" @if($page->image != '') data-default-file="{{ url('/uploads') . '/' . $page->image }}" @endif>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Cover</label><br>
                            <input type="file" name="cover" class="dropify" id="image" data-max-file-size="2M" @if($page->cover != '') data-default-file="{{ url('/uploads') . '/' . $page->cover }}" @endif>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Meta image</label><br>
                            <input type="file" name="meta_image" class="dropify" id="image" data-max-file-size="2M" @if($page->meta_image != '') data-default-file="{{ url('/uploads') . '/' . $page->meta_image }}" @endif>
                        </div>
                    </div>
                </div>

                @if ($page->id != 1 && $page->id != 2 && $page->id != 3)
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="status" class="custom-control-input" {{ $page->status == 'Published' ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Publish</span>
                            </label>
                        </div>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('javascripts')
<script type="text/javascript" src="{{ asset('BackEnd/js/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/dropify/dist/js/dropify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/js/jquery.validate.js') }}"></script>

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
                title: { required: "Page title is required" },
            }
        });
    });
</script>
@endsection
