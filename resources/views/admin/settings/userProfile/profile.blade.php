@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-ecommerce-details.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/swiper.min.css')}}">
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
                        <h2 class="content-header-title float-left mb-0">Account Settings</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                               
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active"> Account Settings
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
            <!-- account setting page -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-2 mb-2 mb-md-0">
                       
                    </div>
                    <!--/ left menu section -->

                    <!-- right content section -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- general tab -->
                                  
                                        <!-- form -->
                                        <form class="validate-form mt-2" action="{{route('admin.profile.updated')}}" method="POST">
                                            <div class="row">
                                                @csrf
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-name">Name</label>
                                                        <input type="text" class="form-control" id="account-name" name="name" placeholder="Name" value="{{auth()->user()->name}}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="{{auth()->user()->email}}" />
                                                    </div>
                                                </div>
                                               
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                </div>
                            </div>
                        </div>
                                    <!--/ general tab -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">
                                 
                                        <!-- form -->
                                        <form class="validate-form" action="{{route('admin.password.update')}}" method="POST" >
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-old-password">Current Password</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control" id="account-old-password" name="current_password" placeholder="Old Password" />
                                                          
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        @error('current_password')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                      @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-new-password">New Password</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" id="account-new-password" name="password" class="form-control" placeholder="New Password" />
                                                          
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('password')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                      @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-retype-new-password">Retype New Password</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control" id="account-retype-new-password" name="password_confirmation" placeholder="New Password" />
                                                           
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                            </div>
                                                        </div>
                                                        @error('password')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                      @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">
                                    <!-- form -->
                                        <form class="validate-form" action="{{route('admin.detailprofile.update')}}" method="POST" enctype="multipart/form-data"> 
                                            @csrf
                                        <div class="row">
                                                  <!-- header media -->
                                          <div class="media">
                                            <a href="javascript:void(0);" class="mr-25">
                                                @if (auth()->user()->userDetail==null)
                                                <img src="{{asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                @else
                                                <img src="{{asset('images/users/'.auth()->user()->userDetail->avatar)}}" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                @endif
                                             </a>
                                            <!-- upload and reset button -->
                                             <div class="media-body mt-75 ml-1">
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                <input type="file" id="account-upload" hidden accept="image/*" name="avatar" />
                                              
                                                <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                               </div>
                                            <!--/ upload and reset button -->
                                             </div>
                                        <!--/ header media -->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="accountTextarea">Address</label>
                                                        <textarea class="form-control" id="accountTextarea" rows="4" placeholder="Your Bio data here..." name="address"><?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->address :"";?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-birth-date">Birth date</label>
                                                        <input type="date" class="form-control flatpickr" placeholder="Birth date" id="account-birth-date" name="dob" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->dob :"";?>" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="accountSelect">Country</label>
                                                        <input type="text" class="form-control flatpickr" placeholder="Country" id="account-birth-date" name="country" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->country :"";?>" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-website">Dealing Name</label>
                                                        <input type="text" class="form-control" name="dealing_name" id="account-website" placeholder="dealing name" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->dealing_name :"";?>" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-phone">Phone</label>
                                                        <input type="text" class="form-control" id="account-phone" placeholder="Phone number " name="phone" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->phone :"";?>" name="phone"  />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-phone">City</label>
                                                            <input type="text" class="form-control" id="account-phone" placeholder="city" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->city :"";?>" name="city"  />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-phone">State</label>
                                                            <input type="text" class="form-control" id="account-phone" placeholder="state" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->state :"";?>" name="state"  />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-phone">Gender</label>
                                                            <input type="text" class="form-control" id="account-phone" placeholder="gender" value="<?php echo(auth()->user()->userDetail!=null) ? auth()->user()->userDetail->gender :"";?>" name="gender"  />
                                                        </div>
                                                    </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mt-1 mr-1">Save changes</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                  
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ right content section -->
                </div>
            </section>
            <!-- / account setting page -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('scripts')
<script src="{{asset('backend/app-assets/js/scripts/pages/app-ecommerce-details.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

@endsection