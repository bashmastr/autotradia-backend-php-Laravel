@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
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
                            <h2 class="content-header-title float-left mb-0">Users</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Update</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">User Details</a>
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
                           <form  action="{{route('ads.update',['ad'=>$ad->id])}}" method="POST" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Ad Form</h4>
                                        </div>
                                           
                                        <div class="card-body">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Ad Title</label>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" class="form-control" name="name" value="{{$ad->name}}" />
                                                           
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
                                                        <label for="fname-icon">Ad Price</label>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" class="form-control" name="price" value="{{$ad->price}}" />
                                                           
                                                        </div>
                                                        @error('price')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="email-icon">Ad Feature Image</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="file"></i></span>
                                                            </div>
                                                            <input type="file" id="email-icon" class="form-control" name="featured_image" />
                                                           
                                                        </div>
                                                        @error('featured_image')
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
                                                            <textarea class="form-control" id="label-textarea" rows="3" name="description">{{$ad->description}}</textarea>
                                                          
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
                                                        <label for="contact-icon">Car Features</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                             <div class="row">
                                                                @foreach ($carfeatures as $key=>$carfeature)
                                                                <div class="col-3">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="{{$key}}" name="car_features[]" value="{{$carfeature->id}}" <?php echo in_array($carfeature->id, $addcarfeatures) ? "checked" : ""; ?>/>
                                                                        <label class="custom-control-label" for="{{$key}}">{{$carfeature->name}}</label>
                                                                      
                                                                    </div>
                                                                    <p></p>
                                                                </div>
                                                               
                                                                @endforeach
                                                              
                                                             </div>
                                                            @error('car_features')
                                                            <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Gallery</h4>
                                    </div>
                                       
                                    <div class="card-body">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="email-icon">Ad Gallery</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="file"></i></span>
                                                        </div>
                                                        <input type="file" id="email-icon" class="form-control" name="gallery_images[]" multiple/>
                                                       
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Categories</h4>
                                </div>
                                   
                                <div class="card-body">
                              
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="email-icon">Ad Categories</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-merge">
                                                   
                                                    <select name="ad_categories[]" class="select2 form-control"  multiple>
                                                         
                                                        @foreach ($categories as $key=>$category)
                                                       
                                                              <option value="{{$category->id}}" <?php echo in_array($category->id, $ad_categories) ? "selected" : ""; ?>>{{$category->name}}</option>
                                                          @endforeach
                                                      </select>
                                                       
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            
                        </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Car Detail</h4>
                                    </div>
                                       
                                    <div class="card-body">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car model</label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="car_model" value="{{$ad->carDetails->car_model}}" />
                                                       
                                                    </div>
                                                    @error('car_model')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Company </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="company" value="{{$ad->carDetails->company}}"/>
                                                       
                                                    </div>
                                                    @error('company')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car color </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="car_color" value="{{$ad->carDetails->car_color}}"/>
                                                       
                                                    </div>
                                                    @error('car_color')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Milage</label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="milage" value="{{$ad->carDetails->milage}}"/>
                                                       
                                                    </div>
                                                    @error('milage')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">condition</label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="condition" value="{{$ad->carDetails->condition}}"/>
                                                       
                                                    </div>
                                                    @error('condition')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Transmission </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <select name="transmission" class="form-control">
                                                            <option value="auto" <?php echo($ad->carDetails->transmission=='auto')?"checked":""?>>Automatic</option>
                                                            <option value="menual" <?php echo($ad->carDetails->transmission=='menual')?"checked":""?>>Menual</option>
                                                        </select>
                                                       
                                                    </div>
                                                    @error('transmission')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car engine </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="engine" value="{{$ad->carDetails->engine}}" />
                                                       
                                                    </div>
                                                    @error('engine')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car registeration no </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="registeration_no" value="{{$ad->carDetails->registeration_no}}"/>
                                                       
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Registeration city </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="registeration_city" value="{{$ad->carDetails->registeration_city}}" />
                                                       
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </form>
                               
                           
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
@endsection