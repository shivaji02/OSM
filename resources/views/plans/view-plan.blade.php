@extends('layouts.primary')
@section('content')

    <div class=" row mb-3" >
        <div class="col">
            <h5 class="text-secondary fw-bolder">
              {{__('Plan for')}} @if(isset($goals[$plan->goal_id]))
                    {{$goals[$plan->goal_id]->name}}
                @endif

            </h5>

        </div>

        <div class="col text-end">
            <a href="/goal-plans?id={{$plan->id}}" class="btn btn-info btn-sm mb-0">{{__('Edit')}}
            </a>
            <a href="/plans" class="btn btn-secondary btn-sm mb-0">
                {{__('Plans')}}
            </a>
        </div>

    </div>

    <div class="col-lg-12 col-12 mt-4 mt-lg-0">
        <div class="card">


            <div class="card-body">
                <h6 class="mt-4 fw-bolder">{{__('Plan Title')}}</h6>
                <div class="d-flex bg-gray-100 border-radius-lg p-3 mb-4">
                    <h6 class="my-auto">
                        <span class="text-secondary text-sm me-1"></span>{{$plan->title}}
                    </h6>


                </div>
                <h6 class="mt-4 fw-bolder">{{__('Goal Name')}}</h6>
                <div class="d-flex bg-purple-light border-radius-lg p-3 mb-4">
                    <h6 class="my-auto text-purple">
                        @if(isset($goals[$plan->goal_id]))
                            {{$goals[$plan->goal_id]->name}}
                        @endif
                    </h6>

                </div>

                <div class="">
                    {!! $plan->description !!}

                </div>

            </div>



        </div>
    </div>


@endsection
