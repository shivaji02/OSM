@extends('layouts.primary')
@section('content')



    <div class="col-lg-12 col-12 mt-4 mt-lg-0">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <div class="row mb-4">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">{{$tolearn->topic}}</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a href="/add-tolearn?id={{$tolearn->id}}" class="btn btn-outline-primary btn-sm mb-0">{{__('Edit')}}
                        </a>
                        <a href="/tolearn" class="btn btn-outline-primary btn-sm mb-0">
                            {{__('List tolearns')}}
                        </a>

                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="row mb-4">
                    <div class="col">
                        <h6>{{__('Start date')}}</h6>
                        <span>
                                            <div class="ms-auto">
                            <span class="badge badge-sm bg-gradient-success">@if(!empty($tolearn->start_date))
                                    {{$tolearn->start_date->format(config('app.date_format'))}}
                                @endif</span>
                        </div>

                                        </span>
                    </div>
                    <div class="col">
                        <h6>{{__('End date')}}</h6>
                        <span>
                                            <div class="ms-auto">
                            <span class="badge badge-sm bg-gradient-dark">@if(!empty($tolearn->end_date))
                                    {{$tolearn->end_date->format(config('app.date_format'))}}
                                @endif</span>
                        </div>

                                        </span>
                    </div>


                </div>
                <div class="d-flex bg-gray-100 border-radius-lg p-3 mb-4">
                    <h4 class="my-auto">
                        <span class="text-secondary text-sm me-1"></span>{{$tolearn->title}}<span class="text-secondary text-sm ms-1"></span>
                    </h4>

                </div>
                <div class="">
                    {!! $tolearn->descriiption !!}

                </div>

            </div>



        </div>
    </div>







@endsection
