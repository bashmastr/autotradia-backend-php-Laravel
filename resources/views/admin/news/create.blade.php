@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
     <!-- END: Page CSS-->
@endsection
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
                            <h2 class="content-header-title float-left mb-0">Create News</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New News</a>
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
                                    <h4 class="card-title">News Form</h4>
                                </div>
                                <div class="card-body">
                                    <form class="" action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">News Name</label> <br>
                                                        <small>(Required) </small>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" class="form-control" name="name" placeholder="News Name" required/>
                                                           
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
                                                        <label for="email-icon">News Category</label> <br>
                                                        <small>(Required) </small>
                                                    </div>
                                                    <div class="col-sm-9 mb-1">
                                                        <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                           <select name="news_cat_id" class="form-control" placeholder="Select option"  required>
                                                             
                                                              @foreach ($newscategory as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                             
                                                        </div>
                                                        @error('news_cat_id')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="email-icon">News image</label> <br>
                                                        <small>(Required) </small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="image"></i></span>
                                                            </div>

                                                            <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="customFile" accept="image/*" required>
                                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                                </div>


                                                           
                                                        </div>
                                                        @error('image')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Description</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                            <textarea class="form-control" id="label-textarea" rows="3" placeholder="Category Description" name="description" ></textarea>
                                                           
                                                            @error('description')
                                                            <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                            @enderror
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
    <script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
     <script src="{{asset('backend/app-assets/js/scripts/forms/form-select2.js')}}"></script>
     <!-- END: Page JS-->
@endsection