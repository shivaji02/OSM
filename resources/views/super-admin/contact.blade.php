@extends('layouts.super-admin-portal')

@section('content')

    <h5 class="mb-3">{{__('Contact Page Text Editor')}}</h5>

    <button class="btn btn-info btn-xs" type="button" data-bs-toggle="offcanvas" data-bs-target="#hero" aria-controls="offcanvasRight">
        <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="hero" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">{{__('Hero Section ')}}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
                <form action="/save-contact-section" method="post" enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>
                    <input type="text" name="title" class="form-control" id="title"  value="{{$contact->title ?? old('title') ?? ''}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Subtitle')}}</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle"  value="{{$contact->subtitle ?? old('subtitle') ?? ''}}">
                </div>
                <div class="mb-3">
                            <label>{{__('Phone Number')}}</label>
                            <input name="phone_number" class="multisteps-form__input form-control"  value="{{$contact->phone_number ?? old('phone_number') ?? ''}}"  />
                </div>

                <div class="mb-3">
                            <label>{{__('Email')}}</label>
                            <input name="email" type="email" class="multisteps-form__input form-control"  value="{{$contact->email ?? old('email') ?? ''}}" />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Address')}}</label>
                    <textarea class="form-control" name="address_1" id="privacy" rows="4">{{$contact->address_1 ?? old('address_1') ?? ''}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Facebook')}}</label>
                    <input type="url" name="facebook" class="form-control" id="facebook"  value="{{$contact->facebook ?? old('facebook') ?? ''}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Twitter')}}</label>
                    <input type="url" name="twitter" class="form-control" id="twitter"  value="{{$contact->twitter ?? old('twitter') ?? ''}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Youtube')}}</label>
                    <input type="url" name="youtube" class="form-control" id="youtube"  value="{{$contact->youtube ?? old('youtube') ?? ''}}">
                </div>

                @csrf
                @if (!empty($contact))
                    <input type="hidden" name="id" value="{{$contact->id}}">
                @endif
                <div class="button-row text-left mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                </div>

                </form>
            </div>

    </div>

    <section class="">
        <div class="bg-dark position-relative">
            <img src="" class="position-absolute start-0 top-md-0 opacity-6">
            <div class="pb-lg-9  pt-7 position-relative z-index-2">
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