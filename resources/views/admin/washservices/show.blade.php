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
                        <h2 class="content-header-title float-left mb-0">Car Wash Request Details </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                   
                                    <li class="breadcrumb-item"><a href="">Request</a>
                                    </li>
                                    <li class="breadcrumb-item active">Car Wash
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
                                        <img src="{{asset('images/wash-services/Car_Wash_Service.jpg')}}" class="img-fluid product-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                <h2>Car Details</h2>
                                    <hr>

                                <div class="col-12 col-md-6">
                 
                                               
                                    <h4>Car Name : <span class="text-success"> {{$washservice->car_name? : "Not Provided"}}</span></h4>
                                    <br>
                                    <h4>Car Model : <span class="text-success"> {{$washservice->car_model? : "Not Provided"}}</span></h4>
                                    <br>
                                    <h4>Service Booking Date : <span class="text-success"> {{$washservice->booking_date? : "Not Provided"}}</span></h4><br>
                                    <h4>Service Booking Time : <span class="text-success">{{$washservice->booking_time? : "Not Provided"}}</span></h4><br>
                                    <h4>Wash Type : <span class="text-success">   {{$washservice->type? : "Not Provided"}}</span></h4><br>
                                 </div>


                   



                                      <hr> 



                                    
                                    <h4>Addittional Notes</h4>
                                    <p  >
                                      {{$washservice->additional_notes? : "Not Provided in the request"}}
                                    </p>

                        


                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="tel:{{$washservice->phone}}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect waves-float waves-light">
                                            <span class="add-to-cart">Call Now: {{$washservice->phone}}</span>
                                        </a>
                                        <a href="mailto:{{$washservice->email}}" class="btn btn-primary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0 waves-effect">
                                            <span>Send Email: {{$washservice->email}}</span>
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
                                        <p class="card-text"> <span class="text-success"> {{$washservice->fullname}} </span> </p>
                                        <p class="card-text">Request Date : <span class="text-success"> {{$washservice->created_at}} </span> </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="phone-call"></i>
                                        <h4 class="mt-2 mb-1">Contact info</h4>
                                        <p class="card-text"> Email:  <span class="text-success"> {{$washservice->email}}</span> </p>
                                        <p class="card-text">Phone:  <span class="text-success"> {{$washservice->phone}}</span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="map-pin"></i>
                                        <h4 class="mt-2 mb-1">Address</h4>
                                        <p class="card-text"><span class="text-success"> {{$washservice->city}} ,{{$washservice->state}}</span></p>
                                        <p class="card-text"><span class="text-success"> {{$washservice->full_address}}</span></p>
                                      
                                    </div>
                                </div>
                            </div>


                   
      

                        </div>
                     




                      
                    </div>
                </section>
                

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection