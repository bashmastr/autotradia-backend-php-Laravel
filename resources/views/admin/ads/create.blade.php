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
                            <h2 class="content-header-title float-left mb-0">Ads</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New Ad</a>
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
                           <form class="" action="{{route('ads.store')}}" method="POST" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Ad Form</h4>
                                        </div>
                                           
                                        <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Ad Title</label><br>
                                                    <small>(Required)</small>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" class="form-control" name="name" placeholder="Ad Title" required/>
                                                           
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
                                                        <label for="fname-icon">Ad Price</label><br>
                                                    <small>(Required)</small>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="number" min="1" id="fname-icon" class="form-control" name="price" placeholder="Ad Price"  required/>
                                                           
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
                                                        <label for="email-icon">Ad Feature Image</label><br>
                                                    <small>(Required)</small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="image"></i></span>
                                                        </div>

                                                                 
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="featured_image" id="customFile" accept="image/*" required>
                                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                                </div>

 
                                                           
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
                                                        <label for="contact-icon">Description</label><br>
                                                    <small>(Required)</small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                            <textarea class="form-control" id="label-textarea" rows="3" placeholder="Enter Description" name="description" required></textarea>
                                                          
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
                                                        <label for="contact-icon">Car Features</label><br>
                                                    <small>(Required)</small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                             <div class="row">
                                                                @foreach ($carfeatures as $key=>$carfeature)
                                                                <div class="col-3">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="{{$key}}" name="car_features[]" value="{{$carfeature->id}}" />
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



                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Phone</label><br>
                                                    <small>(Required)</small>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                            <input type="number" min="1" class="form-control" id="label-textarea"  placeholder="Phone Number" name="phone" required>
                                                          
                                                            @error('phone')
                                                            <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Secondary Phone</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                            <input type="number" min="1" class="form-control" id="label-textarea"  placeholder="Secondary Phone Number" name="secondary_phone">
                                                          
                                                            @error('secondary_phone')
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
                                                    <label for="email-icon">Ad Gallery</label> <br>
                                                    <small> (Multiple images are allowed upto 4) </small>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="image"></i></span>
                                                        </div>

                                                                            
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="gallery_images[]" id="customFile" accept="image/*" multiple required >
                                                    <label class="custom-file-label" for="customFile">Choose Multiple Images</label>
                                                </div>


                                                       
                                                       
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Category</h4>
                                </div>
                                   
                                <div class="card-body">
                              
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="email-icon">Ad Category</label><br>
                                                    <small>(Required)</small>
                                            </div>
                                            <div class="col-sm-9">
                                             
                                                    <select name="category_id" class="form-control" >
                                                          
                                                        @foreach ($categories as $category)
                                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                                          @endforeach
                                                      </select>
                                              
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
                                                    <label for="fname-icon">Car model</label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="car_model" placeholder="Car model" required />
                                                       
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
                                                    <label for="fname-icon">Car Company </label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="company" placeholder="Car Company "  required />
                                                       
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
                                                    <label for="fname-icon">Car color </label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="car_color" placeholder="Car Color.. E.g White, Black " required />
                                                       
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
                                                    <label for="fname-icon">Available City </label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="available_city" placeholder="Available City  "  required/>
                                                       
                                                    </div>
                                                    @error('available_city')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Mileage</label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text">  Km  </span> 
                                                        </div>
                                                        <input type="number" min="1" id="fname-icon" class="form-control" name="milage" placeholder="Enter Mileage in kilometers" required />
                                                       
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
                                                    <label for="fname-icon">Condition</label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>

                                                        <select name="condition" class="form-control" required>
                                                        <option value="">Select Option</option>

                                                            <option value="Used">Used</option>
                                                            <option value="New">New</option>
                                                           
                                                        </select>


                                                     
                                                       
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
                                                    <label for="fname-icon">Car Transmission </label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <select name="transmission" class="form-control" required>
                                                        <option value="">Select Option</option>

                                                            <option value="auto">Automatic</option>
                                                            <option value="manual">Manual</option>
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
                                                    <label for="fname-icon">Car Owner</label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <select name="owner" class="form-control" required>
                                                        <option value="">Select Option</option>

                                                            <option value="1">1st Owner</option>
                                                            <option value="2">2nd Owner</option>
                                                            <option value="3">3rd Owner</option>
                                                            <option value="4">4rth Owner</option>
                                                            <option value="5">5th Owner</option>
                                                            <option value="0">Not Sure</option>


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
                                                    <label for="fname-icon">Car Engine </label> <br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="engine" placeholder="Car engine.. E.g 1600CC, 1800CC " required />
                                                       
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
                                                    <label for="fname-icon">Car Year </label> <br> 
                                                    <small> (Required) </small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="date" id="fname-icon" class="form-control" name="year" placeholder="Car Made Year "  required/>
                                                       
                                                    </div>
                                                    @error('year')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Fuel Type </label> <br>
                                                    <small> (Required) </small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>

                                                        <select name="fuel_type" class="form-control" required>
                                                                                                                   
                                                            <option value="">Select Option</option>

                                                            <option value="Petrol">Petrol</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="Hybrid">Hybrid</option>
                                                            <option value="CNG">CNG</option>
                                                        </select>


                                                      
                                                       
                                                    </div>
                                                    @error('fuel_type')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Registeration city </label> <br>
                                                    <small> (Required) </small>
                                                   
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="registeration_city" placeholder="Car Registeration city.. E.g: LHR, ISB, KPK " required/>
                                                       
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