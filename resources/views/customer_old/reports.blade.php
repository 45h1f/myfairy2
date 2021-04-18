@extends('admin.layouts.auth.master')

@push('styles')

<link rel="stylesheet" href="{{asset('/public/assets/admin/custom/css/progressbar.css')}}">@endpush

<style>
    .text-small{
        font-size: 10px !important;
    }

    .fa-star{
        color: #593E98 !important;
    }
</style>
@section('content')

    <div class="container">
        <div class="content-container" id="content-container">
            @include('admin.layouts.auth.topnav')

            <div class="data container  m-0">
                <h1 class="p-0 mb-5">Reports</h1>
                <div class="row">
                    <div class="col-md-2 statistics custom ">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                                <svg width="62" height="48" viewBox="0 0 62 48" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5003 2.44138C12.0689 6.88619 7.27322 9.34464 4.03097 10.5306C2.08576 11.2421 0.478561 13.0281 0.45022 15.0991L0.0554855 43.9453C0.0249653 46.1756 1.82457 48 4.05511 48H57.0482C59.2385 48 61.0215 46.2384 61.0479 44.0482L61.4951 6.92845C61.4984 6.65362 61.3948 6.38827 61.2062 6.18839C60.813 5.77174 60.1628 5.74488 59.7004 6.08311C54.9771 9.53798 45.2586 11.5167 42.3032 9.14017C42.0523 8.93839 41.8193 8.70512 41.5578 8.51729C28.8766 -0.589897 22.9436 -2.0132 17.5003 2.44138Z"
                                        fill="url(#paint0_linear)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="29" y1="5.94043" x2="29"
                                                        y2="61.4405" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" stop-opacity="0.3"/>
                                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>
                            <div class="col-md-5 offset-1">
                                <span class="stat d-block">Orders</span>
                                <span class="visit">2,100</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 statistics">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="col-md-4">
                                    <svg width="59" height="47" viewBox="0 0 59 47" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.386 11.429C8.99204 17.697 5.90035 21.0847 3.40082 22.7509C1.65989 23.9114 0 25.7499 0 27.8422V43C0 45.2091 1.79086 47 4 47H55C57.2091 47 59 45.2091 59 43V16.3352C59 13.0698 55.2991 11.2384 52.3187 12.5725C44.7648 15.954 45.0551 9.83686 42.9561 7.36375C30.5351 -4.83201 16.0439 -0.766754 11.386 11.429Z"
                                            fill="url(#paint0_linear)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="30" y1="4.5" x2="30" y2="60"
                                                            gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3847DC" stop-opacity="0.3"/>
                                                <stop offset="1" stop-color="#3847DC" stop-opacity="0"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-5 offset-1">
                                <span class="stat d-block">Visitors</span>
                                <span class="visit">2,100</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 statistics">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                                <svg width="60" height="46" viewBox="0 0 60 46" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.386 13.2038C9.08825 7.18771 6.14772 3.25473 3.70495 1.08362C1.96502 -0.462814 0 0.985664 0 3.3135V41.1328C0 43.342 1.79086 45.1328 4 45.1328H55.0608C57.2461 45.1328 59.0269 43.3791 59.0603 41.1941L59.4667 14.6743C59.4875 13.3185 58.8268 12.0169 57.6419 11.3575C47.723 5.83717 45.3982 14.3918 42.9561 17.2691C30.5351 29.4648 16.0439 25.3996 11.386 13.2038Z"
                                        fill="url(#paint0_linear)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="30" y1="18.5" x2="30" y2="50"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3847DC" stop-opacity="0.3"/>
                                            <stop offset="1" stop-color="#3847DC" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>
                            <div class="col-md-5 offset-1">
                                <span class="stat d-block">Customers</span>
                                <span class="visit">2,100</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 ml-3">
                    <h2 class="mb-2 mt-5 ml-5">Overview</h2>
                    <div id="chart" class="ml-3"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-4 ml-4">Marketing effectiveness</h2>
                    <div class="row">
                        <div class="col-md-6 mt-3 pl-5">
                               <div class="row mt-4">
                                   <div class="col-md-3">
                                       <span class="d-block mt-2">You were Viewed </span>
                                   </div>
                                   <div class="col-md-5 progress-cont">
                                       <div class="d-flex justify-content-between">
                                            <span class="text-muted text-small">Less often</span>
                                            <span class="text-muted text-small">More often</span>
                                       </div>
                                        <div class="progress skill-bar ">
                                            <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <span class="d-block mt-2">You were interviewed</span>
                                    </div>
                                    <div class="col-md-5 progress-cont">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted text-small">Less often</span>
                                            <span class="text-muted text-small">More often</span>
                                        </div>
                                        <div class="progress skill-bar ">
                                            <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-3">
                                        <span class="d-block mt-2">You were hired </span>
                                    </div>
                                    <div class="col-md-5 progress-cont">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted text-small">Less often</span>
                                            <span class="text-muted text-small">More often</span>
                                        </div>
                                        <div class="progress skill-bar ">
                                            <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
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
            <div class="row mt-5">
                <div class="col-md-4 pl-5">
                    <h3>Rating</h3>
                    <div class="row  mt-4">
                        <div class="col-md-3 mb-3">
                            <span class="d-block mt-2"><b>All Time Rate</b> </span>
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
                        <div class="col-md-2">
                            <span class="d-block mt-1">5 Star </span>
                        </div>
                        <div class="col-md-6 progress-cont">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted text-small"></span>
                                <span class="text-muted text-small">(12)</span>
                            </div>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-2">
                            <span class="d-block mt-1">4 Star</span>
                        </div>
                        <div class="col-md-6 progress-cont">
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
                        <div class="col-md-2">
                            <span class="d-block mt-1">3 Star</span>
                        </div>
                        <div class="col-md-6 progress-cont">
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
                        <div class="col-md-2">
                            <span class="d-block mt-1">2 Star</span>
                        </div>
                        <div class="col-md-6 progress-cont">
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
                        <div class="col-md-2">
                            <span class="d-block mt-1">1 Star</span>
                        </div>
                        <div class="col-md-6 progress-cont">
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
                        <span class="d-block mt-2"><b>Rating Breakdown</b> </span>
                    </div>
                    <div class="row  mt-4 align-items-center">
                        <div class="col-md-6">
                            <span class="d-block mt-2">Communication with Buyer</span>
                        </div>
                        <div class="col-md-6 mt-1 progress-cont d-flex align-items-center">
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
                        <div class="col-md-6">
                            <span class="d-block mt-2">Service as Described</span>
                        </div>
                        <div class="col-md-6 mt-1 progress-cont d-flex align-items-center">
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
                        <div class="col-md-6">
                            <span class="d-block mt-2">Buy Again or Recommend</span>
                        </div>
                        <div class="col-md-6 mt-1 progress-cont d-flex align-items-center">
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
                <div class="progress skill-bar w-50 mt-4">
                    <div class="progress-bar progress-bar-custom   progress-bar-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
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
