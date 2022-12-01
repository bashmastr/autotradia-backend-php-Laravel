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
                            <h2 class="content-header-title float-left mb-0">Import A Cart Request Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                   
                                    <li class="breadcrumb-item"><a href="">Request</a>
                                    </li>
                                    <li class="breadcrumb-item active">Import a car
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
                        <!-- <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{asset('images/wash-services/Import_A_Car.jpg')}}" class="img-fluid product-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">

                                    <div class="row">

                                         <div class="col-12 col-md-6">


                                                <h2>Car Details</h2>
                                                <hr>
                                                <h4>Car Name : <span class="text-success">{{$importcar->car_name}}</span></h4>
                                                <br>
                                                <h4>Car Model : <span class="text-success"> {{$importcar->car_model}}</span></h4>
                                                <br>
                                                <h4>Car Company : <span class="text-success"> {{$importcar->company}}</span></h4><br>
                                                <h4>Car Color : <span class="text-success">{{$importcar->car_color}}</span></h4><br>
                                                <h4>Condition : <span class="text-success">{{$importcar->condition}}</span></h4><br>

                                         </div>


                                    <div class="col-12 col-md-6">

                                    <h4>Preferred Country : <span class="text-success"> {{$importcar->preferred_country}}</span></h4><br>
                                    <h4>Expected Date :<span class="text-success">{{$importcar->expected_date}}</span></h4><br>
                                    <h4>Budget : <span class="text-success">{{$importcar->expected_budget}}</span></h4><br>

                                    
                                    </div>

                                </div>   

                                    <h3>Addittional Note:</h3>
                                    <hr>
                                    <p>
                                      {{$importcar->additional_notes}}
                                    </p>



                                    
                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="tel:{{$importcar->phone}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">
                                            <span class="add-to-cart">Call Now: {{$importcar->phone}}</span>
                                        </a>
                                        <a href="mailto:{{$importcar->email}}" class="btn btn-primary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect">
                                            <span>Send Email: {{$importcar->email}}</span>
                                        </a>
                                     
                                    </div>
                                  
                                    </div>
                            </div>
                        </div> -->
                        <!-- Product Details ends -->



                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{asset('images/wash-services/Import_A_Car.jpg')}}" class="img-fluid product-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h2>Request Details</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                 
                                               
                                                <h4>Car Name : <span class="text-success">{{$importcar->car_name}}</span></h4>
                                                <br>
                                                <h4>Car Model : <span class="text-success"> {{$importcar->car_model? : "Not Provided"}}</span></h4>
                                                <br>
                                                <h4>Car Company : <span class="text-success"> {{$importcar->company? : "Not Provided"}}</span></h4><br>
                                                <h4>Car Color : <span class="text-success">{{$importcar->car_color? : "Not Provided"}}</span></h4><br>
                                                <h4>Condition : <span class="text-success">{{$importcar->condition? : "Not Provided"}}</span></h4><br>
                                        </div>
                                        <div class="col-12 col-md-6">
                                           

                                        <h4>Preferred Country : <span class="text-success"> {{$importcar->preferred_country? : "Not Provided"}}</span></h4><br>
                                    <h4>Expected Date : <span class="text-success">{{$importcar->expected_date? : "Not Provided"}}</span></h4><br>
                                    <h4>Budget : <span class="text-success">{{$importcar->expected_budget? : "Not Provided"}}</span></h4><br>


                                        </div>
                                    </div>
                                    <br>
                                    <h3>Additional Note</h3>
                                    <hr>
                                    <p class="card-text">
                                      {{$importcar->additional_notes? : "Not Provided in the request"}}
                                    </p>



                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="tel:{{$importcar->phone}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">
                                            <span class="add-to-cart">Call Now: {{$importcar->phone}}</span>
                                        </a>
                                        <a href="mailto:{{$importcar->email}}" class="btn btn-primary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect">
                                            <span>Send Email: {{$importcar->email}}</span>
                                        </a>
                                     
                                    </div>
                                  
                                </div>

                                
                            </div>
                        </div>




                        <!-- Item features starts -->
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="user"></i>
                                        <h4 class="mt-2 mb-1">Full Name</h4>
                                        <p class="card-text"> <span class="text-success"> {{$importcar->fullname}} </span></p>
                                        <p class="card-text">Request Date <span class="text-success"> {{$importcar->created_at}} </span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="phone-call"></i>
                                        <h4 class="mt-2 mb-1">Contact info</h4>
                                        <p class="card-text">Email:  <span class="text-success"> {{$importcar->email}} </span> </p>
                                        <p class="card-text">Phone:   <span class="text-success"> {{$importcar->phone}} </span> </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="map-pin"></i>
                                        <h4 class="mt-2 mb-1">Address</h4>
                                        <p class="card-text">  <span class="text-success"> {{$importcar->city}} ,{{$importcar->state}} </span></p>
                                        <p class="card-text">  <span class="text-success"> {{$importcar->full_address}} </span></p>
                                      
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