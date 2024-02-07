<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if(!empty($settings['favicon']))

        <link rel="icon" type="image/png" href="{{PUBLIC_DIR}}/uploads/{{$settings['favicon']}}">
    @endif
    <title>
        {{config('app.name')}}
    </title>

    <link id="pagestyle" href="{{PUBLIC_DIR}}/css/app.css?v=114" rel="stylesheet" />

    <script>
        window.public_dir = "{{PUBLIC_DIR}}";
        window.business_name = "{{config('app.name')}}";
        window.csrf_token = "{{csrf_token()}}";
        @if(!empty($settings['ltoken']))
            window.ltoken = "{{$settings['ltoken']}}";
        @endif
    </script>

    @yield('head')


</head>

<body class="g-sidenav-show  bg-gray-100" id="clx_body">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-left
@if(!empty($settings['theme']))
@if($settings['theme'] == 'bg-transparent') bg-transparent @endif
@endif

" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{config('app.url')}}/super-admin/dashboard">
            @if(!empty($settings['logo']))
                <img src="{{PUBLIC_DIR}}/uploads/{{$settings['logo']}}" class="navbar-brand-img h-100" alt="...">
                @else
                <span class="ms-1 h5 text-purple font-weight-bold"> {{config('app.name')}}</span>
            @endif
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">


        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'sdashboard') active @endif" href="/super-admin/dashboard">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path class="color-background" fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path class="color-background" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">{{ __('Dashboard') }}</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'workspaces') active @endif" href="/workspaces">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-front" viewBox="0 0 16 16">
                            <path class="color-background" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5z"/>
                        </svg>

                    </div>

                    <span class="nav-link-text ms-1">{{__('Workspaces')}}</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'users') active @endif " href="/users">   <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path class="color-background" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1 ">{{__('Users')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'emails' ) active @endif " href="/emails"> <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path   class="color-background" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">{{__('Newsletter Subscribers')}}</span>
                </a>
            </li>


            <li class="nav-item mt-3 mb-3">
                <h6 class="ps-4 ms-2 text-muted text-xs font-weight-bolder text-uppercase">{{__('Settings')}}  </h6>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'saas-plans') active @endif " href="/subscription-plans">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph-fill" viewBox="0 0 16 16">
                            <path class="color-background" d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">{{__('Plans')}}</span>
                </a>
            </li>






            <li class="nav-item">
                <a class="nav-link  @if(($selected_navigation ?? '') === 'payment-gateways') active @endif " href="/payment-gateways">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                            <path class="color-background" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">{{__('Payment Gateways')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'landing-page') active @endif "  data-bs-toggle="collapse" aria-expanded="false" href="#navFrontend">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-square-fill" viewBox="0 0 16 16">
                            <path class="color-background" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm.5 5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1 0-1zM4 8.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm2 3a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>

                    <span class="sidenav-normal nav-link-text ms-1 ">{{__('Frontend')}} <b class="caret"></b></span>

                </a>
                <div class="collapse @if(($selected_navigation ?? '') === 'landing-page') show @endif" id="navFrontend">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item  ms-2 mb-2">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'homepage') active @endif mt-3" href="/landingpage">
                                <span class=" nav-link-text ">{{__('Home Page')}} </span>
                            </a>
                        </li>
                        <li class="nav-item ms-2 mb-2">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'pricing-page-editor') active @endif"  href="/pricingpage">
                                <span class="nav-link-text "> {{__('Pricing Page')}}</span>
                            </a>
                        </li>
                        <li class="nav-item ms-2 mb-2">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'privacy-page-editor') active @endif" href="/privacypage">
                                <span class="nav-link-text">{{__('Privacy Policy')}}</span>
                            </a>
                        </li>
                        <li class="nav-item ms-2 mb-2">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'cookie-page-editor') active @endif" href="/cookiepage">
                                <span class="nav-link-text">{{__('Cookie Policy')}}</span>
                            </a>
                        </li>
                        <li class="nav-item ms-2 mb-2">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'terms-page-editor') active @endif" href="/termspage">
                                <span class="nav-link-text">{{__('Terms & Condition')}}</span>
                            </a>
                        </li>
                        <li class="nav-item ms-2 mb-2">
                            <a class="nav-link @if(($selected_sub_navigation ?? '') === 'contact-page-editor') active @endif" href="/contactpage">
                                <span class="nav-link-text">{{__('Contact us')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(($selected_navigation ?? '') === 'profile') active @endif " href="/super-admin-profile">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-ppt-fill" viewBox="0 0 16 16">
                            <path class="color-background" d="M8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5z"/>
                            <path class="color-background" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5H7z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1 ">{{__('My Profile')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  @if(($selected_navigation ?? '') === 'settings') active @endif" href="/super-admin-setting">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable-circle-fill" viewBox="0 0 16 16">
                            <path  class="color-background" d="M6.705 8.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                            <path  class="color-background" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm-6.202-4.751 1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2a7.031 7.031 0 0 1-2.949-2.951ZM12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
                        </svg>
                    </div>

                    <span class="nav-link-text ms-1">{{__('General Settings')}}</span>
                </a>
            </li>

            <li class="nav-item mb-4">
                <a class="nav-link @if(($selected_navigation ?? '') === 'email-settings') active @endif" href="/email-setting">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path class="color-background" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                        </svg>

                    </div>


                    <span class="nav-link-text ms-1">{{__('Email Settings')}}</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
<main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder mb-0"></h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">

                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/super-admin-profile" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">@if (!empty($focus_user)) {{$focus_user->first_name}} {{$focus_user->last_name}}@endif</span>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="/logout" class="nav-link text-body p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4 main_content" id="main_content">
        @yield('content')
    </div>
</main>




<!--   Core JS Files   -->
<script src="{{PUBLIC_DIR}}/js/app.js?v=64"></script>
<script src="{{PUBLIC_DIR}}/lib/tinymce/tinymce.min.js?v=50"></script>

<script>
    "use strict"
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>



@yield('script')

</body>

</html>

