@extends('admin.layouts.auth.master')

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

@include('admin.layouts.auth.topnav')
                <div class="row" style="margin-top: 140px!important;">

                    <div class="col-md-7 m-auto mt-1">
                        <div class="text-center">
                            <a class="btn btn-success mt-3 w-100" href="{{route('admin.products.page.with.products')}}">products page</a>
                        </div>
                        <div class="card product-card">
                             <h2 class="mt-1 text-center text-muted">You don't have any product to show . <br> Add new to see the product !</h2>
                            <div class="d-flex align-items-center justify-content-center">
                                <button onclick="window.location.href='{{route('admin.add.product')}}'" class="btn mt-3"><a href="{{route('admin.add.product')}}">Add product</a> </button>
                            </div>
                            <div class="d-flex p-5 align-items-center justify-content-center">
                                <img src="{{asset('/public/assets/admin/images/funny-man.PNG')}}">
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
