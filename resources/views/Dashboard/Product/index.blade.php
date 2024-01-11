@extends('Dashboard.app')

@section('title', 'All products')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/DataTables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('BackEnd/vendor/DataTables/Buttons/css/buttons.dataTables.min.css') }}">
@endsection

@section('content')

<div class="content-area p-y-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h4>All products</h4>
                <ol class="breadcrumb no-bg m-b-1">
                    <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
            <div class="col-md-6 col-xs-12"><a href="{{ Route('add-product') }}" class="btn btn-primary w-min-sm m-b-0-25 waves-effect waves-light pull-right">Add Product</a></div>
        </div>
        
    </div>

    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( $products->Count() > 0 )
                        @foreach( $products as $product )
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->Category->title ?? '-' }}</td>
                            <td>{{ $product->price }}</td>
                            <td>@if($product->image != '') <img src="{{ url('/uploads') . '/' . $product->image }}" alt="{{ $product->title }}" style="width:50px;"/> @else - @endif</td>
                            <td>
                                <a href="{{ Route('edit-product', $product->id) }}" class="btn btn-success w-min-sm m-b-0-25 waves-effect waves-light">Edit</a>
                                <a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug]) }}" target="blank" class="btn btn-purple w-min-sm m-b-0-25 waves-effect waves-light">Show on website</a>
                                <button data-title="{{ $product->title }}" data-route="{{ Route('delete-product', $product->id) }}" class="btn btn-danger w-min-sm m-b-0-25 waves-effect waves-light run-swal" data-type="cancel">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="9"><div class="alert alert-warning">No products available.</div></td>
                        </tr>
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@section('javascripts')
<script type="text/javascript" src="{{ asset('BackEnd/vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/DataTables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('BackEnd/vendor/DataTables/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table-1').dataTable( {
            "pageLength": 50
        });
        $('.run-swal').on('click', function () {
            var type = $(this).data('type');
            var $url = $(this).data('route');
            var $title = $(this).data('title');
            if (type === 'cancel') {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert " + $title + " Again!",
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
