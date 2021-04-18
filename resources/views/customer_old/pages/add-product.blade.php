@extends('admin.layouts.auth.master')

@include('admin.components.files.dropify.index')


@push('styles')
    <style>
        .content-container{
            min-height:100vh
        }

        .card {
            padding: 25px 15px 10px;
            margin-top:  0px;
            margin-bottom: 20px;
            background-color: #f7f8ff;
            height: unset;
            font-family: 'Poppins', sans-serif;
            border-radius: 13px;
            border: none;
        }

        .form-control{
            width: 100% !important;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="content-container" id="content-container">

@include('admin.layouts.auth.topnav')
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <div class="card product-card">
                            <input type="file" class="dropify"/>
                        <h6 class="pt-3 text-muted"> Product Images</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="file" class="dropify small-dropify"/>
                            <input type="file" class="dropify small-dropify"/>
                            <input type="file" class="dropify small-dropify"/>
                            <input type="file" class="dropify small-dropify"/>
                            <input type="file" class="dropify small-dropify"/>
                        </div>
                        </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="card product-card">
                            <form>
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                               <div class="row mt-3">
                                         <div class="col-md-6" style="width: 50%">
                                                 <label for="">Category </label>
                                                <select type="text" class="form-control" id="" placeholder="">
                                                    <option>Select <i class="fa-chevron-circle-down"></i></option>
                                                    <option> option 2</option>
                                                    <option> option 3</option>
                                                    <option> option 4</option>
                                                </select>
                                        </div>
                                        <div class="col-md-6" style="width: 50%">
                                            <label for="">Subcategory </label>
                                                <select type="text" class="form-control" id="" placeholder="">
                                                    <option> select <i class="fa-chevron-circle-down"></i></option>
                                                    <option> option 2</option>
                                                    <option> option 3</option>
                                                    <option> option 4</option>
                                                </select>

                                    </div>
                                </div>
                                    <div class="form-group mt-3">
                                        <label for="">Condition</label>
                                        <select type="text" class="form-control" id="" placeholder="">
                                            <option> select <i class="fa-chevron-circle-down"></i></option>
                                            <option> option 2</option>
                                            <option> option 3</option>
                                            <option> option 4</option>
                                        </select>
                                    </div>

                                <div class="form-group mt-3">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="form-group mt-5">
                                    <button class="btn w-100">Upload Product</button>
                                 </div>
                            </form>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
