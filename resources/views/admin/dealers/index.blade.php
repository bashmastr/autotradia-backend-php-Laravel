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
                        <h2 class="content-header-title float-left mb-0">Trusted Dealers List </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Trusted Dealers list
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
                                        <th>Image</th>
                                        <th>Dealing Name</th>
                                        <th>Email</th>

                                        <th>Phone</th>
                                        <th>Status (Change on Click)</th>
                                    
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                @if(count($dealers)> 0)
                                <tbody>
                                    @foreach ($dealers as $key=>$dealer)
                                    <tr>
                                        <td>{{$key+1}}</td>

                                        @if ($dealer->userDetail!=null)
                                        <td>
                                            <div class="avatar-group">

                                                <div data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-placement="top" title="" class="avatar"
                                                    data-original-title="{{$dealer->name}}">
                                                    <img src="{{asset('images/avatar/'.$dealer->userDetail->avatar)}}"
                                                        alt="{{$dealer->name}}" height="80" width="80" />
                                                </div>
                                            </div>
                                        </td>

                                        @else

                                        <td>Not updated yet</td>
                                        @endif

                                        <td>{{$dealer->userDetail->dealing_name}}</td>
                                        <td>{{$dealer->email}}</td>


                                        @if ($dealer->userDetail !=null)

                                        <td>{{$dealer->userDetail->phone}}</td>

                                        @else


                                        <td>Not updated yet</td>

                                        @endif

                                        @if ($dealer->status=='1')
                                        <td> <a class="dropdown-item"
                                                href="{{route('admin.user.status',['id'=>$dealer->id])}}"
                                                class="btn btn-dark">

                                                <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                            </a></td>
                                        @else
                                        <td> <a class="dropdown-item"
                                                href="{{route('admin.user.status',['id'=>$dealer->id])}}"
                                                class="btn btn-dark">

                                                <span class="badge badge-pill badge-light-danger mr-1">disabled</span>
                                            </a></td>
                                        @endif

                                       
                                        <td>


                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{route('dealers.show',['dealer'=>$dealer->id])}}">
                                                        <i data-feather="eye" class="mr-50"></i>
                                                        <span>Show Detail</span>
                                                    </a>



                                                    <form action="{{route('users.destroy',['user'=>$dealer->id])}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a class="dropdown-item"
                                                            onclick="return confirm('Do you want delete this category?')">
                                                            <button
                                                                style="background: none; border: none; color: inherit; margin-left: -6px;"
                                                                type="submit"> <i data-feather="trash"
                                                                    class="mr-50"></i>
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



                        @if(count($dealers)=== 0)
                        <br>
                        <h4 style="padding-left: 30px"> There is no data yet. </h4>
                        <br>

                        @endif

                    </div>
                </div>
            </div>
            <!-- Hoverable rows end -->

            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5"> {{$dealers->links()}}</div>
            </div>

        </div>
    </div>
</div>
@endsection
