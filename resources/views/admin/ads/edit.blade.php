@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
@endsection
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
                        <h2 class="content-header-title float-left mb-0">Edit Ad</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Update Ad Details</a>
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

                    <div class="col-xl-9 col-md-8 col-12  offset-md-1">
                        <form action="{{route('ads.update',['ad'=>$ad->id])}}" method="POST"
                            enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Ad Form</h4>
                                </div>

                                <div class="card-body">
                                    @csrf 
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Ad Title</label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="name" value="{{$ad->name}}"  required/>

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
                                                    <label for="fname-icon">Ad Price</label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="price" value="{{$ad->price}}" required />

                                                    </div>
                                                    @error('price')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="email-icon">Ad Feature Image</label><br>
                                                    <small>(Required)</small>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="image"></i></span>
                                                        </div>


                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="featured_image" id="customFile" accept="image/*">
                                                            <label class="custom-file-label"
                                                                for="customFile">{{$ad->featured_image}}</label>
                                                        </div>




                                                    </div>
                                                    @error('featured_image')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="contact-icon">Description</label><br>
                                                    <small>(Required)</small>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-label-group">
                                                        <textarea class="form-control" id="label-textarea" rows="3"
                                                            name="description" required>{{$ad->description}}</textarea>

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
                                                    <label for="contact-icon">Car Features</label><br>
                                                    <small>(Required)</small>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-label-group">
                                                        <div class="row">
                                                            @foreach ($carfeatures as $key=>$carfeature)
                                                            <div class="col-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="{{$key}}" name="car_features[]"
                                                                        value="{{$carfeature->id}}"
                                                                        <?php echo in_array($carfeature->id, $addcarfeatures) ? "checked" : ""; ?> />
                                                                    <label class="custom-control-label"
                                                                        for="{{$key}}">{{$carfeature->name}}</label>

                                                                </div>
                                                                <p></p>
                                                            </div>

                                                            @endforeach

                                                        </div>
                                                        @error('car_features')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="contact-icon">Phone</label><br>
                                                <small>(Required)</small>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-label-group">
                                                        <input type="number" min="1" class="form-control" id="label-textarea"  value="{{$ad->phone}}" name="phone" required>
                                                      
                                                        @error('phone')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="contact-icon">Secondary Phone</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-label-group">
                                                        <input type="number" min="1" class="form-control" id="label-textarea"  value="{{$ad->secondary_phone}}" name="secondary_phone">
                                                      
                                                        @error('secondary_phone')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Gallery</h4>
                                </div>

                                <div class="card-body">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="email-icon">Ad Gallery</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="image"></i></span>
                                                        </div>


                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="gallery_images[]" id="customFile" accept="image/*"
                                                                multiple>
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                Multiple Images</label>
                                                        </div>





                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Categories</h4>
                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="email-icon">Ad Category</label><br>
                                                    <small>(Required)</small>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">

                                                        <select name="category_id" class=" form-control"
                                                        required>

                                                            @foreach ($categories as $key=>$category)

                                                            <option value="{{$category->id}}"
                                                                <?php echo ($category->id==$ad->category_id) ? "selected" : ""; ?>>
                                                                {{$category->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>





                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Car Detail</h4>
                                </div>

                                <div class="card-body">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car model</label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="car_model" value="{{$ad->carDetails->car_model}}" required />

                                                    </div>
                                                    @error('car_model')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Company </label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="company" value="{{$ad->carDetails->company}}" required />

                                                    </div>
                                                    @error('company')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car color </label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="car_color" value="{{$ad->carDetails->car_color}}" required/>

                                                    </div>
                                                    @error('car_color')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Available City </label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="available_city" value="{{$ad->available_city}}"  required />
                                                       
                                                    </div>
                                                    @error('available_city')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Mileage</label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="milage" value="{{$ad->carDetails->milage}}" required/>

                                                    </div>
                                                    @error('milage')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Condition</label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="condition" value="{{$ad->carDetails->condition}}" required />

                                                    </div>
                                                    @error('condition')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Transmission </label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <select name="transmission" class="form-control" required >
                                                            <option value="auto"
                                                                <?php echo($ad->carDetails->transmission=='auto')?"checked":""?>>
                                                                Automatic</option>
                                                            <option value="manual"
                                                                <?php echo($ad->carDetails->transmission=='manual')?"checked":""?>>
                                                                Manual</option>
                                                        </select>

                                                    </div>
                                                    @error('transmission')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Owner</label><br>
                                                    <small>(Required)</small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <select name="owner" class="form-control" required>
                                                        <option value="">Select Option</option>

                                                            <option value="1" <?php echo($ad->carDetails->owner=='1')?"selected":""?>>1st Owner</option>
                                                            <option value="2" <?php echo($ad->carDetails->owner=='2')?"selected":""?>>2nd Owner</option>
                                                            <option value="3" <?php echo($ad->carDetails->owner=='3')?"selected":""?>>3rd Owner</option>
                                                            <option value="4" <?php echo($ad->carDetails->owner=='4')?"selected":""?>>4rth Owner</option>
                                                            <option value="5" <?php echo($ad->carDetails->owner=='5')?"selected":""?>>5th Owner</option>
                                                            <option value="0" <?php echo($ad->carDetails->owner=='0')?"selected":""?>>Not Sure</option>


                                                        </select>
                                                       
                                                    </div>
                                                    @error('transmission')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car engine </label><br>
                                                    <small>(Required)</small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="engine" value="{{$ad->carDetails->engine}}" required />

                                                    </div>
                                                    @error('engine')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car year </label> <br>
                                                    <small> (Required) </small>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="year" value="{{$ad->carDetails->year}}" required />
                                                       
                                                    </div>
                                                    @error('year')
                                                    <div style="color:#fff"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Fuel Type </label>
                                                    
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control" name="fuel_type" value="{{$ad->carDetails->fuel_type}}" required />
                                                       
                                                    </div>
                                                    @error('fuel_type')
                                                    <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
               
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="fname-icon">Car Registeration city </label> <br>
                                                    <small> (Required) </small>

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    data-feather="list"></i></span>
                                                        </div>
                                                        <input type="text" id="fname-icon" class="form-control"
                                                            name="registeration_city"
                                                            value="{{$ad->carDetails->registeration_city}}" required />

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                   

                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-9 offset-sm-3">
                                                        <button type="submit" class="btn btn-primary mr-1">Update Details</button>
                
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         
                        </form>


                    </div>


                </div>
            </section>
            <!-- Basic Horizontal form layout section end -->




        </div>



    </div>





</div>
<!-- END: Content-->


@endsection
@section('scripts')
<script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('backend/app-assets/js/scripts/forms/form-select2.js')}}"></script>
@endsection
