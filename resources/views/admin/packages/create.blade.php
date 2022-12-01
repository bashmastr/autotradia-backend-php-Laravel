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
                            <h2 class="content-header-title float-left mb-0">Package</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New Package</a>
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
                                    <h4 class="card-title">Package Form</h4>
                                </div>
                                <div class="card-body">
                                    <form class="" action="{{route('packages.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                                            <input type="text" id="fname-icon" class="form-control" name="name" placeholder="Package Name" required />
                                                           
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
                                                        <label for="email-icon">Package image</label> <br>
                                                        <small> (Required)</small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                           

                                             
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="picture" id="customFile" accept="image/*" required>
                                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                                </div>

                                                @error('picture')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                           


                                                            <!-- <input type="file" id="email-icon" class="custom-file-input" name="picture" /> -->
                                                           
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
                                                            <textarea class="form-control" id="label-textarea" rows="3" placeholder="Package Description" required name="description"></textarea>
                                                           
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
                                                            <input type="number" min="1" id="fp-default" class="form-control " placeholder="Enter Only Numbers" name="price" required/>
                                                            
                                                        </div>

                                                        @error('price')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror


                                                    </div>
                                                    <div class="col-sm-1"> <label for="contact-icon">Sale Price</label></div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="number" min="1" id="fp-time" class="form-control" placeholder="Sale Price" name="sale_price"/>
                                                            
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
                                                            <input type="number" id="fp-default" min="1" class="form-control " placeholder="Write Only Numbers" name="max_ads" required/>
                                                            
                                                        </div>

                                                        @error('max_ads')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror


                                                    </div>
                                                    <div class="col-sm-1"> <label for="contact-icon">Ad Durations (In Days)</label><br>
                                                        <small> (Required)</small></div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="number" min="1" id="fp-time" class="form-control" placeholder="Package Duration In Days. Write Only numbers" name="durations" required/>
                                                            
                                                        </div>
                                                        @error('durations')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
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