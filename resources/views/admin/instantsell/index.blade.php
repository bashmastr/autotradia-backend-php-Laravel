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
                        <h2 class="content-header-title float-left mb-0">Instant Sell Car Requests List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Instant sell car request list
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    {{-- <div class="dropdown">
                        <a href="{{route('news.create')}}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle">Add New</a>
                        
                    </div> --}}
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
                                        <th>email</th>
                                        <th>Phone #</th>
                                        <th>City</th>
                                        <th>Request Date</th>
                                       
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                @if(count($instantsellcars) > 0 )



                                <tbody>
                                 
                                   @foreach ($instantsellcars as $key=>$sellcar)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$sellcar->fullname}}</td>
                                    <td>{{$sellcar->email}}</td>
                                    <td>{{$sellcar->phone}}</td>
                                    <td>{{$sellcar->city}}</td>
                                    <td>{{$sellcar->created_at}}</td>
                                    
                                    <td>
                                        <div >
                                            
                                            
                                              
                                                <a  href="{{route('admin.instant-sell-details',['id'=>$sellcar->id])}}">
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    <span>Show Detail</span>
                                                </a>
                                                
                                            </div>
                                        
                                    </td>
                                </tr>
                              
                                   @endforeach
                                   @endif
                                </tbody>
                            </table>
                        </div>

                        @if(count($instantsellcars)=== 0) 
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
                <div class="col-md-5"> {{$instantsellcars->links()}}</div>
            </div>


           

        </div>
    </div>
</div>
@endsection