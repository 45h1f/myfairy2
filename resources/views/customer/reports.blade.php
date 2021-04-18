@extends('customer.layouts.auth.master')

@push('styles')

<link rel="stylesheet" href="{{asset('/public/assets/admin/custom/css/progressbar.css')}}">@endpush

<style>
    .text-small{
        font-size: 10px !important;
    }

    .fa-star{
        color: #593E98 !important;
    }

    .data {
        padding: 0!important;

    }

    .stat {
        width: 130px;
    }
</style>
@section('content')

    <div class="container">
        <div class="content-container" id="content-container">
            @include('customer.layouts.auth.topnav')

            <div class="data container  m-0" style="margin-top: 120px!important;padding-left: 65px!important;">
                <h1 class="p-0 mb-5">Reports</h1>
                <div class="row pl-1">
                    <div class="col-md-12 d-flex" style="padding-left: 0">
                        {{-- <div class="row"> --}}
                            <div style="display:flex;    min-width: 235px;
    max-width: 233px; margin-right: 25px;" class="col-md-3 statistics custom ">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative" style="padding-left: 0!important;">
                                        <img src="{{asset('public/assets/icons/dash3.svg')}}" alt="">
                                    </div>
                                    <div class="col-md-5 " style="padding: 0;">
                                        <span class="stat d-block">Total Earnings</span>
                                        <span class="visit">2,100</span>

                                    </div>
                                </div>
                            </div>
                            <div style="display:flex;    min-width: 235px;
    max-width: 233px; margin-right: 25px;" class="col-md-3 statistics pr-4">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative" style="padding-left: 0!important;">
                                        <img src="{{asset('public/assets/icons/dash2.svg')}}" alt="">

                                    </div>
                                    <div class="col-md-5 " style="padding: 0;">
                                        <span class="stat d-block">Completed Orders</span>
                                        <span class="visit">421</span>

                                    </div>
                                </div>
                            </div>
                            <div style="display:flex;    min-width: 235px;
    max-width: 233px; margin-right: 25px;" class="col-md-3 statistics pr-4">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative" style="padding-left: 0!important;">
                                        <img src="{{asset('public/assets/icons/dash1.svg')}}" alt="">
                                    </div>
                                    <div class="col-md-5 " style="padding: 0;">
                                        <span class="stat d-block">Avg. Selling Price</span>
                                        <span class="visit">400</span>

                                    </div>
                                </div>
                            </div>
                            <div style="display:flex;    min-width: 235px;
    max-width: 233px; margin-right: 25px;" class="col-md-3 statistics pr-4">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-4 position-relative" style="padding-left: 0!important;">
                                        <img src="{{asset('public/assets/icons/dash1.svg')}}" alt="">
                                    </div>
                                    <div class="col-md-5 " style="padding: 0;">
                                        <span class="stat d-block">Earned In June</span>
                                        <span class="visit">12,100</span>

                                    </div>
                                </div>
                            </div>


                        </div>

                    {{-- </div> --}}


                </div>
            </div>

            <div class="row">
                <div class="col-md-10 ml-3">
                    <h2 class="mb-2 mt-5 ml-5">Overview</h2>
                    <div id="chart" class="ml-3"></div>
                </div>
            </div>

            <div class="row" style="padding-left: 40px!important;">
                <div class="col-md-12">
                    <style>
                        .heading-market {
                            font-family: Poppins;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 13px;
/* identical to box height, or 72% */


color: #000000;
                        }

                        .span-view {
                            font-family: Poppins;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 13px;
/* identical to box height, or 93% */


color: #000000;
                        }
                    </style>
                    <h2 class="mt-5 mb-4 ml-4 heading-market" >Marketing effectiveness</h2>
                    <div class="row">
                        <div class="col-md-6 mt-3 pl-5">
                               <div class="row mt-4">
                                   <div class="col-md-5">
                                       <span class="d-block mt-2 span-view ">You were Viewed </span>
                                   </div>
                                   <div class="col-md-7 progress-cont">
                                       <div class="d-flex justify-content-between">
                                            <span class="text-muted text-small">Less often</span>
                                            <span class="text-muted text-small">More often</span>
                                       </div>
                                        <div class="progress skill-bar ">
                                            <div style="width: 90%;" class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-5">
                                        <span class="d-block mt-2 span-view">You were interviewed</span>
                                    </div>
                                    <div class="col-md-7 progress-cont">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted text-small">Less often</span>
                                            <span class="text-muted text-small">More often</span>
                                        </div>
                                        <div class="progress skill-bar ">
                                            <div style="width: 90%;" class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-5">
                                        <span class="d-block mt-2 span-view">You were hired </span>
                                    </div>
                                    <div class="col-md-7 progress-cont">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted text-small">Less often</span>
                                            <span class="text-muted text-small">More often</span>
                                        </div>
                                        <div class="progress skill-bar ">
                                            <div style="width: 90%;" class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         </div>
                         <div class="col-md-6">
                             <div id="area-chart"></div>
                         </div>


                    </div>

                </div>
            </div>
            <div class="row mt-5" style="padding-left: 30px!important;">
                <div class="col-md-4 pl-5">
                    <h3 class="heading-market">Rating</h3>
                    <div class="row  mt-4">
                        <div class="col-md-4 mb-3" style="padding-right: 0;">
                            <span class="d-block mt-2 span-view"><b>All Time Rate</b> </span>
                        </div>
                        <div class="col-md-6 mt-1 progress-cont">
                            <div class="star-cont">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-2" style="padding-right: 0;">
                            <span class="d-block mt-1 span-view" style="padding-top: 15px;">5 Star </span>
                        </div>
                        <div class="col-md-7 progress-cont">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted text-small"></span>
                                <span class="text-muted text-small">(12)</span>
                            </div>
                            <div class="progress skill-bar ">
                                <div style="width: 90%;" class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-2" style="padding-right: 0;">
                            <span class="d-block mt-1 span-view" style="padding-top: 15px;">4 Star</span>
                        </div>
                        <div class="col-md-7 progress-cont">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted text-small"></span>
                                <span class="text-muted text-small">(0)</span>
                            </div>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-2" style="padding-right: 0;">
                            <span class="d-block mt-1 span-view" style="padding-top: 15px;">3 Star</span>
                        </div>
                        <div class="col-md-7 progress-cont">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted text-small"></span>
                                <span class="text-muted text-small">(0)</span>
                            </div>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-2" style="padding-right: 0;">
                            <span class="d-block mt-1 span-view" style="padding-top: 15px;">2 Star</span>
                        </div>
                        <div class="col-md-7 progress-cont">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted text-small"></span>
                                <span class="text-muted text-small">(0)</span>
                            </div>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4 mb-5">
                        <div class="col-md-2" style="padding-right: 0;">
                            <span class="d-block mt-1 span-view" style="padding-top: 15px;">1 Star</span>
                        </div>
                        <div class="col-md-7 progress-cont">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted text-small"></span>
                                <span class="text-muted text-small">(0)</span>
                            </div>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="mb-3 mt-5">
                        <span class="d-block mt-2 span-view"><b>Rating Breakdown</b> </span>
                    </div>
                    <div class="row  mt-4 align-items-center">
                        <div class="col-md-7" style="padding-right: 0;">
                            <span class="d-block mt-2 span-view">Communication with Buyer</span>
                        </div>
                        <div style="padding: 0!important;;" class="col-md-5 mt-1 progress-cont d-flex align-items-center">
                            <div class="star-cont">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <span class="ml-2 mb-0">(5)</span>
                        </div>
                    </div>
                    <div class="row  mt-4 align-items-center">
                        <div class="col-md-7" style="padding-right: 0;">
                            <span class="d-block mt-2 span-view">Service as Described</span>
                        </div>
                        <div style="padding: 0!important;;" class="col-md-5 mt-1 progress-cont d-flex align-items-center">
                            <div class="star-cont">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <span class="ml-2 mb-0">(5)</span>
                        </div>
                    </div>
                    <div class="row  mt-4 align-items-center">
                        <div class="col-md-7" style="padding-right: 0;">
                            <span class="d-block mt-2 span-view">Buy Again or Recommend</span>
                        </div>
                        <div style="padding: 0!important;;" class="col-md-5 mt-1 progress-cont d-flex align-items-center">
                            <div class="star-cont">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <span class="ml-2 mb-0">(5)</span>
                        </div>
                    </div>
                </div>

            <div class="col-md-4 mt-4">
                <div class="mb-3 mt-5">
                    <p class="mt-2"><b>Rated Orders </b>93% </p>
                </div>
                <div class="progress skill-bar w-50 mt-4" style="width: 80%!important;">
                    <div style="width: 93%;" class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            chart: {
                height: 350,
                type: 'area'
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <script>
         var options = {
          series: [{
          name: 'Network',
          data: [
            {
              x: 'Dec 30 2017',
              y: 0
            },
            {
              x: 'Dec 31 2017',
              y: 20
            },
            {
              x: 'Jan 01 2018',
              y: 0
            },
            {
              x: 'Jan 02 2018',
              y: 0
            }
          ],
        }],
          chart: {
          type: 'area',
          height: 200,
          width:450,
          animations: {
            enabled: true
          },
          zoom: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 0.8,
          type: '',

        },
        markers: {
          size: 5,
          hover: {
            size: 9
          }
        },
        title: {
          text: '',
        },
        tooltip: {
          intersect: true,
          shared: false
        },
        theme: {
          palette: 'palette2'
        },
        xaxis: {
          type: 'datetime',
        },
        yaxis: {
          title: {
            text: ''
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#area-chart"), options);
        chart.render();
    </script>

    /* progress bar */
    <>
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });
    </>
@endpush
