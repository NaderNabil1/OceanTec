@extends('BackEnd.app')

@section('title', 'Pages')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')

<div class="content-area p-y-1">
    <div class="container-fluid">
        <h4>All pages</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">All pages</li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="table-responsive">
            <a href="{{ Route('add-page') }}" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light pull-right">Add page</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( $pages->Count() > 0 )
                        @foreach( $pages as $page )
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>@if($page->image != '') <img src="{{ url('/uploads') }}/{{ $page->image }}" alt="{{ $page->title }}" width="50" />@else - @endif</td>
                            <td>{{ $page->status }}</td>
                            <td>
                                <a href="{{ Route('edit-page', $page->id) }}" class="btn btn-success w-min-sm m-b-0-25 waves-effect waves-light">Edit</a>
                                @if ( $page->id != 1 && $page->id != 2 && $page->id != 3)
                                <button data-title="this page" data-route="{{ Route('delete-page', $page->id) }}" class="btn btn-danger w-min-sm m-b-0-25 waves-effect waves-light run-swal" data-type="cancel">Delete</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6"><div class="alert alert-warning">No pages available.</div></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@section('javascripts')
<script type="text/javascript" src="{{ asset('BackEnd/vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.run-swal').on('click', function () {
            var type = $(this).data('type');
            var $url = $(this).data('route');
            var $title = $(this).data('title');
            if (type === 'cancel') {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert " + $title + " again!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonText: 'Yes, delete it!',
                    confirmButtonClass: 'btn btn-danger btn-lg m-r-1',
                    cancelButtonClass: 'btn btn-secondary btn-lg',
                    buttonsStyling: false
                }).then(function (isConfirm) {
                    if (isConfirm === true) {
                        window.location = $url;
                    }
                })
            }
        });
    });
</script>
@endsection
