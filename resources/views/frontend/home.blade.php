@extends('frontend.layout')
@section('title','Home')
@section('content')

{{--  Hearder start  --}}

 <header class=" ">
     <div class="page-header min-vh-100 "
          @if (!empty($landingpage))
          style="background-image: url('{{PUBLIC_DIR}}/uploads/{{$landingpage->background_image}}');"
          @endif
          >
         <span class=" mask bg-dark opacity-7"></span>
         <div class="container">
             <div class="row text-center">
                 <div class="col-md-12 d-flex justify-content-center flex-column">
                     <h1 class="text-white  display-1  fw-bolder mt-4">
                         @if (!empty($landingpage))
                             {{$landingpage->hero_title}}
                         @endif
                     </h1>
                     <h3 class="mb-4 text-success">
                         @if (!empty($landingpage))
                             {{$landingpage->hero_subtitle}}
                         @endif

                     </h3>


                     <p class="text-white">
                         @if (!empty($landingpage))
                             {{$landingpage->hero_paragraph}}
                         @endif
                     </p>
                     <div class="buttons">
                         <a href="/signup" class="btn btn-lg btn-info btn-rounded mt-4">{{__('Get Started')}}</a>
                         <a href="/pricing" class="btn btn-lg btn-rounded btn-outline-light  text-white shadow-none mt-4">{{__('Plans & Pricing')}}</a>
                     </div>
                 </div>
             </div>

         </div>

     </div>
        <div class="position-absolute w-100 bottom-0">
            <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-up</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-up" transform="translate(0.000000, -5.000000)">
                            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

    </header>


{{--  Header end--}}

 {{--Body Start--}}




