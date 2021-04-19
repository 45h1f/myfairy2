@extends('admin.layouts.auth.master')

@include('admin.components.files.dropify.index')


@push('styles')
    <style>
        .content-container {
            min-height: 100vh;
        }
    </style>
    <style>

        .table {
            margin-top: 80px;
            height: 382px;
        }

        .table tr {
            display: flex;
            align-items: center;
            padding: 12px 0;
        }

        .table td {
            border: none;
            font-size: 12px;
            padding: 0px 0px 0px 46px;
            margin: auto 0;
            font-family: 'Poppins', sans-serif;
        }

        .table thead th {
            border: none;
            color: #d2d5d7;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            padding: 0px 0px 0px 46px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(247, 248, 255, 1);
        }

        .table .customer {
            width: 170px;
        }

        .table .date {
            width: 160px;
        }

        .table .time {
            width: 110px;
        }

        .table .location {
            width: 175px;
        }

        .table svg {
            margin-right: 15px;
        }

        .portfolio-image {
            max-width: 20%;
            min-height: 90px;
        }

    </style>
@endpush


@section('content')
    <div class="container">
        <div class="content-container">
            @include('admin.layouts.auth.topnav')

            <div class="container">
                <div class="payment-method m-auto" style="margin-top: 140px!important;">
                    <div class="add d-flex pl-0" style="margin-left: 120px!important;">
                        <a href="{{route('admin.services.index')}}">
                            <div class="d-flex justify-content-center align-items-center">
                                <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1.5L0.999999 7.5L7 13.5" stroke="#593E98" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                        <h2 class="mb-0 ml-4">Add Service</h2>
                    </div>
                    <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="terms d-flex justify-content-between">
                            <div>
                                <h3 class="mb-2">Portfolio</h3>
                                <style>
                                    .dropify-wrapper {
                                        margin-left: -100px !important;
                                    }
                                </style>

                                <div class="d-flex align-items-center justify-content-center">
                                    <input name="image" type="file" class="dropify small-dropify"/>
                                    <img type="file" class="portfolio-image m-1 mr-2"
                                         src="{{asset('/public/assets/admin/images/building.jpg')}}"/>
                                    {{--                                    <img type="file" class="portfolio-image m-1 mr-2" src="{{asset('/public/assets/admin/images/building.jpg')}}"/>--}}
                                    {{--                                    <img type="file" class="portfolio-image m-1" src="{{asset('/public/assets/admin/images/building.jpg')}}"/>--}}
                                </div>

                            </div>

                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Service type</label>
                                <input type="text" class="form-control w-100" placeholder="Service type" name="type">

                                {{--                                <select type="text" class="form-control w-100" id="name">--}}
                                {{--                                    <option><i class="fa-chevron-circle-down"></i></option>--}}
                                {{--                                </select>--}}
                            </div>
                            <div class="form-group">
                                <label for="#">Experience</label>
                                <input type="number" class="form-control w-100" placeholder="add experience"
                                       name="experience">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Location</label>
                                <input type="text" class="form-control w-100" placeholder="Add Location"
                                       name="location">

                            </div>
                            <div class="form-group">
                                <label for="#">Hourly Rate</label>
                                <input type="text" class="form-control w-100" placeholder="Add Hourly Rate"
                                       name="hourly_rate">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group ">
                                <label for="name">Social Medial Accounts</label>
                                <input type="text" class="form-control w-100" placeholder="Linked Account"
                                       name="social_media">

                            </div>
                            <div class="form-group">
                                <label for="#">Schedule</label>
                                <input type="date" class="form-control w-100" placeholder="Add Available Data"
                                       name="schedule">
                            </div>
                        </div>
                        <div class="d-flex justify-content-left">
                            <div class="form-group" style="width: 100%!important;">
                                <label for="#">Description</label>
                                <textarea name="description" rows="7" class="form-control w-100"></textarea>
                            </div>
                        </div>
                        <button class="mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
