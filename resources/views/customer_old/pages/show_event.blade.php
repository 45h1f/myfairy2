@extends('admin.layouts.auth.master')

@push('styles')
    <style>
        .content-container{
            min-height: 100vh;
        }
        .container-fluid{
            width: 96%;
        }

        #editMe{
            display: none !important;
        }
    </style>
@endpush

@section('content')
         <div class="content-container" >
            @include('admin.layouts.auth.topnav')

            <div class="container-fluid" style="margin-top: 140px!important;">
                <div class="row">
                    <div class="col-md-3  pl-0 mt-3">
                     <div class="img-arrow">
                             <a href=" ">
                                  <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M7 1.5L0.999999 7.5L7 13.5" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </a>
                         <div class="img-cont">
                             <img class=" " src="{{asset('/public/assets/admin/images/connects/img1.png')}}">
                         </div>
                         <h5 class="text-center user-name-calendar pt-1">Address</h5>
                         <p class="  text-muted text-sm-center user-name-calendar pt-1">Cras sit amet nibh libero, in gravida nulla.  </p>
                         <ul class="list-unstyled pt-5">
                             <li class="media">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <div class="media-body">
                                     <h5 class="mt-0 mb-1 font-16">List-based media object</h5>
                                       c nisi vulputate
                                 </div>
                             </li>
                             <li class="media pt-5">
                                 <i class="fa fa-2x fa-clock"></i>
                                 <div class="media-body">
                                     <h5 class="mt-0 mb-1 font-16">List-based media object</h5>
                                     c nisi vulputate
                                 </div>
                             </li>
                             <li class="media pt-5 ml-0">
                                  <div class="media-body">
                                      <a href="#"><i class="fa fa-2x fa-phone"></i> Send direction to your phone</a>
                                 </div>
                             </li>
                             <li class="media pt-5">
                                 <button class="text-center btn btn-danger  text-light" id="btn-direction-address" style="width: 260px"><i class="fas fa-map-marker-alt text-light"></i> Direction</button>
                             </li>
                         </ul>
                     </div>
                    </div>

                    <div class="col-md-8 pl-0 ">
                        <div class="row mt-0">

                            <div class="powr-map" style="width: 100% !important; height: 700px !important; overflow: hidden !important;" id="cf838fb7_1615650295"></div><script src="https://www.powr.io/powr.js?platform=bootstrap"></script>
                            </div>

                    </div>

                </div>
            </div>

    </div>
@endsection

@push('scripts')
    <script>
        $('#editMe').css('display', 'none');
    </script>
    @endpush


