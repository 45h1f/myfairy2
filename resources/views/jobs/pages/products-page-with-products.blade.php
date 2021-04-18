@extends('admin.layouts.auth.master')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <style>
        .content-container{
            min-height:100vh
        }
         thead tr th, thead tr th::before, thead tr th::after {
            background: #593E98 !important;
             color: white !important;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')
            <div class="row">
                <div class="col-md-10 m-auto mt-1">
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th class="text-center"><input type="checkbox"></th>
                        <th>Image</th>
                        <th>Product name</th>
                        <th>Category</th>
                        <th>Condition</th>
                        <th>Qty</th>
                        <th>Price ($)</th>
                        <th>Status</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                    <tr> <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('/public/assets/admin/images/connects/cx.png')}}"></td>
                        <td>Product name</td>
                        <td>Category</td>
                        <td>Condition</td>
                        <td>Qty</td>
                        <td>Price ($)</td>
                        <td class="text-center"><button class="btn btn-success"> pending</button></td>
                        <td> <i class="fa fa-cog"></i></td>
                    </tr>
                   
                    </tbody>
                    <tfoot>

                </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"> </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

@endpush
