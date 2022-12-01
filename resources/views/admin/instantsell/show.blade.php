@extends('admin.layouts.master')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-ecommerce-details.css')}}">
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
                            <h2 class="content-header-title float-left mb-0">Instant Sell Car Request Details </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                   
                                    <li class="breadcrumb-item"><a href="">Request</a>
                                    </li>
                                    <li class="breadcrumb-item active">Instant Sell Car
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        
                    </div>
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
                                        @if($instantsellcar->featured_image!=null)
                                        <img src="{{asset('images/instant_sell/'.$instantsellcar->featured_image)}}" class="img-fluid product-img" alt="" />
                                         @else
                                         <img src="{{asset('images/wash-services/Sell_A_Car.jpg')}}" class="img-fluid product-img" alt="" />
                                         @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>Car Name : {{$instantsellcar->car_name? : "Not Provided"}}</h4>
                                   
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <h4 class="item-price mr-1">PKR {{$instantsellcar->price? : "Not Provided"}}</h4>
                                        
                                    </div>
                                    <p class="card-text">Car Condition :  <span class="text-success">{{$instantsellcar->condition? : "Not Provided" }}</span></p>
                
 
                                    <h3>Features : </h3>
                                    <p class="card-text">
                                    <span class="text-success">   {{$instantsellcar->features? : "Not Provided"}}</span> 
                                      </p>


                              


                                    <div class="product-color-options">
                                        <h4>Car Color : </h4>
                                        <span class="text-success">     {{$instantsellcar->car_color? : "Not Provided"}} </span> 
                                        
                                           
                                          
                                           
                                               
                                             
                                               
                                        
                                    </div>
                                
                                    <div class="d-flex flex-column ">

                                    @if($instantsellcar->car_model !=null)
                                        <h4>Car Model : </h4>
                                        <p class="card-text">
                                        <span class="text-success">    {{$instantsellcar->car_model}} </span> 
                                        </p>

                                    @endif


                                         @if($instantsellcar->car_year !=null)
                                       <h4>Car Year: </h4>
                                       <p class="card-text">
                                       <span class="text-success">  {{$instantsellcar->car_year}} </span> 
                                       </p>

                                       @endif


                                      @if($instantsellcar->registeration_no !=null)
                                      <h4>Car Registeration No : </h4>
                                      <p class="card-text">
                                      <span class="text-success">  {{$instantsellcar->registeration_no}}  </span> 
                                      </p>

                                      @endif

                                        @if($instantsellcar->registeration_city !=null)
                                      <h4>Car Registeration City: </h4>
                                      <p class="card-text">
                                      <span class="text-success">   {{$instantsellcar->registeration_city}}
                                      </p>

                                      @endif

                                   

                                      <h3>Additional Note:</h3>

                                      <hr>
                                    <p>
                                      {{$instantsellcar->descriptions? : "Not Provided in the request"}}
                                    </p>




                                    </div>

                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="tel:{{$instantsellcar->phone}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">
                                            <span class="add-to-cart">Call Now: {{$instantsellcar->phone}}</span>
                                        </a>
                                        <a href="mailto:{{$instantsellcar->email}}" class="btn btn-primary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect">
                                            <span>Send Email: {{$instantsellcar->email}}</span>
                                        </a>
                                     
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        <!-- Item features starts -->
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="user"></i>
                                        <h4 class="mt-2 mb-1">Full Name</h4>
                                        <p class="card-text"> <span class="text-success"> {{$instantsellcar->fullname}}  </span> </p>
                                        <p class="card-text"> Request Date <span class="text-success"> : {{$instantsellcar->created_at}}  </span> </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="phone-call"></i>
                                        <h4 class="mt-2 mb-1">Contact info</h4>
                                        <p class="card-text">Email: <span class="text-success"> {{$instantsellcar->email}} </span> </p>
                                        <p class="card-text">Phone : <span class="text-success"> {{$instantsellcar->phone}}  </span> </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="map-pin"></i>
                                        <h4 class="mt-2 mb-1">Address</h4>
                                        <p class="card-text"><span class="text-success"> {{$instantsellcar->city}} ,{{$instantsellcar->state}} </span> </p>
                                        <p class="card-text"><span class="text-success"> {{$instantsellcar->full_address}}  </span> </p>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item features ends -->

                        <!-- Related Products starts -->
                      
                        <!-- Related Products ends -->
                    </div>
                </section>
                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection