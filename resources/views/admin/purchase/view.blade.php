@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-ecommerce-details.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-invoice.css')}}">
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <!-- Invoice -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-preview-card">
                                <div class="card-body invoice-padding pb-0">
                                    <!-- Header starts -->
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                                    <defs>
                                                        <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                                            <stop stop-color="#000000" offset="0%"></stop>
                                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="invoice-linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-400.000000, -178.000000)">
                                                            <g transform="translate(400.000000, 178.000000)">
                                                                <path class="text-primary" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                                                <path d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#invoice-linearGradient-1)" opacity="0.2"></path>
                                                                <polygon fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                                <polygon fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                                <polygon fill="url(#invoice-linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <h3 class="text-primary invoice-logo">Autotradia</h3>
                                            </div>
                                            <p class="card-text mb-25">Office 149, 450 South Brand Brooklyn</p>
                                            <p class="card-text mb-25">San Diego County, CA 91905, USA</p>
                                            <p class="card-text mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
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
                                    <!-- Header ends -->
                                </div>

                                <hr class="invoice-spacing" />

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">

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
                                        <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                            <h6 class="mb-2">Payee Details:</h6>
                                            <table>
                                                <tbody>
                                                  
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
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Invoice Description starts -->
                                <div class="table-responsive">
                                    <table class="table">
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
                                                   <span class="font-weight-bold">Active</span>
                                                   @else
                                                   <span class="font-weight-bold">No</span>
                                                   @endif
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                    <hr>
                                <div class="card-body invoice-padding pb-0">
                                    <div class="row invoice-sales-total-wrapper">
                                        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                            <p class="card-text mb-0">
                                                <span class="font-weight-bold"></span> <span class="ml-75"></span>
                                            </p>
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
                                                     <p class="invoice-total-amount">Rs. <?php echo ((int)$purchase->package->price) - ((int)$purchase->package->sale_price) ?> </p>
                                                     @else
                                                     <p class="invoice-total-amount">Rs. 0</p>
                                                     @endif
                                                </div>

                                                <hr class="my-50" />
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Total:</p>
                                                    @if ($purchase->package->sale_price!=null)
                                                    <p class="invoice-total-amount">Rs. {{$purchase->package->sale_price ? : "0"}}</p>
                                                    @else
                                                    <p class="invoice-total-amount">Rs. {{ $purchase->package->price ? : "0"}}</p>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Description ends -->

                                <hr class="invoice-spacing" />

                                <!-- Invoice Note starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="font-weight-bold">Note:</span>
                                            <span>The invoice is generated by Auto Tradia.com. Thank you for using our services! </span></div>
                                    </div>
                                </div>
                                <!-- Invoice Note ends -->
                            </div>
                        </div>
                        <!-- /Invoice -->

                        <!-- Invoice Actions -->
                        <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary btn-block mb-75" data-toggle="modal" data-target="#send-invoice-sidebar">
                                      Payment Successfully Done
                                    </button>

                                    <a class="btn btn-outline-secondary btn-block mb-75" href="{{route('admin.purchase.print',['id'=>$purchase->id])}}" target="_blank">
                                        Print
                                    </a>

                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Actions -->
                    </div>
                </section>



            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('scripts')

<script src="{{asset('backend/app-assets/js/scripts/pages/app-invoice.js')}}"></script>

@endsection
