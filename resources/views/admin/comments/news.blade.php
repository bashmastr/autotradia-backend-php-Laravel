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
                        <h2 class="content-header-title float-left mb-0">News Comments</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">News Comments
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
                                        <!-- <th>Image</th> -->
                                        <th>User Name</th>
                                        <th>News </th>
                                        <th>Status</th>
                                        <th>comments</th>
                                        <th>comment date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @if(count($newcomments) > 0 )
                                <tbody>
                                  
                                   @foreach ($newcomments as $key=>$news)
                                   <tr>
                                    <td>{{$key+1}}</td>
                          
                                    <td>{{$news->user->name}}</td>
                                    <td>{{$news->news->name}}</td>
                              
                                    @if ($news->status=='1')
                                    <td> <a class="dropdown-item" href="{{route('admin.news-comments.status',['id'=>$news->id])}}" class="btn btn-dark">
                                    
                                     <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                     </a></td>
                                     @else
                                       <td> <a class="dropdown-item" href="{{route('admin.news-comments.status',['id'=>$news->id])}}" class="btn btn-dark">
                                   
                                     <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                     </a></td>
                                     @endif
                                    
                                    <td>{{$news->comment}}</td>
                                    <td>{{$news->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.news-comments.delete',['id'=>$news->id])}}"   
                                            onclick="return confirm('Do you want delete this comment?')">
                                         <i data-feather="trash" class="mr-50"></i>
                                          <span>Delete</span> 
                                        </a> 
                                            
                                    </td>
                                    </tr>

                                    @endforeach
                                    @endif
                                </tbody>
                             
                             
 
                                
                            
 
                            </table>
                      
                        </div>

                        
                                    @if(count($newcomments)=== 0) 
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
                <div class="col-md-5"> {{$newcomments->links()}}</div>
            </div>
           

        </div>
    </div>
</div>
@endsection