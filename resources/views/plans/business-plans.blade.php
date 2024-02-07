@extends('layouts.primary')
@section('content')

    <div class="row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Business Plans')}}
            </h5>

        </div>

        <div class="col text-end">
            <a  href="/write-business-plan" type="button" class="btn btn-info">
                {{__('Write your Business Plan')}}

            </a>
        </div>

    </div>

    <div class="page-header border-radius-lg mb-4">
        <span class="mask bg-light-blue"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-auto">
                    <h5 class="text-info fadeIn2 fadeInBottom mt-4">
                        {{__('Turn Your Idea into Real Business.')}}

                    </h5>
                    <p class="text-info opacity-8 fadeIn3 fadeInBottom">
                        {{__('Plan for your Dream Business ')}}

                    </p>
                </div>
            </div>


        </div>
    </div>

    <div class="row">

        @foreach($plans as $plan)
            <div class="col-md-4 mb-4">
                <div class="card card-pricing ">
                    <div class="card-header bg-light-blue  text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative ">
                            <h5 class="mt-6">{{$plan->company_name}} </h5>
                            <h3 class="text-info mt-2 mb-2">
                                {{__('Business Plan')}}</h3>
                            <h6 class="">
                                @if(!empty($plan->date))
                                    {{(\App\Supports\DateSupport::parse($plan->date))->format(config('app.date_format'))}} @endif
                            </h6>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <p class="">{{__('Prepared by')}}</p>
                        <h5>{{$plan->name}}</h5>
                        <h6 class="">{{$plan->email}}</h6>

                    </div>

                    <div class="card-body text-center">

                        <a href="/view-business-plan?id={{$plan->id}}" type="button" class="btn btn-success mb-3">
                            {{__('Read')}}
                        </a>
                        <a class="btn btn-info mb-3" href="/write-business-plan?id={{$plan->id}}">{{__('Edit')}}</a>
                        <a href="/delete/business-plan/{{$plan->id}}" type="button" class="btn btn-warning">{{__('Delete')}}</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


@endsection
