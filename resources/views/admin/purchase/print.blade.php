<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Auto Tradia - Official Website</title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/bordered-layout.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">



    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/page-auth.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
      
    @yield('styles')
    @toastr_css
</head>


<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-invoice-print.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-invoice.css')}}">
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body" style="margin-right: 306px;">
            <div class="invoice-print p-3">
                <div class="d-flex justify-content-between flex-md-row flex-column pb-2">
                    <div>
                        <div class="d-flex mb-1">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h3 class="text-primary font-weight-bold ml-1">Autotradia</h3>
                        </div>
                        <p class="mb-25">Office 149, 450 South Brand Brooklyn</p>
                        <p class="mb-25">San Diego County, CA 91905, USA</p>
                        <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                    </div>
                         <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title">
                                                Invoice
                                                <span class="invoice-number">#{{$purchase->id}}</span>
                                            </h4>
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title">Purchased Date/Time:</p>
                                                <p class="invoice-date">{{$purchase->created_at}}</p>
                                            </div>
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title">Expiry Date/Time:</p>
                                                <p class="invoice-date">{{$purchase->expiry_date}}</p>
                                            </div>
                                        </div>
                </div>

                <hr class="my-2" />

                <div class="row pb-2">
                    <div class="col-sm-6">
                        @php $userdetail=$purchase->user->userDetail;@endphp
                        <h6 class="mb-2">Invoice To:</h6>
                        <h6 class="mb-25">{{$purchase->user->name}}</h6>
                        @if ($userdetail!=null)

                        <p class="card-text mb-25">{{$userdetail->address}},</p>
                        <p class="card-text mb-25">{{$userdetail->country}}, {{$userdetail->city}},{{$userdetail->state}}</p>
                        <p class="card-text mb-25">{{$userdetail->phone}},{{$userdetail->zip}}</p>
                        @else

                        @endif
                        <p class="card-text mb-0">{{$purchase->user->email}}</p>
                    </div>
                    <div class="col-sm-6 mt-sm-0 mt-2">
                        <h6 class="mb-1">Payment Details:</h6>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="pr-1">Total Due:</td>
                                    <td><strong>$12,110.55</strong></td>
                                </tr>
                                <tr>
                                    <td class="pr-1">Bank name:</td>
                                    <td>American Bank</td>
                                </tr>
                                <tr>
                                    <td class="pr-1">Country:</td>
                                    <td>United States</td>
                                </tr>
                                <tr>
                                    <td class="pr-1">IBAN:</td>
                                    <td>ETD95476213874685</td>
                                </tr>
                                <tr>
                                    <td class="pr-1">SWIFT code:</td>
                                    <td>BR91905</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="table-responsive mt-2">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th class="py-1">Package Name</th>
                                <th class="py-1">Price</th>
                                <th class="py-1">Durations</th>
                                <th class="py-1">Max ads</th>
                                <th class="py-1">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="py-1">
                                    <span class="font-weight-bold">{{$purchase->package->name}}</span>
                                </td>
                                <td class="py-1">
                                    <span class="font-weight-bold">{{$purchase->package->price}}</span>
                                </td>
                                <td class="py-1">
                                    <span class="font-weight-bold">{{$purchase->package->durations}}</span>
                                </td>
                                <td class="py-1">
                                    <span class="font-weight-bold">{{$purchase->package->max_ads}}</span>
                                </td>
                                <td class="py-1">
                                   @if ($purchase->package->status=='1')
                                   <span class="font-weight-bold">Yes</span>
                                   @else
                                   <span class="font-weight-bold">No</span>
                                   @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row invoice-sales-total-wrapper mt-3">
                    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                      
                    </div>
                    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                        <div class="invoice-total-wrapper">
                            <div class="invoice-total-item">
                                <p class="invoice-total-title">Subtotal:</p>
                                <p class="invoice-total-amount">Rs. {{$purchase->package->price}}</p>
                            </div>
                            <div class="invoice-total-item">
                                <p class="invoice-total-title">Discount:</p>
                                @if ($purchase->package->sale_price!=null)
                                <p class="invoice-total-amount">Rs. {{$purchase->package->price-$purchase->package->sale_price}}</p>
                                @else
                                <p class="invoice-total-amount">Rs. 0</p>
                                @endif
                            </div>

                            <hr class="my-50" />
                            <div class="invoice-total-item">
                                <p class="invoice-total-title">Total:</p>
                                @if ($purchase->package->sale_price!=null)
                                <p class="invoice-total-amount">Rs. {{$purchase->package->sale_price}}</p>
                                @else
                                <p class="invoice-total-amount">Rs. {{$purchase->package->price}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-2" />

                <div class="row">
                    <div class="col-12">
                        <span class="font-weight-bold">Note:</span>
                        <span>The invoice is generated by Auto Tradia.com. Thank you for using our services!</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

 
 
<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="#" target="_blank">Auto Tradia</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Crafted & Made with<i data-feather="heart"></i> By <a href="https://www.gap-dynamics.com/"> Gap Dynamics  </a></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js')}}"></script>

    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>



    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>

  
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
   


    <!-- END: Page Vendor JS-->

    
    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
    <!-- END: Page JS-->


    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    


    <script src="{{asset('backend/app-assets/js/scripts/pages/app-invoice-list.js')}}"></script> 
    <!-- END: Page JS-->


<script src="{{asset('backend/app-assets/js/scripts/pages/app-invoice-print.js')}}"></script>
<script src="{{asset('backend/app-assets/js/scripts/pages/app-invoice.js')}}"></script>
