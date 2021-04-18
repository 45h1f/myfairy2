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

        #example_length {
            display: none;
        }

        .new-pro {
            background: #593E98;
            border-radius: 59px;
            padding: 13px 15px;
            /* font-family: Prompt; */
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 22px;
            /* identical to box height, or 157% */

            letter-spacing: -0.078px;

            color: #FFFFFF;
        }

        .new-pro:hover {
            text-decoration: none;
            color: #FFFFFF;
        }

        .filters label {
            margin-top: auto;
            margin-bottom: auto;
            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            /* identical to box height */

            letter-spacing: 0.01em;

            /* filter_gray */

            color: #6A707E;
        }

        .filters select {
            background: #FFFFFF;
            border: 1px solid #BCCCDC;
            box-sizing: border-box;
            border-radius: 4px;
            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            /* identical to box height */

            letter-spacing: 0.01em;

            /* filter_gray */

            color: #6A707E;
            padding: 7px 8px;
            margin-top: auto;
            margin-bottom: auto;
            height: 32px;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

            @include('admin.layouts.auth.topnav')
            <div class="row" style="margin-top: 140px!important;">
                <div class="col-md-10 m-auto mt-1">
                    <div class="d-flex">
                        <div class="filters mr-auto d-flex">
                            <label for="">Filters:</label>
                            <select name="" id="" class="ml-4">
                                <option value="">status</option>
                            </select>
                            <select name="" id="" class="ml-3">
                                <option value="">Category</option>
                            </select>
                            <select name="" id="" class="ml-3">
                                <option value="">Condition</option>
                            </select>
                        </div>
                        <a class="new-pro ml-auto" href="{{route('admin.add.product')}}">Add New Product</a>
                    </div>
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
            $('#example').DataTable({
            "searching": false,
            // "paging": false,
            "info": false
        });
        } );
    </script>

@endpush
