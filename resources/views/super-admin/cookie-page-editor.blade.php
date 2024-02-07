@extends('layouts.super-admin-portal')

@section('content')

    <h5 class="mb-3">{{__('Cookie Policy Page Text Editor')}}</h5>

    <div class="btn-group mt-2">
        <button class="btn btn-info btn-xs" type="button" data-bs-toggle="offcanvas" data-bs-target="#hero" aria-controls="offcanvasRight">
            <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
        </button>

    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="hero" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">{{__('Hero Section ')}}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <form action="/save-cookie-section" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="offcanvas-body">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>
                    <input type="text" name="title" class="form-control" id="title"  value="{{$term->title ?? old('title') ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="form-control-label">
                        {{__('Date')}}

                    </label>
                    <span class="text-danger">*</span>
                    <input class="form-control"  name="date" type="date" value="{{date('Y-m-d')}}" id="date"
                           @if(!empty($term))
                           value="{{$term->date}}"
                           @else
                           value="{date('Y/m/d')}"
                            @endif>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Cookie Policy')}}</label>
                    <textarea class="form-control" name="description" id="privacy" rows="8">{{$term->description ?? old('description') ?? ''}}</textarea>
                </div>
                @csrf

                @if (!empty($term))
                    <input type="hidden" name="id" value="{{$term->id}}">
                @endif
                <div class="button-row text-left mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                </div>

            </div>
        </form>
    </div>

    <section class="">
        <div class="bg-dark position-relative">
            <img src="" class="position-absolute start-0 top-md-0 opacity-6">
            <div class="pb-lg-9  pt-7 postion-relative z-index-2">
                <div class="row mt-4">
                    <div class="col-md-8 mx-auto text-center">

                        @if (!empty($term))
                            <h1 class="text-warning">
                                {{$term->title}}
                            </h1>
                        @endif

                        <p class="text-white">
                            {{__('updated')}} @if (!empty($term))
                                {{$term->date}}
                            @endif

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-7 position-relative">

        <div id="carousel-testimonials" class="carousel slide carousel-team">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-12 col-md-7 me-lg-auto position-relative">
                                <p class="mb-1">
                                    @if (!empty($term))
                                        {!! $term->description !!}
                                    @endif

                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection


@section('script')

    <script>
        "use strict";

        $(function () {

            flatpickr("#date", {

                dateFormat: "Y-m-d",
            });

        });

    </script>
    <script>
        tinymce.init({
            selector: '#privacy',
            plugins: 'table,code',
            branding: false,

        });
    </script>

@endsection




