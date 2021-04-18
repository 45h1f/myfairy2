@extends('admin.layouts.auth.master')

@include('admin.components.files.dropify.index')


@push('styles')
    <style>
        .content-container{
            min-height: 100vh;
        }
    </style>
    <style>
        .portfolio-image{
            max-width: 20%;
            min-height: 90px;
            border-radius: 5px;
        }
    </style>
@endpush


@section('content')
    <div class="container">
        <div class="content-container" >
            @include('admin.layouts.auth.topnav')

            <div class="container">
                <div class="payment-method m-auto" style="margin-top: 140px!important;">
                    <div class="add d-flex justify-content-center align-items-center pl-0">
                        <a href="{{route('customer.account')}}">
                            <div class="d-flex justify-content-center align-items-center">
                                <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1.5L0.999999 7.5L7 13.5" stroke="#593E98" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                        <h2 class="mb-0 ml-4">Edit Profile</h2>
                    </div>
                    <form>

                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Name</label>
                                <select type="text" class="form-control w-100" id="name">
                                    <option><i class="fa-chevron-circle-down"></i></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Email</label>
                                <input type="email" class="form-control w-100" placeholder="add Email" >
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Password</label>
                                <input type="password" class="form-control w-100" placeholder="Password" >

                            </div>
                            <div class="form-group">
                                <label for="#">Bio</label>
                                <input type="text" class="form-control w-100" placeholder="loream ipsum dolor..." >
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Address</label>
                                <input type="text" class="form-control w-100" placeholder="Address" >

                            </div>
                            <div class="form-group">
                                <label for="#">City</label>
                                <input type="text" class="form-control w-100" placeholder="Cairo" >
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="#">Zip Code</label>
                                <input type="text" class="form-control w-100" placeholder="32221" >

                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <div class="form-group ">
                                        <label for="#">Age</label>
                                        <input type="text" class="form-control w-100" placeholder="Age" >
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Hourly Rate</label>
                                        <input type="text" class="form-control w-100" placeholder=" $22" >
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-group ">
                                    <label for="#">Social Media Account</label>
                                    <input type="text" class="form-control w-100" placeholder="Linked Account" >

                                </div>
                                <div class="form-group">
                                    <label for="#">Phone number</label>
                                    <input type="text" class="form-control w-100" placeholder="+2 01129206865" >
                                </div>
                            </div>

                        <div class="terms d-flex justify-content-between">
                            <div>
                                <h3 class="mb-2">Portfolio</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <input type="file" class="dropify small-dropify"/>
                                    <img type="file" class="portfolio-image m-1" src="{{asset('/public/assets/admin/images/building.jpg')}}"/>
                                    <img type="file" class="portfolio-image m-1" src="{{asset('/public/assets/admin/images/building.jpg')}}"/>
                                    <img type="file" class="portfolio-image m-1" src="{{asset('/public/assets/admin/images/building.jpg')}}"/>
                                </div>
                            </div>
                        </div>
                        <button class="mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
     </div>
@endsection
