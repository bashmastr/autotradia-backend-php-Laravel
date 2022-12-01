@extends('admin.layouts.master')

@section('content')
     <!-- BEGIN: Content-->
     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Package</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Update Package</a>
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                       
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Package Update Form</h4>
                                </div>
                                <div class="card-body">
                                    <form class="" action="{{route('packages.update',['package'=>$package->id])}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Package Name</label><br>
                                                        <small> (Required)</small>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" class="form-control" name="name" value="{{$package->name}}" />
                                                           
                                                        </div>
                                                        @error('name')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="email-icon">Package image</label><br>
                                                        <small> </small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="file"></i></span>
                                                            </div>
                                                            
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" value= "{{$package->picture}}" name="picture" id="customFile" accept="image/*">
                                                    <label class="custom-file-label" for="customFile">{{$package->picture}}</label>
                                                </div>
                                                           
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Description</label><br>
                                                        <small> (Required)</small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                            <textarea class="form-control" id="label-textarea" rows="3"  name="description">{{$package->description}}</textarea>
                                                           
                                                            @error('description')
                                                            <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Price</label><br>
                                                        <small> (Required)</small>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="text" id="fp-default" class="form-control " value="{{$package->price}}" name="price" required/>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1"> <label for="contact-icon">Sale Price</label></div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="text" id="fp-time" class="form-control" value="{{$package->sale_price}}" name="sale_price"/>
                                                            
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Max Ad's Allowed</label><br>
                                                        <small> (Required)</small>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="number" id="fp-default" min="1" class="form-control " value="{{$package->max_ads}}" name="max_ads" required/>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1"> <label for="contact-icon">Ad Durations (In Days)</label><br>
                                                        <small> (Required)</small></div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="text" id="fp-time" class="form-control" value="{{$package->durations}}" name="durations"/>
                                                            
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->

             

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('scripts')
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
     <!-- BEGIN: Page JS-->
     <script src="{{asset('backend/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
     <!-- END: Page JS-->
@endsection