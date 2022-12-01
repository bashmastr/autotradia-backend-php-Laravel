@extends('admin.layouts.master')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/page-pricing.css')}}">   
@endsection
@section('content')
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Packages List</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Packages list
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <a href="{{route('packages.create')}}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle">Add New</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <section id="pricing-plan">
                <!-- title text and switch button -->
               
                <!--/ title text and switch button -->

                <!-- pricing plan cards -->
                <div class="row pricing-card">
                    <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                        <div class="row">
                           
                            @foreach ($packages as $key=>$package)
                              <!-- enterprise plan -->
                            <div class="col-12 col-md-4">
                                <div class="card enterprise-pricing text-center">
                                    <div class="card-body">
                                        <img src="{{asset('images/packages/'.$package->picture)}}" class="mb-2" alt="svg img" />
                                        <h3>{{$package->name}}</h3>
                                        <p class="card-text">{{$package->description}}</p>
                                        <div class="annual-plan">
                                            <div class="plan-price mt-2">
                                                <sup class="font-medium-1 font-weight-bold text-primary">Rs.</sup>
                                                <span class="pricing-enterprise-value font-weight-bolder text-primary">{{$package->price}}</span>
                                                <sub class="pricing-duration text-body font-medium-1 font-weight-bold">/ {{$package->durations}} days</sub>
                                            </div>
                                            <small class="annual-pricing d-none text-muted"></small>
                                        </div>
                                        <ul class="list-group list-group-circle text-left">
                                            <li class="list-group-item">Max Ads Allowed {{$package->max_ads}}</li>
                                            <li class="list-group-item">Durations {{$package->durations}} days</li>
                                            <li class="list-group-item">All ads will be unfeatured when expired</li>
                                            <li class="list-group-item">Required online payment</li>
                                            @if ($package->status=='1')
                                            <li class="list-group-item">Status <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                            </li>
                                             @else
                                             <li class="list-group-item">Status <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                             </li>
                                              @endif
                                        </ul>
                                      
                                        <a class="btn btn-block btn-outline-primary mt-2" href="{{route('packages.edit',['package'=>$package->id])}}" class="btn btn-dark">
                                            Update
                                        </a>
                                        <a class="btn btn-block btn-outline-warning mt-2" href="{{route('admin.package.status',['id'=>$package->id])}}" class="btn btn-dark" onclick="return confirm('Do you want change the status of this package?')">
                                            Change Status
                                        </a>
                                      
                                        <form action="{{route('packages.destroy',['package'=>$package->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                           <button class="btn btn-block btn-outline-danger mt-2"  onclick="return confirm('Do you want delete this package?')" type="submit">Delete</button>
                                          
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--/ enterprise plan -->
                         @endforeach
                        </div>
                    </div>
                </div>
                <!--/ pricing plan cards -->

               
               
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
@section('scripts')
<script src="{{asset('backend/app-assets/js/scripts/pages/page-pricing.js')}}"></script>
@endsection