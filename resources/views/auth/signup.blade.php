
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        {{config('app.name')}}
    </title>


    <link id="pagestyle" href="{{PUBLIC_DIR}}/css/app.css" rel="stylesheet" />
    @if(!empty($super_settings['config_recaptcha_in_user_signup']))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
</head>

<body class="g-sidenav-show  bg-light-blue">


<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg">
        <span class="mask bg-brown"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-info mb-2 mt-5">{{__('Welcome!')}}</h1>
                    <p class=" text-gray">{{__('Create new account')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light-blue">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>{{__('Register')}}</h5>
                    </div>

                    <div class="card-body">
                        <form role="form text-left"  method="post" action="/signup">

                            @if (session()->has('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <label>{{__('First Name')}}</label>
                                <div class="mb-3">
                                    <input  name="first_name" class="form-control"  type="text"  placeholder="First name" aria-describedby="email-addon">
                                </div>
                                <label>{{__('Last Name')}}</label>
                                <div class="mb-3">
                                    <input type="text" name="last_name" class="form-control"    placeholder="Last name" aria-describedby="email-addon">
                                </div>

                                <label>{{__('Email')}}</label>
                                <div class="mb-3">
                                    <input type="email" placeholder="Email" name="email" class="form-control"  aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <label>{{__('Choose Password')}}</label>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                </div>

                                @if(!empty($super_settings['config_recaptcha_in_user_signup']))
                                    <div class="g-recaptcha" data-sitekey="{{$super_settings['recaptcha_api_key']}}">

                                    </div>
                                @endif


                                @csrf
                            <div class="text-center">
                                <button type="submit" class="btn btn-info w-100 my-4 mb-2">{{__('Sign up')}}</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">{{__('Already have an account?')}} <a href="/login" class="text-dark font-weight-bolder">{{__('Sign in')}}</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

</body>

</html>
