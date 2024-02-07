@extends('frontend.layout')
@section('title','Contact Us')
@section('content')

    <section class="">
        <div class="bg-dark position-relative">
            <img src="" class="position-absolute start-0 top-md-0 w-100 opacity-6">
            <div class="pb-lg-9 pb-7 pt-7 postion-relative z-index-2">
                <div class="row mt-4">
                    <div class="col-md-8 mx-auto text-center">

                        @if (!empty($contact))
                            <h1 class="text-warning">
                                {{$contact->title}}
                            </h1>

                        @endif

                        @if (!empty($contact))

                            <p class="text-white">
                                {{$contact->subtitle}}
                            </p>

                        @endif

                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="py-lg-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 position-relative bg-cover px-0">
                    <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                        <img src="" class="h-100 ms-n2">
                    </div>
                    <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                        <div class="mask  opacity-9"></div>
                        <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                            <h3 class="text-dark">{{__('Contact Information')}}</h3>
                            @if (!empty($contact))

                                <div class="d-flex p-2">
                                    <div>
                                        <i class="fas fa-phone text-sm"></i>
                                    </div>
                                    <div class="ps-3">

                                    <span class="text-sm opacity-8">
                                        {{$contact->phone_number}}

                                    </span>
                                    </div>
                                </div>



                            @endif


                            @if (!empty($contact))

                                <div class="d-flex p-2">
                                    <div>
                                        <i class="fas fa-envelope text-sm"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm opacity-8 text-dark">
                                            {{$contact->email}}
                                        </span>
                                    </div>
                                </div>
                            @endif

                            @if (!empty($contact))

                                <div class="d-flex p-2">
                                    <div>
                                        <i class="fas fa-map-marker-alt text-sm"></i>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-sm opacity-8">{{$contact->address_1}}</span>
                                    </div>
                                </div>


                            @endif




                            <div class="mt-4">
                                @if (!empty($contact))
                                    <a href="{{$contact->facebook}}" type="url" class="btn btn-icon-only text-dark btn-link  btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                @endif
                                @if (!empty($contact))
                                    <a href="{{$contact->twitter}}" class="btn btn-icon-only btn-link  text-dark btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                                @if (!empty($contact))
                                    <a href="{{$contact->twitter}}" type="button" class="btn btn-icon-only btn-link  text-dark btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection