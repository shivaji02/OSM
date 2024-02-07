@extends('frontend.layout')
@section('title','Pricing')
@section('content')

    <section class="">
        <div class="bg-dark position-relative">
            <img src="" class="position-absolute start-0 top-md-0 w-100 opacity-6">
            <div class="pb-lg-9 pb-7 pt-7 postion-relative z-index-2">
                <div class="row mt-4">
                    <div class="col-md-8 mx-auto text-center">
                        <h1 class="text-warning">
                            @if (!empty($landingpage))
                                {{$landingpage->hero_title}}
                            @endif
                        </h1>
                        <p class="text-white mb-4">
                            @if (!empty($landingpage))
                                {{$landingpage->hero_subtitle}}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" ">
            <div class="mt-n8 ">
                <div class="container mb-10">

                    <div class="">
                        <div class="row">
                            @foreach($plans as $plan)

                                <div class="@if(count($plans) == 3) @if($loop->iteration == 1) col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 ms-auto @elseif($loop->iteration == 2) col-lg-3 p-md-0 mb-lg-auto mb-4 z-index-2 @elseif($loop->iteration == 3) col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 me-auto @endif @endif">
                                    <div class="card @if(count($plans) == 3) @if($loop->iteration == 1) bg-white @elseif($loop->iteration == 2) bg-purple-light @elseif($loop->iteration == 3) bg-white @endif @endif">
                                        <div class="card-header mt-4 @if(count($plans) == 3) @if($loop->iteration == 1) bg-white @elseif($loop->iteration == 2) bg-purple-light @elseif($loop->iteration == 3) bg-white @endif @endif text-center ">
                                            <h6 class="text-dark opacity-8 text mb-0">{{$plan->name}}</h6>
                                            {{--                                            <h4 class=" text mb-2">{{$plan->name}}</h4>--}}
                                            <p>{!! $plan->description !!}</p>

                                            <h2 class=" font-weight-bolder mt-3">
                                                {{formatCurrency($plan->price_monthly,getWorkspaceCurrency($super_settings))}}<small class="text-sm text-secondary font-weight-bold">/ {{__(' month')}}</small>
                                            </h2>

                                            <h2 class=" font-weight-bolder mt-3">
                                                {{formatCurrency($plan->price_yearly,getWorkspaceCurrency($super_settings))}} <small class="text-sm text-secondary font-weight-bold">/ {{__(' year')}}</small>
                                            </h2>

                                        </div>
                                        <div class="card-body mx-auto pt-0">
                                            @if($plan->features)

                                                @foreach(json_decode($plan->features) as $feature)

                                                    <div class=" justify-content-start d-flex px-2 py-1">
                                                        <div>
                                                            <i class="fas fa-check text-purple text-sm"></i>
                                                        </div>
                                                        <div class="ps-2">
                                                            <span class="text-sm">{{$feature}}</span>
                                                        </div>
                                                    </div>


                                                @endforeach

                                            @endif
                                        </div>
                                        <div class="card-footer text-center pt-0">
                                            <a href="/signup" type="button"
                                               class="btn w-100  @if($loop->iteration == 1) btn-dark @elseif($loop->iteration == 2) btn-info @elseif($loop->iteration == 3) col-lg-3 btn-dark @endif
                                                       mb-0 ">{{__('Get Started')}}</a>

                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>


                    </div>
                </div>
            </div>

        </div>
{{--        <div class="">--}}
{{--            <div class="mt-sm-n5 mt-n4">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($plans as $plan)--}}
{{--                            <div class="col-md-3  mb-4 ">--}}
{{--                                <div class="card ">--}}
{{--                                    <div class="card-header text-center ">--}}
{{--                                        <h3 class="text-dark opacity-8 text mb-2">{{$plan->name}}</h3>--}}
{{--                                        <p>{!! $plan->description !!}</p>--}}
{{--                                        <span>--}}
{{--                            <h2 class="font-weight-bolder text-dark">--}}
{{--                           {{formatCurrency($plan->price_monthly,getWorkspaceCurrency($super_settings))}}<span><small--}}
{{--                                            class=" text-sm text-warning ">/{{__(' month')}}</small></span>--}}
{{--                            </h2> </span>--}}


{{--                                        <h2 class="mt-0  text-dark">--}}
{{--                                            {{formatCurrency($plan->price_yearly,getWorkspaceCurrency($super_settings))}} <span><small--}}
{{--                                                        class="text-sm   text-warning">/{{__(' year')}}</small></span>--}}
{{--                                        </h2>--}}


{{--                                    </div>--}}
{{--                                    <div class="card-body mx-auto pt-0">--}}
{{--                                        @if($plan->features)--}}

{{--                                            @foreach(json_decode($plan->features) as $feature)--}}

{{--                                                <div class="justify-content-start d-flex px-2 py-1">--}}
{{--                                                    <div>--}}
{{--                                                        <i class="fas fa-check text-info text-sm"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="ps-2">--}}
{{--                                                        <span class="text-sm">{{$feature}}</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            @endforeach--}}

{{--                                        @endif--}}

{{--                                    </div>--}}
{{--                                    <div class="card-footer pt-0">--}}
{{--                                        <a href="/signup" class="btn w-100 bg-purple-light text-purple mb-0">--}}
{{--                                            {{__('Get Started')}}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

    </section>


    <section class="py-7 position-relative">

        <div id="carousel-testimonials" class="carousel slide carousel-team">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row align-items-center">
                            @if (!empty($landingpage->testimonial_image))
                            <div class="col-md-5 p-lg-5 ms-lg-auto">
                                <div class="p-3">
                                    <img class="w-100 border-radius-md"
                                         src="{{PUBLIC_DIR}}/uploads/{{$landingpage->testimonial_image}}"
                                    >
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-5 col-md-7 me-lg-auto position-relative">
                                <p class="text-sm font-weight-bold mb-1"> @if (!empty($landingpage))
                                        {{$landingpage->testimonial_subtitle}}
                                    @endif</p>
                                <h3 class="text-dark">
                                    @if (!empty($landingpage))
                                        {{$landingpage->testimonial_title}}
                                    @endif
                                </h3>
                                <p class="my-4">
                                    <i>
                                        @if (!empty($landingpage))
                                            {{$landingpage->testimonial_paragraph}}
                                        @endif
                                    </i>
                                </p>
                                <div class="author align-items-center">
                                    <div class="name ps-2">
                                        <span>@if (!empty($landingpage))
                                                {{$landingpage->testimonial_author}}
                                            @endif
                                        </span>

                                    </div>

                                <div class="w-25 ms-auto opacity-2 mt-n8">
                                    <svg width="110px" height="110px" viewBox="0 0 270 270" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>quote-down</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z" fill="#48484A" fill-rule="nonzero" transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) "></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection