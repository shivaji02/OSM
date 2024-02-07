@extends('layouts.primary')

@section('content')

    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Weekly Plans')}}
            </h5>

        </div>

        <div class="col text-end">
            <a  href="/weekly-plan" type="button" class="btn btn-info">
                {{__('Make a Weekly Plan')}}

            </a>

        </div>

    </div>

    <div class="page-header border-radius-lg mb-4">
        <span class="mask bg-light-blue"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-auto">

                    <h4 class="text-info fadeIn2 fadeInBottom mt-4">
                        {{__('“An hour of planning can save you 10 hours of doing.”')}}

                    </h4>
                    <p class="text-info opacity-8 fadeIn3 fadeInBottom">
                        {{__('— Dale Carnegie')}}

                    </p>
                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{__('List of Weekly Plans')}}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">

                        @foreach($plans as $plan)
                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 text-sm">{{$plan->title}}</h6>

                                    <span class="text-xs mb-4">
                                        {{__('From Date:')}}

                                        <span class="text-dark ms-sm-2 font-weight-bold ">
                                            {{(\App\Supports\DateSupport::parse($plan->from_date))->format(config('app.date_format'))}}

                                        </span>

                                    </span>
                                    <span class="text-xs">
                                        {{__('To Date:')}}

                                        <span class="text-dark ms-sm-2 font-weight-bold">
                                            {{(\App\Supports\DateSupport::parse($plan->to_date))->format(config('app.date_format'))}}
                                        </span>
                                    </span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-dark px-3 mb-0" href="/view-weekly-plans?id={{$plan->id}}"><i class="fas fa-file-alt text-dark me-2" aria-hidden="true"></i>{{__('View')}}</a>
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="/delete/weekly-plan/{{$plan->id}}"><i class="far fa-trash-alt me-2"></i>{{__('Delete')}}</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="/weekly-plan?id={{$plan->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>{{__('Edit')}}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>




@endsection








