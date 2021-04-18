@extends('customer.layouts.auth.master')

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

@include('customer.layouts.auth.topnav')
                <div class="row" style="margin-top: 140px!important;">

                    <div class="col-md-7 m-auto mt-1">
                        <div class="text-center">
                            <button class="btn btn-success mt-3 w-100"><a href="{{route('customer.products.page.with.products')}}">products page</a> </button>
                        </div>
                        <div class="card product-card">
                             <h2 class="mt-1 text-center text-muted">You don't have any product to show . <br> Add new to see the product !</h2>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn mt-3"><a href="{{route('customer.add.product')}}">Add product</a> </button>
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
