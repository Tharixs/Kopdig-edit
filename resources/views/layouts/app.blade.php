<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-layout-mode="light" data-sidebar="light"
    data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>{{ $title ?? config('app.name', 'Laravel') }} | Koperasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="assets/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/swiper/swiper.min.css" rel="stylesheet" type="text/css" />
    @include('layouts.partials.style')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.partials.header')
        @include('layouts.partials.sidebar')
        <div class="vertical-overlay"></div>
        {{-- Content --}}
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts.components.footer')
        </div>
        {{-- End Content --}}
    </div>

    @include('layouts.partials.scripts')
</body>

</html>
