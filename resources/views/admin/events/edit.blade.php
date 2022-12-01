@extends('admin.layouts.master')

@section('content')
     <!-- BEGIN: Content-->
     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Event</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New Event</a>
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                       
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Event Form</h4>
                                </div>
                                <div class="card-body">
                                    <form class="" action="{{route('event.update',['event'=>$event->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Event Name</label>
                                                        
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" class="form-control" name="name" value="{{$event->name}}" />
                                                           
                                                        </div>
                                                        @error('name')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="email-icon">Event Category</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="file"></i></span>
                                                            </div>
                                                           
                                                            <select name="eventcat_id" class="form-control">
                                                                @foreach ($eventcategory as $category)
                                                                    <option value="{{$category->id}}" <?php echo($category->id==$event->eventcat_id)?"selected":''; ?>>{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        @error('image')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="email-icon">Event image</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-group">
                                                           <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile"  name="image"/>
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        @error('image')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Description</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                            <textarea class="form-control" id="label-textarea" rows="3"  name="description">{{$event->description}}</textarea>
                                                           
                                                            @error('description')
                                                            <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Event Location</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-label-group">
                                                              <input type="text" name="location" class="form-control" value="{{$event->location}}"/>
                                                             </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="contact-icon">Event Date</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="date" id="fp-default" class="form-control " value="{{$event->event_date}}" name="event_date" />
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1"> <label for="contact-icon">Event Time</label></div>
                                                    <div class="col-sm-4">
                                                        <div class="form-label-group">
                                                            <input type="time" id="fp-time" class="form-control" value="{{$event->event_time}}" name="event_time"  />
                                                            
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->

             

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
