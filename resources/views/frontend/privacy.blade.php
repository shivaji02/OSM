@extends('frontend.layout')
@section('title','Privacy Policy')
@section('content')

    <section class="">
        <div class="bg-dark position-relative">
            <img src="" class="position-absolute start-0 top-md-0 w-100 opacity-6">
            <div class="pb-lg-9 pb-7 pt-7 postion-relative z-index-2">
                <div class="row mt-4">
                    <div class="col-md-8 mx-auto text-center">
                        @if (!empty($privacy))
                            <h1 class="text-warning">
                                {{$privacy->title}}
                            </h1>
                        @endif
                        <p class="text-white">
                           {{__(' updated')}}
                            @if (!empty($privacy))
                                {{$privacy->date}}
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
                                    @if (!empty($privacy))
                                        {!! $privacy->description !!}
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