<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ms-auto me-auto text-center">

                <h3 class="display-3 fw-bolder  text-dark mb-3 mt-2">
                    @if (!empty($landingpage))
                        {{$landingpage->feature1_title}}
                    @endif

                </h3>
                <h3 class="text-info mb-3 ">
                    @if (!empty($landingpage))
                        {{$landingpage->feature1_subtitle}}
                    @endif

                </h3>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 ms-auto my-auto">
                <div class="cursor-pointer">
                    <div class="card card-background tilt" data-tilt="">
                        <div class="full-background"
                             @if (!empty($landingpage))
                             style="background-image: url('{{PUBLIC_DIR}}/uploads/{{$landingpage->feature1_image}}')"
                             @endif
                        ></div>
                        <div class="card-body pt-7 text-center">
                            <div class="icon icon-lg up mb-3">
                                <svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>chart-pie-35</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1720.000000, -742.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(4.000000, 451.000000)">
                                                    <path d="M21.6666667,18.3333333 L39.915,18.3333333 C39.11,8.635 31.365,0.89 21.6666667,0.085 L21.6666667,18.3333333 Z" opacity="0.602864583"></path>
                                                    <path d="M20.69,21.6666667 L7.09833333,35.2583333 C10.585,38.21 15.085,40 20,40 C30.465,40 39.0633333,31.915 39.915,21.6666667 L20.69,21.6666667 Z"></path>
                                                    <path d="M18.3333333,19.31 L18.3333333,0.085 C8.085,0.936666667 0,9.535 0,20 C0,24.915 1.79,29.415 4.74166667,32.9016667 L18.3333333,19.31 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h1 class="text-white up mb-0">
                                @if (!empty($landingpage))
                                    {{$landingpage->feature1_image_title}}
                                @endif

                            </h1>
                            <p class="lead up">
                                @if (!empty($landingpage))
                                    {{$landingpage->feature1_image_subtitle}}
                                @endif

                            </p>
                            <a href="/signup" class="btn btn-white btn-lg mt-3 up">{{__('Get Started')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 me-auto my-auto ms-md-5">
                <div class="p-3 info-horizontal d-flex">
                    <div>
                        <h5>
                            @if (!empty($landingpage))
                                {{$landingpage->feature1_one}}
                            @endif

                        </h5>
                        <p>
                            @if (!empty($landingpage))
                                {{$landingpage->feature1_one_paragraph}}
                            @endif


                        </p>
                    </div>
                </div>
                <div class="p-3 info-horizontal d-flex">
                    <div>
                        <h5>
                            @if (!empty($landingpage))
                                {{$landingpage->feature1_two}}
                            @endif

                        </h5>
                        <p>
                            @if (!empty($landingpage))
                                {{$landingpage->feature1_two_paragraph}}
                            @endif

                        </p>
                    </div>
                </div>
                <div class="p-3 info-horizontal d-flex">
                    <div>
                        <h5>
                            @if (!empty($landingpage))
                                {{$landingpage->feature1_three}}
                            @endif

                        </h5>
                        <p>
                            @if (!empty($landingpage))
                                {{$landingpage->feature1_three_paragraph}}
                            @endif

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="dark my-md-6 mt-2 mx-7">

        <div class="row">
            <div class="col-md-5 ms-auto my-auto">
                <div class="p-3 info-horizontal d-flex">
                    <div>
                        <h5>
                            @if (!empty($landingpage))
                                {{$landingpage->feature2_one}}
                            @endif

                        </h5>
                        <p>
                            @if (!empty($landingpage))
                                {{$landingpage->feature2_one_paragraph}}
                            @endif

                        </p>
                    </div>
                </div>
                <div class="p-3 info-horizontal d-flex">
                    <div>
                        <h5>
                            @if (!empty($landingpage))
                                {{$landingpage->feature2_two}}
                            @endif
                        </h5>
                        <p> @if (!empty($landingpage))
                                {{$landingpage->feature2_two_paragraph}}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="p-3 info-horizontal d-flex">
                    <div>
                        <h5>
                            @if (!empty($landingpage))
                                {{$landingpage->feature2_three}}
                            @endif

                        </h5>
                        <p>  @if (!empty($landingpage))
                                {{$landingpage->feature2_three_paragraph}}
                            @endif

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 me-auto my-auto ms-md-5">
                <div class="cursor-pointer">
                    <div class="card card-background tilt" data-tilt="">
                        <div class="full-background"
                             @if (!empty($landingpage))
                             style="background-image: url('{{PUBLIC_DIR}}/uploads/{{$landingpage->feature2_image}}')"
                             @endif


                        ></div>
                        <div class="card-body pt-7 text-center">
                            <div class="icon icon-lg up mb-3">
                                <svg width="40px" height="40px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>customer-support</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(1.000000, 0.000000)">
                                                    <path d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
                                                    <path d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                                    <path d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h1 class="text-white up mb-0">
                                @if (!empty($landingpage))
                                    {{$landingpage->feature2_image_title}}
                                @endif

                            </h1>
                            <p class="lead up">
                                @if (!empty($landingpage))
                                    {{$landingpage->feature2_image_subtitle}}
                                @endif

                            </p>
                            <a href="/signup" class="btn btn-white btn-lg mt-3 up">{{__('Get Started')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="bg-purple-light position-relative overflow-hidden">

        <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
            <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-down</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-down">
                            <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container py-lg-10 py-7">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center flex-column">
                    <div id="carouselExampleIndicator" class="carousel slide py-7" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <h2 class="text-black-50 fw-bolder display-1 mb-1">
                                @if (!empty($landingpage))
                                    {{$landingpage->partners_title}}
                                @endif

                            </h2>
                            <p class="text-purple opacity-8 mb-1">
                                @if (!empty($landingpage))
                                    {{$landingpage->partners_subtitle}}
                                @endif

                            </p>
                            <hr class="text-white horizontal opacity-6 mb-4 mt-2 w-25 text-start">
                            <div class="carousel-item active">
                                <h6 class=" pe-5">
                                    @if (!empty($landingpage))
                                        {{$landingpage->partners_paragraph}}
                                    @endif

                                </h6>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 justify-content-center flex-column d-sm-none d-md-none d-lg-flex d-xl-flex">
                    <div class="row justify-content-center d-none d-md-flex">
                        <div class="col-3 mb-4">
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 mt-n4 ms-8 fadeIn2 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar1}}" alt="">
                                @endif

                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 ms-8 mt-n6 fadeIn1 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar2}}" alt="">
                                @endif

                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 ms-6 mt-2 fadeIn3 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar3}}" alt="">
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end d-none d-md-flex">
                        <div class="col-4 my-4">
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 ms-4 fadeIn1 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img class="avatar-img" src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar4}}" alt="">

                                @endif

                            </div>
                        </div>
                        <div class="col-3 my-4">
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 me-auto fadeIn1 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img class="avatar-img" src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar5}}" alt="">

                                @endif

                            </div>
                        </div>
                        <div class="col-3 my-4">
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 fadeIn3 fadeInBottom ms-3 mt-3">
                                @if (!empty($landingpage))
                                    <img class="avatar-img" src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar6}}" alt="">
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row d-none d-md-flex">
                        <div class="col-6">
                            <!-- Logo -->
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 ms-auto mt-5 fadeIn2 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img class="avatar-img" src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar7}}" alt="">
                                @endif

                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="col-6 mt-6">
                            <!-- Logo -->
                            <div class="d-block bg-white avatar avatar-lg rounded-circle p-3 mx-auto mt-n3 fadeIn3 fadeInBottom">
                                @if (!empty($landingpage))
                                    <img class="avatar-img" src="{{PUBLIC_DIR}}/uploads/{{$landingpage->partners_avatar8}}" alt="">
                                @endif

                            </div>
                            <!-- End Logo -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute w-100 bottom-0">
            <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-up</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-up" transform="translate(0.000000, -5.000000)">
                            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </section>

    <section class="my-5 pt-5">
        <div class="container bg-gradient-white">
            <div class="row">
                <div class=" col-md-5">
                    <div class=" p-0 mx-3 mt-3 position-relative z-index-1">
                        <div class="d-block blur-shadow-image">
                            @if (!empty($landingpage))
                                <img src="{{PUBLIC_DIR}}/uploads/{{$landingpage->story1_image}}" alt="" class="img-fluid shadow rounded-3">
                            @endif
                        </div>
                        <div class="colored-shadow"
                             @if (!empty($landingpage))
                             style="background-image: url('{{PUBLIC_DIR}}/uploads/{{$landingpage->story1_image}}');"
                             @endif
                        >
                        </div>
                    </div>
                </div>

                <div class="col-md-6 m-auto">
                    <h2 class="display-1 text-black-50 fw-bolder">
                        @if (!empty($landingpage))
                            {{$landingpage->story1_title}}
                        @endif
                    </h2>
                    <p class="mb-5 mt-4">
                        @if (!empty($landingpage))
                            {{$landingpage->story1_paragrapgh}}
                        @endif
                    </p>
                </div>
            </div>
        </div>




        <div class="container mt-5 bg-white">

            <div class="row justify-content-center text-center ">
                <div class="col-md-3 mt-4">
                    <h1 class="text-purple" id="state1">
                        @if (!empty($landingpage))
                            {{$landingpage->number1}}
                        @endif

                    </h1>
                    <h5 class="text-dark">
                        @if (!empty($landingpage))
                            {{$landingpage->number1_title}}
                        @endif

                    </h5>
                    <p>
                        @if (!empty($landingpage))
                            {{$landingpage->number1_paragraph}}
                        @endif

                    </p>
                </div>
                <div class="col-md-3 mt-4">
                    <h1 class="text-success">
                        <span id="state2">
                             @if (!empty($landingpage))
                                {{$landingpage->number2}}
                            @endif

                        </span>
                    </h1>
                    <h5 class="text-dark">
                        @if (!empty($landingpage))
                        {{$landingpage->number2_title}}
                        @endif
                    </h5>
                    <p>
                        @if (!empty($landingpage))
                            {{$landingpage->number2_paragraph}}
                        @endif

                    </p>
                </div>
                <div class="col-md-3 mt-4">
                    <h1 class="text-info"><span id="state3">
                             @if (!empty($landingpage))
                                {{$landingpage->number3}}
                            @endif

                        </span></h1>
                    <h5 class="text-dark">
                        @if (!empty($landingpage))

                            {{$landingpage->number3_title}}
                        @endif

                    </h5>
                    <p>
                        @if (!empty($landingpage))
                            {{$landingpage->number3_paragraph}}
                        @endif

                    </p>
                </div>
            </div>
        </div>
        <div class="position-absolute w-100 z-inde-1 ">
            <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-down</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-down">
                            <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <section class="py-7 bg-pink-light mt-5 overflow-hidden">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="row justify-content-start">
                            <div class="info">
                                <h1 class="display-1  text-black-50 fw-bolder">
                                    @if (!empty($landingpage))
                                        {{$landingpage->story2_title}}
                                    @endif

                                </h1>
                                <p class="mb-4">
                                    @if (!empty($landingpage))
                                        {{$landingpage->story2_paragrapgh}}
                                    @endif

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ms-auto mt-lg-0 mt-4">
                        <div class="">
                            <div class=" p-0 mx-3 mt-3 position-relative z-index-1">
                                <div class="d-block blur-shadow-image">
                                    @if (!empty($landingpage))
                                        <img src="{{PUBLIC_DIR}}/uploads/{{$landingpage->story2_image}}" alt="" class="img-fluid shadow rounded-3">
                                    @endif

                                </div>
                                <div class="colored-shadow"
                                     @if (!empty($landingpage))
                                     style="background-image: url('{{PUBLIC_DIR}}/uploads/{{$landingpage->story2_image}}');"
                                     @endif

                                     ></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    <section class="my-5 pt-5">

        <div class="container bg-gradient-white">
            <div class="row">
                <div class="col-md-6 m-auto ">
                    <h2 class="display-6 fw-bolder">
                        @if (!empty($landingpage))
                            {{$landingpage->newsletter_title}}
                        @endif

                    </h2>
                    <p class="mb-4">
                        @if (!empty($landingpage))
                            {{$landingpage->newsletter_paragraph}}
                        @endif

                    </p>


                    <form action="/save-email" method="post" id="form_newsletter_subscription">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row fs-4 fw-bolder text-info" id="newsletter_div" data-message="{{ __('Thank you for signing up!') }}">
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="email"  id="input_email" name="email" class="form-control mb-sm-0" placeholder="Email Here...">
                                </div>
                            </div>

                            @csrf
                            <div class="col-4 ps-0">
                                <button type="submit" id="btn_submit"  class="btn btn-success fw-bolder mb-0 h-100 position-relative z-index-2">{{__('Subscribe')}}</button>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="col-md-5 ms-auto">
                    <div class="position-relative">

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@section('script')

    <script>

        $(function () {
            let $form_newsletter_subscription = $('#form_newsletter_subscription');
            let $btn_submit = $('#btn_submit');
            let $newsletter_div = $('#newsletter_div');
            $form_newsletter_subscription.on('submit', function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled', true);
                $.post('/save-email', $form_newsletter_subscription.serialize()).done(function (data) {
                    $newsletter_div.html($newsletter_div.data('message'));
                }).fail(function (data) {
                    $btn_submit.prop('disabled', false);
                    let error = '';
                    $.each(data.responseJSON.errors, function (key, value) {
                        error += value + ' <br>';
                    });
                    $('#error_messages').html(error);
                });
            });

        });


     </script>
@endsection

