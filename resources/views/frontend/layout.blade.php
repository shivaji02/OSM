<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if(!empty($super_settings['favicon']))

        <link rel="icon" type="image/png" href="{{PUBLIC_DIR}}/uploads/{{$super_settings['favicon']}}">
    @endif

    <title>
        @yield('title')-{{config('app.name')}}
    </title>
    @if(!empty($super_settings['meta_description']))

        <meta name="description" content="{!! $super_settings['meta_description'] !!}" />
    @endif


    @if(!empty($super_settings['custom_script']))
        {!! $super_settings['custom_script'] !!}
    @endif

    <link id="pagestyle" href="{{PUBLIC_DIR}}/css/app.css?v=2" rel="stylesheet" />
</head>

<body class="about-us">

<!-- Navbar Transparent -->
<nav class="navbar navbar-expand-lg top-0 z-index-3 w-100 shadow-blur  bg-gray-100 fixed-top">
    <div class="container mt-1">
        <a class="navbar-brand bg-transparent fw-bolder " href="/home" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">

                @if(!empty($super_settings['logo']))
                    <img src="{{PUBLIC_DIR}}/uploads/{{$super_settings['logo']}}" class="navbar-brand-img h-100" style="max-height: {{$super_settings['frontend_logo_max_height'] ?? '30'}}px;" alt="...">
                @else
                    <span class="ms-1 font-weight-bold">{{config('app.name')}}</span>
                @endif
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
        </button>

        <div class="collapse  navbar-collapse w-100 pt-3 mt-1 pb-2  py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
            <ul class="navbar-nav  bg-transparent navbar-nav-hover w-100 mt-1">

                <li class="nav-item float-end ms-5 ms-lg-auto">
                    <a  href="/home" class="nav-link" >
                        <p class="d-inline text-sm z-index-1 font-bold " data-bs-toggle="tooltip" data-bs-placement="bottom" >
                            <strong class="text-uppercase">
                                {{__('Home')}}
                            </strong>

                        </p>


                    </a>

                </li>

                <li class="nav-item float-end ms-5 ms-lg-auto">
                    <a class="nav-link nav-link-icon" href="/pricing" target="_blank">

                        <p class="d-inline text-sm z-index-1 font-bold " data-bs-toggle="tooltip" data-bs-placement="bottom" >
                            <strong class="text-uppercase">
                                {{__('Pricing')}}
                            </strong>

                        </p>
                    </a>
                </li>
                <li class="nav-item ms-lg-auto ms-5">
                    <a class="nav-link nav-link-icon me-5" href="/login" target="_blank">

                        <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <strong class="text-uppercase">
                                {{__('Login')}}
                            </strong>

                        </p>
                    </a>
                </li>

                <li class="nav-item ms-lg-auto ms-3 ">
                    <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <a href="/signup" class="btn btn-info btn-sm btn-round mb-0 me-1 mt-md-0">{{__('Sign Up for free')}}</a>

                    </p>

                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-5 mb-4 ms-auto">
                <div>
                    <h6 class="text-gradient text-dark font-weight-bolder"> {{config('app.name')}}</h6>
                </div>

            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-gradient text-dark text-sm">{{__('Legal')}}</h6>
                    <ul class="flex-column  nav">

                        <li class="nav-item">
                            <a class="nav-link" href="/privacy" target="_blank">
                               {{__('Privacy Policy')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/termsandconditions" target="_blank">
                                {{__('Terms and Conditions')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cookie-policy" target="_blank">
                                {{__('Cookie Policy')}}
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-gradient text-dark text-sm">{{__('Stay in Touch')}}</h6>
                    <ul class="flex-column  nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/contact" target="_blank">
                                {{__('Contact us')}}
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <p class="my-4 text-sm">
                        All rights reserved. Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script>  by {{config('app.name')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--   Core JS Files   -->

<script src="{{PUBLIC_DIR}}/js/app.js?v=94"></script>
@yield('script')
</body>

</html>
