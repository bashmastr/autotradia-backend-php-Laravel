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
                        <h2 class="content-header-title float-left mb-0">Hire Cars Requests List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Hire car requests list
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
                                   
                                        <th>Phone #</th>
                                        <th>City</th>
                                        <th>Total passengers</th>
                                        <th>Request Car</th>
                                        <th>Pickup Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                @if(count($hiredcars) > 0 )


                                <tbody>
                                 
                                   @foreach ($hiredcars as $key=>$hiredcar)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$hiredcar->fullname}}</td>
                                    <td>{{$hiredcar->phone}}</td>
                                    <td>{{$hiredcar->city}}</td>
                                    <td>{{$hiredcar->total_passengers}}</td>
                                    <td>

                                  
                                    {{$hiredcar->created_at}}
                                   
                                    
                                    
                                    
                                    </td>
                                    <td>{{$hiredcar->pickup_date}}</td>
                                    <td>

                                    <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                    <div class="dropdown-menu">
                                            <a  class="dropdown-item" href="{{route('admin.hired-car-details',['id'=>$hiredcar->id])}}">
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    <span>Show Detail</span>
                                                </a>
                                               
                                                <form action="{{route('admin.hired-car-details',['id'=>$hiredcar->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="dropdown-item" >
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>Delete</span>
                                                    </a>

                                                </form>
                                     </div>


          


                                       
                                 
                                     </div>

 
                                    </td>
                                </tr>
                              
                                   @endforeach
                                   @endif
                                </tbody>
                            </table>
                        </div>

                        @if(count($hiredcars)=== 0) 
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
                <div class="col-md-5"> {{$hiredcars->links()}}</div>
            </div>

        </div>
    </div>
</div>
@endsection