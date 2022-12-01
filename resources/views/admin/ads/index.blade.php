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
                        <h2 class="content-header-title float-left mb-0">Ads List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Ad's list
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{route('ads.create')}}" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle">Add New</a>
                        
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Available City</th>
                                        <th>Featured</th>
                                        <th>Status (Change on click)</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                
                                @if(count($ads) > 0 )


                                <tbody>
                                   @foreach ($ads as $key=>$ad)
                                   <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <div class="avatar-group">
                                           
                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar" data-original-title="{{$ad->name}}">
                                                <img src="{{asset('images/car-ads/'.$ad->featured_image)}}" alt="{{$ad->name}}" height="80" width="80" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$ad->name}}</td>
                                    <td>{{$ad->available_city}}</td>
                                    <td>

                                    <?php $featured_at= DB::table('featured_ad')->where('ad_id', $ad->id)->first(); ?> 
                                  
                                    @if($featured_at !=null)    
                                          Yes      
                                    @else   
                                            No
                                    @endif
                                    
                                    </td>
                                    @if ($ad->status=='1')
                                    <td> <a class="dropdown-item" href="{{route('admin.ad.status',['id'=>$ad->id])}}" class="btn btn-dark">
                                    
                                     <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                     </a></td>
                                     @else
                                       <td> <a class="dropdown-item" href="{{route('admin.ad.status',['id'=>$ad->id])}}" class="btn btn-dark">
                                   
                                     <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                     </a></td>
                                     @endif
                                    <td>{{$ad->created_at}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('ads.edit',['ad'=>$ad->id])}}">
                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" href="{{route('ads.show',['ad'=>$ad->id])}}">
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    <span>View</span>
                                                </a>
                                                <form action="{{route('ads.destroy',['ad'=>$ad->id])}}" method="POST">
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
                                   @endif
                                </tbody>
                            </table>
                        </div>

                        @if(count($ads)=== 0) 
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
                <div class="col-md-5"> {{$ads->links()}}</div>
            </div>

        </div>
    </div>
</div>
@endsection