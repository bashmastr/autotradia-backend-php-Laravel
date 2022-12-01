@extends('admin.layouts.master')


@section('content')
     <!-- BEGIN: Content-->
     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <!-- Greetings Card starts -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card-congratulations">
                                <div class="card-body text-center">
                                    <img src="{{asset('backend/app-assets/images/elements/decore-left.png')}}" class="congratulations-img-left" alt="card-img-left" />
                                    <img src="{{asset('backend/app-assets/images/elements/decore-right.png')}}" class="congratulations-img-right" alt="card-img-right" />
                                    <div class="avatar avatar-xl bg-primary shadow">
                                        <div class="avatar-content">
                                            <i data-feather="award" class="font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-1 text-white">Welcome Back! Admin:  {{auth()->user()->name}}</h1>
                                        <p class="card-text m-auto w-75">
                                            You have total <strong>{{$pending_ads}}</strong> Pending AD's.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Greetings Card ends -->

                        <!-- Subscribers Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-large-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">{{$active_ads}}</h2>
                                    <p class="card-text">AD's Listed</p>
                                    <small> Weekly Report</small>
                                </div>
                                <div id="gained-chart"></div>
                            </div>
                        </div>
                        <!-- Subscribers Chart Card ends -->

                        <!-- Orders Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="package" class="font-medium-9"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">{{$users_register_count}}</h2>
                                    <p class="card-text">User's Registered</p>
                                    <small> Weekly Report</small>
                                </div>
                                <div id="order-chart"></div>
                            </div>
                        </div>
                        <!-- Orders Chart Card ends -->
                    </div>



 



                     <div class="row match-height">

                     <div class="col-lg-6 col-12">
                            <div class="row match-height">
                     
                          
                                <!-- Line Chart - Profit -->
                                <div class="col-lg-12 col-md-6 col-6">
                                    <div class="card  " style="height: 403px;">
                                        <div class="card-body " style="padding-top: 90px;">
                                            <h6>Earnings From Past 6 Day's</h6>
                                            <h2 class="font-weight-bolder mb-1">Rs {{$past_six_days_earnings}}</h2>
                                            <div id="statistics-profit-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Line Chart - Profit -->

                                <!-- Earnings Card -->
                                <!-- <div class="col-lg-12 col-md-6 col-12">
                                    <div class="card earnings-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h4 class="card-title mb-1">Earnings From Featured Ad's</h4>
                                                    <div class="font-small-2">This Month</div>
                                                    <h5 class="mb-1">$4055.56</h5>
                                                    <p class="card-text text-muted font-small-2">
                                                        <span class="font-weight-bolder">68.2%</span><span> more earnings than last month.</span>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <div id="earnings-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/ Earnings Card -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Active & Pending Ad's Statistics</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                            <h1 class="font-large-2 font-weight-bolder mt-2 mb-0">{{$total_ads_count}} </h1>
                                            <p class="card-text">All Submitted Ad's</p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="text-center">
                                            <p class="card-text mb-50">Pending</p>
                                            <span class="font-large-1 font-weight-bold">{{$pending_ads}}</span>
                                        </div>
                                        <div class="text-center">
                                            <p class="card-text mb-50">Approved/Published</p>
                                            <span class="font-large-1 font-weight-bold">{{$active_ads}}</span>
                                        </div>
                                        <div class="text-center">
                                            <p class="card-text mb-50">Trashed</p>
                                            <span class="font-large-1 font-weight-bold">{{$trashed_ads}}</span>
                                        </div>



                                        <input  hidden  disabled type="text" id="live_ads_percentage" value=<?php  echo number_format((float)$live_ads_percentage, 2, '.', '') ?>>


                                        <input  hidden disabled type="text" id="this_week" value="{{$this_week}}"/>
                                        <input  hidden disabled type="text" id="last_week" value="{{$last_week}}"/>



                                        <input  hidden disabled type="text" id="this_week_users" value="{{$this_week_users}}"/>
                                        <input  hidden disabled type="text" id="last_week_users" value="{{$last_week_users}}"/>



                                        <input   hidden  disabled type="text" id="days_earnings" value="{{$days_earnings}}" />
                                        
                                        <?php

                                     
                                        $myArray = explode(',', $days_earnings);
                                       

                                        ?>
                                        <input   hidden   disabled type="text" id="array0" value="{{$myArray[0]}}" />
                                        <input   hidden   disabled type="text" id="array1" value="{{$myArray[1]}}" />
                                        <input   hidden   disabled type="text" id="array2" value="{{$myArray[2]}}" />
                                        <input   hidden   disabled type="text" id="array3" value="{{$myArray[3]}}" />
                                        <input    hidden  disabled type="text" id="array4" value="{{$myArray[4]}}" />
                                        <input   hidden   disabled type="text" id="array5" value="{{$myArray[5]}}" />
                                     



                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="row match-height">
                        <!-- Browser States Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-browser-states">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Services Requests Received</h4>
                                        <p class="card-text font-small-2">This Year 2021</p>
                                    </div>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="browser-states">
                                        <div class="media">
                                            <img src="{{asset('images/dashboard/car-instant-sell-removebg-preview-min.png')}}" class="rounded mr-1" height="50" alt="Google Chrome" />
                                            <h6 class="align-self-center mb-0">Instant Car Sell Requests</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                        <div class="font-weight-bolder text-success">+ {{$car_sell_percentage}} %</div>
                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="media">
                                            <img src="{{asset('images/dashboard/car-hire-removebg-preview-min.png')}}" class="rounded mr-1" height="50" alt="Mozila Firefox" />
                                            <h6 class="align-self-center mb-0">Car Hire Requests</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                        <div class="font-weight-bolder text-success">+ {{$car_hire_percentage}}%</div>

                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="media">
                                            <img src="{{asset('images/dashboard/wash-removebg-preview-min.png')}}" class="rounded mr-1" height="50" alt="Apple Safari" />
                                            <h6 class="align-self-center mb-0">Car Wash Requests</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                        <div class="font-weight-bolder text-success">+ {{$car_wash_percentage}}%</div>

                                        </div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="media">
                                            <img src="{{asset('images/dashboard/cargo-removebg-preview-min.png')}}" class="rounded mr-1" height="50" alt="Internet Explorer" />
                                            <h6 class="align-self-center mb-0">Import A Car Requests</h6>
                                        </div>
                                        <div class="d-flex align-items-center">


                                            <div class="font-weight-bolder text-success">+ {{$import_car_percentage}} %</div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Browser States Card -->

                        <!-- Goal Overview Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">AD'S FEATURED STATISTICS</h4>
                                    <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                                </div>
                                <div class="card-body p-0">
                                    <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                                    <div class="row border-top text-center mx-0">
                                        <div class="col-6 border-right py-1">
                                            <p class="card-text text-muted mb-0">Total AD'S</p>
                                            <h3 class="font-weight-bolder mb-0">{{$total_ads_count}}    </h3>

                                            <input type="text" id="featured_ad_percentage" hidden disable value= <?php echo  number_format((float)$ad_featured_percentage,1, '.', '') ?> >  
                                        </div>
                                        <div class="col-6 py-1">
                                            <p class="card-text text-muted mb-0">Featured AD'S</p>
                                            <h3 class="font-weight-bolder mb-0">{{$featured_ads_count}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Goal Overview Card -->

                        <!-- Transaction Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">Car's Statistics</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="media">
                                            <div class="avatar bg-light-primary rounded">
                                                <div class="avatar-content">
                                                    <i data-feather="truck" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="transaction-title">Luxury Car's</h6>
                                                <small>Total</small>
                                            </div>
                                        </div>
                                        <div class="font-weight-bolder text-success">+ {{$luxury_cars_count}}</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="media">
                                            <div class="avatar bg-light-success rounded">
                                                <div class="avatar-content">
                                                    <i data-feather="truck" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="transaction-title">Used Car's</h6>
                                                <small>Total</small>
                                            </div>
                                        </div>
                                        <div class="font-weight-bolder text-success">+ {{$used_cars}}</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="media">
                                            <div class="avatar bg-light-danger rounded">
                                                <div class="avatar-content">
                                                    <i data-feather="truck" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="transaction-title">New Car's</h6>
                                                <small>Total</small>
                                            </div>
                                        </div>
                                        <div class="font-weight-bolder text-success">+ {{$new_cars}}</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="media">
                                            <div class="avatar bg-light-warning rounded">
                                                <div class="avatar-content">
                                                    <i data-feather="truck" class="avatar-icon font-medium-6"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="transaction-title">Featured Car's</h6>
                                                <small>Total</small>
                                            </div>
                                        </div>
                                        <div class="font-weight-bolder text-success">+ {{$featured_ads_count}}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->
                        </div>





                        <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User Info</th>
                                                    <th>Service Requested</th>
                                                    <th>Phone</th>
                                                    <th>City</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                            @if(count($car_sell_requests) != 0  && count($car_wash_requests) != 0 && count($import_car_requests) != 0 && count($car_hire_requests) != 0 )

                                            @foreach($car_sell_requests as $key=>$request)
                                                <tr>
                                                    <td width="3%">
                                                    <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                {{$count+1}}
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td>


                                                            <div>


                                                                <div class="font-weight-bolder"> <i data-feather="user" class="text-success font-medium-1"></i>  {{$request->fullname}}</div>
                                                                <div class="font-small-2 text-muted">{{$request->email}}</div>
                                                            </div>

                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                        <i data-feather="list" class="text-success font-medium-1"></i>
                                                            <span>Instant Car Sell</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">

                                                        <i data-feather="phone" class="text-success font-medium-1"></i>
                                                            <span class="font-weight-bolder mb-25">{{$request->phone}}</span>


                                                    </td>
                                                    <td>

                                                    <i data-feather="home" class="text-success font-medium-1"></i>

                                                        {{$request->city}}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="eye" class="text-success font-medium-1"></i>
                                                            <a  href="{{route('admin.instant-sell-details',['id'=>$request->id])}}"> <span class="font-weight-bolder mr-1"> &nbsp;	  View</span> </a>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php $count=$count+1 ?>

                                            @endforeach


                                            @foreach($car_wash_requests as $key=>$request)
                                                <tr>
                                                    <td width="3%">
                                                    <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                {{$count+1}}
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td>


                                                            <div>
                                                            <i data-feather="user" class="text-success font-medium-1"></i>

                                                                <div class="font-weight-bolder">{{$request->fullname}}</div>
                                                                <div class="font-small-2 text-muted">{{$request->email}}</div>
                                                            </div>

                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                        <i data-feather="list" class="text-success font-medium-1"></i>
                                                            <span>Car Wash</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">

                                                        <i data-feather="phone" class="text-success font-medium-1"></i>
                                                            <span class="font-weight-bolder mb-25">{{$request->phone}}</span>


                                                    </td>
                                                    <td>

                                                    <i data-feather="home" class="text-success font-medium-1"></i>

                                                        {{$request->city}}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="eye" class="text-success font-medium-1"></i>
                                                            <a href="{{route('admin.wash-service-details',['id'=>$request->id])}}"> <span class="font-weight-bolder mr-1"> &nbsp;	  View</span> </a>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php $count=$count+1 ?>

                                            @endforeach


                                            @foreach($import_car_requests as $key=>$request)
                                                <tr>
                                                    <td width="3%">
                                                    <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                {{$count+1}}
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td>


                                                            <div>
                                                            <i data-feather="user" class="text-success font-medium-1"></i>

                                                                <div class="font-weight-bolder">{{$request->fullname}}</div>
                                                                <div class="font-small-2 text-muted">{{$request->email}}</div>
                                                            </div>

                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                        <i data-feather="list" class="text-success font-medium-1"></i>
                                                            <span>Import A Car</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">

                                                        <i data-feather="phone" class="text-success font-medium-1"></i>
                                                            <span class="font-weight-bolder mb-25">{{$request->phone}}</span>


                                                    </td>
                                                    <td>

                                                    <i data-feather="home" class="text-success font-medium-1"></i>

                                                        {{$request->city}}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="eye" class="text-success font-medium-1"></i>
                                                            <a  href="{{route('admin.import-car-details',['id'=>$request->id])}}"> <span class="font-weight-bolder mr-1">  &nbsp;	 View</span> </a>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php $count=$count+1 ?>

                                            @endforeach



                                            @foreach($car_hire_requests as $key=>$request)
                                                <tr>
                                                    <td width="3%">
                                                    <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                {{$count+1}}
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td>


                                                            <div>
                                                            <i data-feather="user" class="text-success font-medium-1"></i>

                                                                <div class="font-weight-bolder">{{$request->fullname}}</div>
                                                                <div class="font-small-2 text-muted">{{$request->email}}</div>
                                                            </div>

                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                        <i data-feather="list" class="text-success font-medium-1"></i>
                                                            <span>Car Hire</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">

                                                        <i data-feather="phone" class="text-success font-medium-1"></i>
                                                            <span class="font-weight-bolder mb-25">{{$request->phone}}</span>


                                                    </td>
                                                    <td>

                                                    <i data-feather="home" class="text-success font-medium-1"></i>

                                                        {{$request->city}}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="eye" class="text-success font-medium-1"></i>
                                                            <a href="{{route('admin.hired-car-details',['id'=>$request->id])}}">  <span class="font-weight-bolder mr-1"> &nbsp;	 View</span> </a>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php $count=$count+1 ?>

                                            @endforeach
                                            @endif



                                            </tbody>
                                        </table>
                                    </div>

                                    @if(count($car_sell_requests) == 0  && count($car_wash_requests) == 0 && count($import_car_requests) == 0 && count($car_hire_requests) == 0 )

                                      <h4 style="padding-left: 4px;"> There is no requests made yet</h4>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <!--/ Company Table Card -->







                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')


<script>





$(window).on('load', function () {


// alert(document.getElementById("days_earnings").value)

  'use strict';



  var $barColor = '#f3f3f3';
  var $trackBgColor = '#EBEBEB';
  var $textMutedColor = '#b9b9c3';
  var $budgetStrokeColor2 = '#dcdae3';
  var $goalStrokeColor2 = '#51e5a8';
  var $strokeColor = '#ebe9f1';
  var $textHeadingColor = '#5e5873';
  var $earningsStrokeColor2 = '#28c76f66';
  var $earningsStrokeColor3 = '#28c76f33';

  var $statisticsOrderChart = document.querySelector('#statistics-order-chart');
  var $statisticsProfitChart = document.querySelector('#statistics-profit-chart');
  var $earningsChart = document.querySelector('#earnings-chart');
  var $revenueReportChart = document.querySelector('#revenue-report-chart');
  var $budgetChart = document.querySelector('#budget-chart');
  var $browserStateChartPrimary = document.querySelector('#browser-state-chart-primary');
  var $browserStateChartWarning = document.querySelector('#browser-state-chart-warning');
  var $browserStateChartSecondary = document.querySelector('#browser-state-chart-secondary');
  var $browserStateChartInfo = document.querySelector('#browser-state-chart-info');
  var $browserStateChartDanger = document.querySelector('#browser-state-chart-danger');
  var $goalOverviewChart = document.querySelector('#goal-overview-radial-bar-chart');

  var statisticsOrderChartOptions;
  var statisticsProfitChartOptions;
  var earningsChartOptions;
  var revenueReportChartOptions;
  var budgetChartOptions;
  var browserStatePrimaryChartOptions;
  var browserStateWarningChartOptions;
  var browserStateSecondaryChartOptions;
  var browserStateInfoChartOptions;
  var browserStateDangerChartOptions;
  var goalOverviewChartOptions;

  var statisticsOrderChart;
  var statisticsProfitChart;
  var earningsChart;
  var revenueReportChart;
  var budgetChart;
  var browserStatePrimaryChart;
  var browserStateDangerChart;
  var browserStateInfoChart;
  var browserStateSecondaryChart;
  var browserStateWarningChart;
  var goalOverviewChart;

  



  //------------ Statistics PAST 6 Days Chart  ------------
  //-----------------------------------------------
  statisticsProfitChartOptions = {
    chart: {
      height: 70,
      type: 'line',
      toolbar: {
        show: false
      },
      zoom: {
        enabled: false
      }
    },
    grid: {
      borderColor: $trackBgColor,
      strokeDashArray: 5,
      xaxis: {
        lines: {
          show: true
        }
      },
      yaxis: {
        lines: {
          show: false
        }
      },
      padding: {
        top: -30,
        bottom: -10
      }
    },
    stroke: {
      width: 3
    },
    colors: [window.colors.solid.info],
    series: [
      {
        data: [document.getElementById("array0").value,document.getElementById("array1").value,document.getElementById("array2").value,document.getElementById("array3").value,document.getElementById("array4").value,document.getElementById("array5").value]
      }
    ],
    markers: {
      size: 2,
      colors: window.colors.solid.info,
      strokeColors: window.colors.solid.info,
      strokeWidth: 2,
      strokeOpacity: 1,
      strokeDashArray: 0,
      fillOpacity: 1,
      discrete: [
        {
          seriesIndex: 0,
          dataPointIndex: 5,
          fillColor: '#ffffff',
          strokeColor: window.colors.solid.info,
          size: 5
        }
      ],
      shape: 'circle',
      radius: 2,
      hover: {
        size: 3
      }
    },
    xaxis: {
      labels: {
        show: true,
        style: {
          fontSize: '0px'
        }
      },
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    yaxis: {
      show: false
    },
    tooltip: {
      x: {
        show: false
      }
    }
  };
  statisticsProfitChart = new ApexCharts($statisticsProfitChart, statisticsProfitChartOptions);
  statisticsProfitChart.render();
 

  //------------ Past 6 days earning Report Chart ------------
   
 
 
   

  //------------ Featured Ads Chart ------------
  //---------------------------------------------
  goalOverviewChartOptions = {
    chart: {
      height: 245,
      type: 'radialBar',
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        blur: 3,
        left: 1,
        top: 1,
        opacity: 0.1
      }
    },
    colors: [$goalStrokeColor2],
    plotOptions: {
      radialBar: {
        offsetY: -10,
        startAngle: -150,
        endAngle: 150,
        hollow: {
          size: '77%'
        },
        track: {
          background: $strokeColor,
          strokeWidth: '50%'
        },
        dataLabels: {
          name: {
            show: false
          },
          value: {
            color: $textHeadingColor,
            fontSize: '2.86rem',
            fontWeight: '600'
          }
        }
      }
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: 'horizontal',
        shadeIntensity: 0.5,
        gradientToColors: [window.colors.solid.success],
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100]
      }
    },
    series: [document.getElementById("featured_ad_percentage").value],

    stroke: {
      lineCap: 'round'
    },
    grid: {
      padding: {
        bottom: 30
      }
    }
  };
  goalOverviewChart = new ApexCharts($goalOverviewChart, goalOverviewChartOptions);
  goalOverviewChart.render();






// ==================================      ANALYTICS DASHBOARD JS          ================================  //




var $avgSessionStrokeColor2 = '#ebf0f7';
  var $textHeadingColor = '#5e5873';
  var $white = '#fff';
  var $strokeColor = '#ebe9f1';

  var $gainedChart = document.querySelector('#gained-chart');
  var $orderChart = document.querySelector('#order-chart');
   var $supportTrackerChart = document.querySelector('#support-trackers-chart');
 
  var gainedChartOptions;
  var orderChartOptions;
  var avgSessionsChartOptions;
  var supportTrackerChartOptions;
  var salesVisitChartOptions;

  var gainedChart;
  var orderChart;
  var avgSessionsChart;
  var supportTrackerChart;
  var salesVisitChart;
  



  // Subscribed Gained Chart
  // ----------------------------------

  gainedChartOptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      }
    },
    colors: [window.colors.solid.primary],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [
      {
        name: 'Ad Published',
        data: [document.getElementById("last_week").value,document.getElementById("this_week").value]
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: [
      {
        y: 0,
        offsetX: 0,
        offsetY: 0,
        padding: { left: 0, right: 0 }
      }
    ],
    tooltip: {
      x: { show: false }
    }
  };
  gainedChart = new ApexCharts($gainedChart, gainedChartOptions);
  gainedChart.render();




  // Order Received Chart
  // ----------------------------------

  orderChartOptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      }
    },
    colors: [window.colors.solid.warning],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [
      {
        name: 'Users',
        data: [document.getElementById("last_week").value,document.getElementById("this_week").value]
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: [
      {
        y: 0,
        offsetX: 0,
        offsetY: 0,
        padding: { left: 0, right: 0 }
      }
    ],
    tooltip: {
      x: { show: false }
    }
  };
  orderChart = new ApexCharts($orderChart, orderChartOptions);
  orderChart.render();
 

  // Support Tracker Chart
  // -----------------------------
  supportTrackerChartOptions = {
    chart: {
      height: 270,
      type: 'radialBar'
    },
    plotOptions: {
      radialBar: {
        size: 150,
        offsetY: 20,
        startAngle: -150,
        endAngle: 150,
        hollow: {
          size: '65%'
        },
        track: {
          background: $white,
          strokeWidth: '100%'
        },
        dataLabels: {
          name: {
            offsetY: -5,
            color: $textHeadingColor,
            fontSize: '1rem'
          },
          value: {
            offsetY: 15,
            color: $textHeadingColor,
            fontSize: '1.714rem'
          }
        }
      }
    },
    colors: [window.colors.solid.danger],
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: 'horizontal',
        shadeIntensity: 0.5,
        gradientToColors: [window.colors.solid.primary],
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100]
      }
    },
    stroke: {
      dashArray: 8
    },
    series: [document.getElementById("live_ads_percentage").value],
    labels: ['Live AD"S ']
  };
  supportTrackerChart = new ApexCharts($supportTrackerChart, supportTrackerChartOptions);
  supportTrackerChart.render();

   














});


  </script>

@endsection
