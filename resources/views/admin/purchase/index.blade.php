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
                        <h2 class="content-header-title float-left mb-0">Purchase List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Purchase's list
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
                                        <th>User Name</th>
                                        <th>Package Name</th>
                                        <th>ad_used</th>
                                        <th>Status</th>
                                        <th>Purchase date</th>
                                        <th>expiry date</th>
                                       
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                @if(count($purchases) > 0 )



                                <tbody>
                                   @foreach ($purchases as $key=>$ad)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$ad->user->name}}</td>
                                    <td>{{$ad->package->name}}</td>
                                    <td>{{$ad->ad_used}}</td>

                                    @if ($ad->status=='1')
                                    <td>
                                     <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                    </td>
                                     @else
                                    <td>
                                     <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                    </td>
                                     @endif

                                     <td> {{$ad->created_at}} </td> 
                                    <td>  <span class="badge badge-pill badge-light-danger mr-1"> {{$ad->expiry_date}} </span></td>
                                    <td>

                                                <a class="" href="{{route('admin.purchase.view',['id'=>$ad->id])}}">
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    <span>View</span>
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
                        @if(count($purchases)=== 0) 
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
                <div class="col-md-5"> {{$purchases->links()}}</div>
            </div>

        </div>
    </div>
</div>
@endsection
