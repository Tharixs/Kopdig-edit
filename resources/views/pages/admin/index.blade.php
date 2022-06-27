@extends('layouts.app')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
    @endcomponent
    <div class="row">
        {{-- Widget --}}
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body bg-primary">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-light fw-medium  mb-0">
                                Total Anggota</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-3">
                        <div>
                            <h4 class="fs-22 fw-semibold text-light ff-secondary mb-4">4 Anggota
                            </h4>
                            <a href="#" class="text-light">24 Anggota </a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-img-primary rounded fs-2">
                                <i class="bx bx-user text-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body bg-primary">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-light fw-medium  mb-0">
                                Persetujuan</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-3">
                        <div>
                            <h4 class="fs-22 fw-semibold text-light ff-secondary mb-4">6 surat
                            </h4>
                            <a href="#" class="text-light">20 Surat </a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-img-primary rounded fs-2">
                                <i class="bx bx-envelope text-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body bg-primary">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-light fw-medium  mb-0">
                                Transaksi</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-3">
                        <div>
                            <h4 class="fs-22 fw-semibold text-light ff-secondary mb-4">5 Transaksi
                            </h4>
                            <a href="#" class="text-light">25 Transaksi </a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-img-primary rounded fs-2">
                                <i class="bx bx-credit-card text-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body bg-primary">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-light fw-medium  mb-0">
                                Unit Usaha</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-3">
                        <div>
                            <h4 class="fs-22 fw-semibold text-light ff-secondary mb-4">1 Usaha
                            </h4>
                            <a href="#" class="text-light">2 Unit Usaha </a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-img-primary rounded fs-2">
                                <i class="bx bx-shopping-bag text-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Barang/Transaksi Terbanyak</h4>
                    <div class="flex-shrink-0">

                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>

                                    <th scope="col">Customer</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Vendor</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">Alex Smith</div>
                                        </div>
                                    </td>
                                    <td>Clothes</td>
                                    <td>
                                        <span class="text-success">$109.00</span>
                                    </td>
                                    <td>Zoetic Fashion</td>
                                    <td>
                                        <span class="badge badge-soft-success">Paid</span>
                                    </td>
                                    <td>
                                        <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(61
                                                votes)</span></h5>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">Jansh Brown</div>
                                        </div>
                                    </td>
                                    <td>Kitchen Storage</td>
                                    <td>
                                        <span class="text-success">$149.00</span>
                                    </td>
                                    <td>Micro Design</td>
                                    <td>
                                        <span class="badge badge-soft-warning">Pending</span>
                                    </td>
                                    <td>
                                        <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(61
                                                votes)</span></h5>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">Ayaan Bowen</div>
                                        </div>
                                    </td>
                                    <td>Bike Accessories</td>
                                    <td>
                                        <span class="text-success">$215.00</span>
                                    </td>
                                    <td>Nesta Technologies</td>
                                    <td>
                                        <span class="badge badge-soft-success">Paid</span>
                                    </td>
                                    <td>
                                        <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89
                                                votes)</span></h5>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">Prezy Mark</div>
                                        </div>
                                    </td>
                                    <td>Furniture</td>
                                    <td>
                                        <span class="text-success">$199.00</span>
                                    </td>
                                    <td>Syntyce Solutions</td>
                                    <td>
                                        <span class="badge badge-soft-danger">Unpaid</span>
                                    </td>
                                    <td>
                                        <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47
                                                votes)</span></h5>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}"
                                                    alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1">Vihan Hudda</div>
                                        </div>
                                    </td>
                                    <td>Bags and Wallets</td>
                                    <td>
                                        <span class="text-success">$330.00</span>
                                    </td>
                                    <td>iTest Factory</td>
                                    <td>
                                        <span class="badge badge-soft-success">Paid</span>
                                    </td>
                                    <td>
                                        <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161
                                                votes)</span></h5>
                                    </td>
                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>
            </div> <!-- .card-->
        </div> <!-- .col-->
    </div> --}}
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
