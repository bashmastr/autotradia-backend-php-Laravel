@extends('admin.layouts.master')


<style type="text/css">


.bootstrap-tagsinput {
  background-color: transparent;
  border: 1px solid #404656;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  display: inline-block;
  padding: 4px 6px;
  color: #fff;
  vertical-align: middle;
  border-radius: 4px;
  width: 755px;
 
  line-height: 22px;
  cursor: text;
 
}
.bootstrap-tagsinput input {
  border: none;
  box-shadow: none;
  outline: none;
  background-color: transparent;
  padding: 0 6px;
  margin: 0;
  width: 755px;
  max-width: inherit;
  color:white;
}
.bootstrap-tagsinput.form-control input::-moz-placeholder {
  color: #777;
  opacity: 1;
}
.bootstrap-tagsinput.form-control input:-ms-input-placeholder {
  color: #777;
}
.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
  color: #777;
}
.bootstrap-tagsinput input:focus {
  border: none;
  box-shadow: none;
}
.bootstrap-tagsinput .tag {
  margin-right: 2px;
  color: white;
}
.bootstrap-tagsinput .tag [data-role="remove"] {
  margin-left: 8px;
  cursor: pointer;
}
.bootstrap-tagsinput .tag [data-role="remove"]:after {
  content: "x";
  padding: 0px 2px;
}
.bootstrap-tagsinput .tag [data-role="remove"]:hover {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
  
    .label-info{
        background-color: #17a2b8;

    }
    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,
        border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>



@section('content')
 
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
   
 




   <!-- BEGIN: Content-->
   <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"> Edit Car Options: Make, Model & Year</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Edit Car Dropdown</a>
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
                           <form class="" action="{{route('admin.cardetaildropdown.update',['id'=>$detail->id])}}" method="POST" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Update Car Dropdowns Form</h4>
                                        </div>
                                           
                                        <div class="card-body">
                                        @csrf
                                        <div class="row" >

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Make</label>
                                                        
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>
                                                            <input type="text" id="fname-icon" value="{{$detail->make}}" class="form-control" name="make" />
                                                           
                                                        </div>
                                                        @error('make')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12"  >
                                                <div class="form-group row"  >
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Models</label>
                                                        
                                                    </div>
                                                    <div class="col-sm-9" >
                                                        <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>


                                                            <input type="text"  value="{{$detail->model}}" name="models" id="fname-icon" class="form-control"   data-role="tagsinput" >
                                                         
                                                           
                                                        </div>
                                                        @error('models')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                     
                          
                                            
                                    
                                            <div class="col-12"  >
                                                <div class="form-group row"  >
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Years</label>
                                                        
                                                    </div>
                                                    <div class="col-sm-9" >
                                                        <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>


                                                            <input type="text"  value="{{$detail->year}}" name="years" id="fname-icon" class="form-control"  data-role="tagsinput" >
                                                         
                                                           
                                                        </div>
                                                        @error('years')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-12"  >
                                                <div class="form-group row"  >
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="fname-icon">Variations</label> <br>
                                                        <small> (Optional)</small>
                                                        
                                                    </div>
                                                    <div class="col-sm-9" >
                                                        <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text"><i data-feather="list"></i></span>
                                                            </div>


                                                            <input type="text"  name="variations" value="{{$detail->variations}}" id="fname-icon" class="form-control"  value="" data-role="tagsinput"   >
                                                         
                                                           
                                                        </div>
                                                        @error('variations')
                                                        <div style="color:red"> <strong>{{ $message }}</strong></div>   
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>





 

 
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
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

 