@extends('layouts.'.($layout ?? 'primary'))
@section('content')
    <div class="row mb-5">
        <div class="col-lg-3">
            <div class="card position-sticky top-1">
                <ul class="nav flex-column bg-white border-radius-lg p-3">
                    <li class="nav-item pt-2">
                        <a class="nav-link text-body" data-scroll="" href="#basic-info">
                            <div class="icon me-2">
                                <svg class="text-dark mb-1" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(154.000000, 300.000000)">
                                                    <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                    <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="text-sm">{{__('General Settings')}}</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">
            <!-- Card Profile -->

            <!-- Card Basic Info -->
{{--            @if ($user->super_admin)--}}
                <div class="card shadow-lg  mb-3">
                    <div class="card-header pb-0 pt-3 ">
                        <div class="float-start">
                            <h5 class="mt-3 mb-0">{{__('Appearance')}}</h5>

                        </div>
                        <div class="float-end mt-4">

                        </div>

                    </div>
                    <hr class="horizontal dark my-1">
                    <div class="card-body pt-sm-3 pt-0">

                        <div class="mt-3">
                            <h6 class="mb-0">{{__('Sidenav Color')}}</h6>
                            <p class="text-sm">{{__('Choose between dark and transparent.')}}</p>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-dark w-100 px-3 mb-2"  data-class="bg-dark-sidenav" onclick="sidebarType(this, {{$user->super_admin ?? '0'}})">{{__('Dark')}}</button>
                            <button class="btn btn-light  w-100 px-3 mb-2 ms-2 active" data-class="bg-transparent" onclick="sidebarType(this, {{$user->super_admin ?? '0'}})">{{__('Transparent')}}</button>

                        </div>
                        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

                    </div>
                </div>
{{--            @endif--}}


            <form enctype="multipart/form-data" action="/settings" method="post">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card " id="basic-info">
                    <div class="card-header">
                        <h5>{{__('General Settings')}}</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <label class="form-label">{{__('App Name')}}</label>

                            <div class="input-group">
                                <input id="firstName" name="workspace_name" value="{{$workspace->name}}" class="form-control" type="text" required="required">
                            </div>

                        </div>




                        @if ($user->super_admin)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div>
                                        <label for="logo_file" class="form-label mt-4">{{__('Upload Logo')}}</label>
                                        <input class="form-control" name="logo" type="file" id="logo_file">
                                    </div>
                                </div>
                            </div>

                        @endif
                        @if ($user->super_admin)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div>
                                        <label for="logo_file" class="form-label mt-4">{{__('Upload favicon')}}</label>
                                        <input class="form-control" name="favicon" type="file" id="favicon_file">
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($user->super_admin)
                            <label class="form-label mt-3">{{__('Currency')}}</label>

                            <div class="input-group">
                                <input id="firstName" name="currency" value="{{$settings['currency'] ?? config('app.currency')}}"
                                       class="form-control" type="text" required="required">
                            </div>

                        @endif
                        @if ($user->super_admin)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div>
                                        <label class="form-label mt-4">{{__('Landing Page Language')}}</label>
                                        <select class="form-select" name="language" id="choices-language">@foreach($available_languages as $key => $value)
                                                <option value="{{$key}}" @if(($settings['language'] ?? null)===$key) selected @endif >{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        @endif
                        @if ($user->super_admin)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div>
                                        <label for="free_trial_days" class="form-label mt-4">{{__('Free Trial Days')}}</label>
                                        <input class="form-control" name="free_trial_days" type="number" id="free_trial_days" value="{{$settings['free_trial_days'] ?? ''}}">
                                    </div>
                                </div>
                            </div>

                        @endif



                        @if ($user->super_admin)
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div>
                                        <label for="free_trial_days" class="form-label mt-4">{{__('Landing Page')}}</label>
                                        <select class="form-select" aria-label="Default select example" name="landingpage"><option value="Default"
                                                                                                                                   @if(($settings['landingpage'] ?? null) === 'Default') selected @endif>{{__('Default landing page')}}</option>
                                            <option value="Login"
                                                    @if(($settings['landingpage'] ?? null) === 'Login') selected @endif>{{__('Login Page')}}</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                        @endif


                        <label  class="form-label mt-4">{{__('Custom Script')}}</label>
                        <div class="input-group">
                            <textarea id="custom_script" name="custom_script"  class="form-control" type="text">{{$settings['custom_script'] ?? ''}}</textarea>
                        </div>
                        <label  class="form-label mt-4">{{__('Meta Description')}}</label>
                        <div class="input-group">
                            <textarea id="meta_description" name="meta_description"  class="form-control" type="text">{{$settings['meta_description'] ?? ''}}</textarea>
                        </div>





{{--                    @if ($user->super_admin)--}}
{{--                            <div class="row mt-4">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div>--}}

{{--                                        <div class="form-check form-switch">--}}
{{--                                            <label class="form-label" for="rtl">{{__('Enable RTL')}}</label>--}}

{{--                                            <input class="form-check-input" type="checkbox" role="switch" id="rtl" name="rtl" value="1"--}}
{{--                                            @if(!empty($settings['rtl'])) checked @endif--}}
{{--                                            >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        @endif--}}

                        @csrf
                        <button class="btn bg-gradient-dark btn-sm float-left mt-4 mb-0">{{__('Update')}} </button>
                    </div>


                </div>
            </form>

            @if ($user->super_admin)

                <h5 class=" mb-3 text-secondary fw-bolder mt-3">
                    {{__('reCaptcha Settings')}}
                </h5>

                <div class="card mb-6">

                    <div class="card-body">

                        <div class="accordion-1">
                            <div class="accordion" id="accordionSettings">

                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{__('reCAPTCHA v2')}}
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm">

                                            <form action="/settings/save-recaptcha-config" method="post">



                                                <div class="mt-3">
                                                    <div class=" pt-0">


                                                        <div class="row mb-4">
                                                            <label for="recaptcha_api_key" class="form-label">{{__('Site Key')}}</label>
                                                            <div class="input-group">
                                                                <input id="recaptcha_api_key" name="recaptcha_api_key" value="{{$settings['recaptcha_api_key'] ?? ''}}"
                                                                       class="form-control" type="text" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <label for="recaptcha_api_secret" class="form-label">{{__('Secret Key')}}</label>

                                                            <div class="input-group">
                                                                <input id="recaptcha_api_secret" name="recaptcha_api_secret" value="{{$settings['recaptcha_api_secret'] ?? ''}}"
                                                                       class="form-control" type="text" required="required">
                                                            </div>
                                                        </div>
                                                        @if ($user->super_admin)

                                                            <div class="form-check form-switch mt-3">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="config_recaptcha_in_user_login" name="config_recaptcha_in_user_login" value="1"
                                                                       @if(!empty($settings['config_recaptcha_in_user_login']))
                                                                       checked
                                                                        @endif>

                                                                <label class="form-check-label" for="config_recaptcha_in_user_login">{{__('Enable Recaptcha in User Login')}}</label>
                                                            </div>
                                                            <div class="form-check form-switch mt-3">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="config_recaptcha_in_admin_login" name="config_recaptcha_in_admin_login" value="1"
                                                                       @if(!empty($settings['config_recaptcha_in_admin_login']))
                                                                       checked
                                                                        @endif>

                                                                <label class="form-check-label" for="config_recaptcha_in_admin_login">{{__('Enable Recaptcha in Admin Login')}}</label>
                                                            </div>
                                                            <div class="form-check form-switch mt-3">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="config_recaptcha_in_user_signup" name="config_recaptcha_in_user_signup" value="1"
                                                                       @if(!empty($settings['config_recaptcha_in_user_signup']))
                                                                       checked
                                                                        @endif>

                                                                <label class="form-check-label" for="config_recaptcha_in_user_signup">{{__('Enable Recaptcha in Signup Page')}}</label>
                                                            </div>


                                                        @endif

                                                        @csrf
                                                        <button class="btn btn-info float-left mb-0 mt-3">{{__('Save')}}</button>
                                                    </div>
                                                </div>


                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            @endif


        </div>
    </div>




@endsection
