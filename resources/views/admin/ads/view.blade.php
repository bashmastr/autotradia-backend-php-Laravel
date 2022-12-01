@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-ecommerce-details.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/swiper.min.css')}}">
@endsection
@section('content')
      <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Ad Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('ads.index')}}">Ads</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ad Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    
                </div>
            </div>
            <div class="content-body">
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{asset('images/car-ads/'.$ad->featured_image)}}" class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                  <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h4>{{$ad->name}}</h4>
                                        <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">{{$ad->user->name}}</a></span>
                                        <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                            <h4 class="item-price mr-1">Rs. {{$ad->price ? : "Not Provided" }}</h4>
                                            <ul class="unstyled-list list-inline pl-1 border-left">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            </ul>
                                        </div>
                                        <p class="card-text">Car Company - <span class="text-success">{{$ad->carDetails->company? : "Not Provided"}}</span></p>
                                   
                                      
                                      
                                        <div class="product-color-options">
                                            <h6>Car Color</h6>
                                            <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block">
                                                <div class="filloption bg-{{$ad->carDetails->car_color}}"> {{$ad->carDetails->car_color? : "Not Provided"}}</div>
                                            </li>
                                            </ul>
                                        </div>   
                                        <div class="product-color-options">
                                            <h6>Car Categories</h6>
                                            <ul class="list-unstyled mb-0">
                                          
                                              <li class="d-inline-block">
                                                {{$ad->category->name}},</li>
                                           
                                            </ul>
                                        </div>    
                                    </div>  
                                    <div class="col-12 col-md-6">
                                        <ul class="product-features list-unstyled">
                                            <li>Car Model -<span>{{$ad->carDetails->car_model? : "Not Provided"}}</span></li>
                                            <li>Millage  -<span>{{$ad->carDetails->milage? : "Not Provided"}}</span> </li>
                                            <li>Condition -<span>{{$ad->carDetails->condition? : "Not Provided"}}</span> </li>
                                            <li>Transmission -<span>{{$ad->carDetails->transmission? : "Not Provided"}}</span> </li>
                                            <li>Engine<span> -{{$ad->carDetails->engine? : "Not Provided"}}</span> </li>
                                            <li>Registeration no -<span>{{$ad->carDetails->registeration_no? : "Not Provided"}}</span> </li>
                                            <li>Registeration city -<span>{{$ad->carDetails->registeration_city? : "Not Provided"}}</span> </li>
                                            <li>Car Owner - <span>

                                            @if($ad->carDetails->owner == 1)
                                                    1st Owner
                                            @elseif($ad->carDetails->owner == 2)
                                                    2nd Owner
                                            @elseif($ad->carDetails->owner == 3)

                                                    3rd Owner
                                            @elseif($ad->carDetails->owner == 4)
                                                    4rth Owner
                                            @elseif($ad->carDetails->owner == 5)
                                                    5th Owner    
                                            @else

                                               Not Sure

                                            @endif
                                            
                                            </span> </li>
                                        </ul></div>  
                                  </div>
                                 
                                   <h3> Description:</h3>  
                                   <hr />
                                
                                   {!!$ad->description? : "Not Provided"!!}    

                                   <br>   <br>
                                           <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="tel:{{$ad->phone}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">
                                            <span class=" ">Call Now: {{$ad->phone}}</span>
                                        </a>
                                        @if($ad->email!=null)
                                        <a href="mailto:{{$ad->email}}" class="btn btn-primary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect">
                                            <span>Send Email: {{$ad->email}}</span>
                                        </a>
                                        @endif
                                     
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        <!-- Item features starts -->
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-6 mb-6 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="user"></i>
                                        <h4 class="mt-2 mb-1">Seller Name</h4>
                                        <p class="card-text">{{$ad->user->name}}</p>
                                        <p class="card-text">Register Since: {{$ad->user->created_at}}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-6 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="info"></i>
                                        <h4 class="mt-2 mb-1">Seller info</h4>
                                        <p class="card-text">Phone : {{$ad->user->phone? : "Not Provided"}}</p>
                                        <p class="card-text">Email : {{$ad->user->email? : "Not Provided"}}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Item features ends -->

                        <!-- Related Products starts -->
                        <div class="card-body">
                            <div class="mt-4 mb-2 text-center">
                                <h4>Ad Gallery</h4>
                                <p class="card-text">The Gallery of This Ad</p>
                            </div>
                            <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                                <div class="swiper-wrapper">
                                  @foreach ($ad->galleries as $gallery)
                                  <div class="swiper-slide">
                                    <a href="javascript:void(0)">
                                       
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="{{asset('images/gallery/'.$gallery->image)}}" class="img-fluid" alt="image" />
                                        </div>
                                      
                                    </a>
                                </div>
                                  @endforeach
                                   
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <!-- Related Products ends -->
                         <!-- Product Details starts -->
                         <div class="card-body">
                            <div class="row my-2">
                               
                               
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <!-- <label for="contact-icon">Car Features</label> --> <h4>Car Features </h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-label-group">
                                                 <div class="row">
                                                    @foreach ($ad->addcarFeatures as $key=>$carfeature)
                                                    <div class="col-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="{{$key}}" value="{{$carfeature->id}}" checked disabled/>
                                                            <label class="custom-control-label" for="{{$key}}">{{$carfeature->name}}</label>
                                                          
                                                        </div>
                                                        <p></p>
                                                    </div>
                                                   
                                                    @endforeach
                                                  
                                                 </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->
                    </div>
                </section>
                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('scripts')
<script src="{{asset('backend/app-assets/js/scripts/pages/app-ecommerce-details.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

@endsection