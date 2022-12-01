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
                        <h2 class="content-header-title float-left mb-0">Legal Pages</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Legal Page
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{route('legal-pages.create')}}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle">Add New</a>
                        
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
                                        <th>Slug</th>
                                        <th>Status</th>
                                         <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>


                                @if(count($legalpages) > 0 )
                                <tbody>
                                 
                                   @foreach ($legalpages as $key=>$page)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$page->name}}</td>
                                    <td>{{$page->slug}}</td>
                                    @if ($page->status=='1')
                                    <td> <a class="dropdown-item" href="{{route('admin.legal.status',['id'=>$page->id])}}" class="btn btn-dark">
                                    
                                     <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                     </a></td>
                                     @else
                                       <td> <a class="dropdown-item" href="{{route('admin.legal.status',['id'=>$page->id])}}" class="btn btn-dark">
                                   
                                     <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                     </a></td>
                                     @endif
                                    <td>
                                       
                                            <a href="{{route('legal-pages.edit',['legal_page'=>$page->id])}}">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                    </td>
                                    <td>
                                            <form action="{{route('legal-pages.destroy',['legal_page'=>$page->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="" onclick="return confirm('Please note that if this category has sub category, the sub category will also be deleted. Are you Sure?')">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </form>
                                          
                                    </td>
                                </tr>
                              
                                   @endforeach
                                   @endif
                                </tbody>
                            </table>
                           
                        </div>

                        @if(count($legalpages)=== 0) 
                                 <br> 
                                 <h4 style="padding-left: 30px">  There is no data yet.    </h4>

                                  <br>
                                 
                                 @endif


                    </div>
                </div>
            </div>
            <!-- Hoverable rows end -->
            {{$legalpages->links()}}

           

        </div>
    </div>
</div>
@endsection