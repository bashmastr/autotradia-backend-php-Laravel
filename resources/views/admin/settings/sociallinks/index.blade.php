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
                        <h2 class="content-header-title float-left mb-0">Social links List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Social links list
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{route('social-links.create')}}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle">Add New</a>
                        
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
                                        <th>Link</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($sociallinks as $key=>$sociallink)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$sociallink->name}}</td>
                                    <td>{{$sociallink->slug}}</td>
                                    
                                    <td>{{$sociallink->link}}</td>
                                    @if ($sociallink->status=='1')
                                    <td> <a class="dropdown-item" href="{{route('admin.sociallink.status',['id'=>$sociallink->id])}}" class="btn btn-dark">
                                    
                                     <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                     </a></td>
                                     @else
                                       <td> <a class="dropdown-item" href="{{route('admin.sociallink.status',['id'=>$sociallink->id])}}" class="btn btn-dark">
                                   
                                     <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                     </a></td>
                                     @endif
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('social-links.edit',['social_link'=>$sociallink->id])}}">
                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                               
                                                <form action="{{route('social-links.destroy',['social_link'=>$sociallink->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hoverable rows end -->


           

        </div>
    </div>
</div>
@endsection