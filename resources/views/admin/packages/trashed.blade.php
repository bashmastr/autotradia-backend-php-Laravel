@extends('admin.layouts.master')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Trashed Packages List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Trashed Packages list
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="content-body">
          
            <!-- Hoverable rows start -->
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                       
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Maximum Ads</th>
                                        <th>Total Orders</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                
                                @if(count($packages) > 0 )
                                <tbody>
                                 
                                   @foreach ($packages as $key=>$package)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$package->name}}</td>
                                    <td>{{$package->price}} </td>
                                    <td>{{$package->max_ads}} </td>
                                    <td>0 </td>
                                    <td>
                                    @if($package->status==1)
                                          <span class="badge badge-pill badge-light-success mr-1">  Active </span>
                                    @else  
                                    <span class="badge badge-pill badge-light-danger mr-1">  Disabled </span>
                                    @endif
                                   </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('admin.package.restore',['id'=>$package->id])}}">
                                                <i data-feather="refresh-ccw" class="mr-50"></i>
                                                    <span>Restore</span>
                                                </a>
                                               
                                                <form action="{{route('admin.package.forceDelete',['id'=>$package->id])}}" method="POST">
                                                    @csrf
                                                    <a   class="dropdown-item" onclick="return confirm('Do you want delete this category?')">
                                                  <button  style="background: none; border: none; color: inherit; margin-left: -6px;"  type="submit"  >      <i data-feather="trash" class="mr-50"></i>
                                                      <span>Delete</span> 
                                                     
                                                        
                                                    </form>
                                                    </button>
                                                    </a> 
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                              
                                   @endforeach
                                   @endif
                                </tbody>
                            </table>
                        </div>

                        @if(count($packages)=== 0) 
                                 <br> 
                                  <h4 style="padding-left: 30px">  There is no data yet.    </h4>
                                  <br>
                                 
                                 @endif
                    </div>
                </div>
            </div>
            <!-- Hoverable rows end -->

            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5"> {{$packages->links()}}</div>
            </div>

           

        </div>
    </div>
</div>
@endsection