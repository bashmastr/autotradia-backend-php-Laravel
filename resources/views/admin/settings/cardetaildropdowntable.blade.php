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
                        <h2 class="content-header-title float-left mb-0">Add New Car: Make, Model & Year</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Car Dropdown
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{route('admin.cardetaildropdown')}}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle">Add New</a>
                        
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
                                        <th>Make</th>
                                        <th>Models</th>
                                        <th>Years</th>
                                        <th>Variations</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @if(count($details)> 0)
                                  
                                   @foreach ($details as $key=>$detail)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$detail->make}}</td>
                                    <td>{{$detail->model}}</td>
                                    
                                    <td>{{$detail->year}}</td>

                                    <td>{{$detail->variations ? : "no variations"}}</td>


                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('admin.cardetaildropdown.edit',['id'=>$detail->id])}}">
                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                               
                                                <form action="{{route('admin.cardetaildropdown.delete',['id'=>$detail->id])}}" method="POST">
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
                  
                          
              
                        @if(count($details)=== 0) 
                                 <br> 
                                 <h4 style="padding-left: 30px">  There is no data yet.    </h4>
                                  <br>
                                 
                                 @endif

                    </div>
                </div>
            </div>

                         
            <!-- Hoverable rows end -->


           

        </div>
    </div>
</div>
@endsection