@extends('jobs.layouts.auth.master')

@section('content')
@include('jobs.layouts.auth.topnav')
<div class="inner-content">
    <div class="row m-0">
        <div class="col-md-12 bg-white h-100 content-inner-left" style="min-height: 100vh;">
            <div class="container d-flex" >
                <div class="col-md-4 ml-5" style="margin-left: 12%!important">
                    <h3 class="heading-result form-info-border">Personal Information</h3>

                    <div class="form-input">
                        <label for="" class="label-class mt-5">First Name</label>
                        <input class="input-class" type="text" placeholder="Rana">
                    </div>

                    <div class="form-input mt-4">
                        <label for="" class="label-class">Last Name</label>
                        <input class="input-class" type="text" placeholder="Intishib">
                    </div>

                    <h3 class="heading-result form-info-border mt-5">Job Info</h3>
                    <div class="d-flex">
                        <div class="form-input mt-4 w-50 mr-1">
                            <label for="" class="label-class">Position Sought</label>
                            <input class="input-class" type="text" placeholder="UX designer">
                        </div>
                        <div class="form-input mt-4 w-50 ml-1">
                            <label for="" class="label-class">Starting Date</label>
                            <input class="input-class" type="text" placeholder="20 April 2020">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="form-input mt-4 w-50 mr-1">
                            <label for="" class="label-class">Hourly Rate</label>
                            <input class="input-class" type="text" placeholder="$40">
                        </div>
                        <div class="form-input mt-4 w-50 ml-1">
                            <label for="" class="label-class">Are you employed?</label>
                            <input class="input-class" type="text" placeholder="No">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="heading-result form-info-border">Contact Information</h3>
                    <div class="form-input">
                        <label for="" class="label-class mt-5">Country</label>
                        <input class="input-class" type="text" placeholder="Pakistan">
                    </div>

                    <div class="form-input mt-4">
                        <label for="" class="label-class">Address</label>
                        <input class="input-class" type="text" placeholder="Lorem ipsum dolor sit amet, consectetur ">
                    </div>

                    <div class="d-flex">
                        <div class="form-input mt-4 w-50 mr-1">
                            <label for="" class="label-class">City</label>
                            <input class="input-class" type="text" placeholder="Lahore">
                        </div>
                        <div class="form-input mt-4 w-50 ml-1">
                            <label for="" class="label-class">Postal Code</label>
                            <input class="input-class" type="text" placeholder="38000">
                        </div>
                    </div>
                    <div class="form-input mt-4">
                        <label for="" class="label-class">Phone</label>
                        <input class="input-class" type="text" placeholder="+92-3233-2342-09">
                    </div>
                    <div class="form-input mt-4">
                        <label for="" class="label-class">Email</label>
                        <input class="input-class" type="text" placeholder="Intishib1250@gmail.com">
                    </div>

                </div>

            </div>
            <div class="container d-flex">
                <div class="col-md-8 ml-5" style="margin-left: 12%!important">
                    <h3 class="heading-result form-info-border" style="margin-top: 20px;">Education</h3>
                </div>
            </div>
            <div class="container d-flex">
                <div class="col-md-4 ml-5" style="margin-left: 12%!important">
                    <div class="form-input mt-4">
                        <label for="" class="label-class">School</label>
                        <input class="input-class" type="text" placeholder="EX: Boston University">
                    </div>
                    <div class="form-input mt-4">
                        <label for="" class="label-class">Degree</label>
                        <input class="input-class" type="text" placeholder="Bachelor in Graphic Designing">
                    </div>
                    <div class=" mt-4 attach-resume d-flex" >
                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.4383 10.6622L11.2483 19.8522C10.1225 20.9781 8.59552 21.6106 7.00334 21.6106C5.41115 21.6106 3.88418 20.9781 2.75834 19.8522C1.63249 18.7264 1 17.1994 1 15.6072C1 14.015 1.63249 12.4881 2.75834 11.3622L11.9483 2.17222C12.6989 1.42166 13.7169 1 14.7783 1C15.8398 1 16.8578 1.42166 17.6083 2.17222C18.3589 2.92279 18.7806 3.94077 18.7806 5.00222C18.7806 6.06368 18.3589 7.08166 17.6083 7.83222L8.40834 17.0222C8.03306 17.3975 7.52406 17.6083 6.99334 17.6083C6.46261 17.6083 5.95362 17.3975 5.57834 17.0222C5.20306 16.6469 4.99222 16.138 4.99222 15.6072C4.99222 15.0765 5.20306 14.5675 5.57834 14.1922L14.0683 5.71222" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="attach-resume ml-2">Attach Resume </span>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="form-input mt-4">
                        <label for="" class="label-class">Field of study</label>
                        <input class="input-class" type="text" placeholder="Art & Design">
                    </div>
                    <div class="d-flex">
                        <div class="form-input mt-4 w-50 mr-1">
                            <label for="" class="label-class">Start Year</label>
                            <select name="" id="" class="input-class">
                                <option value="2016">2016</option>
                            </select>
                            {{-- <input class="input-class" type="text" placeholder="2015"> --}}
                        </div>
                        <div class="form-input mt-4 w-50 ml-1">
                            <label for="" class="label-class">End Year</label>
                            <select name="" id="" class="input-class">
                                <option value="2016">2016</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-flex mt-3 mb-5">
                <div class="col-md-8 ml-5" style="margin-left: 12%!important">
                    <a class="w-100 apply-button-right" style="display: block;" href="">Apply</a>
                </div>
            </div>

        </div>


    </div>
</div>


@endsection
