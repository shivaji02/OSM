@extends('layouts.primary')
@section('content')
    <div class=" row">
        <div class="col">
            <h6 class="text-secondary fw-bolder">
                {{__('Weekly Plan of')}} <span class="text-dark ms-sm-2 font-weight-bold ">
                    {{(\App\Supports\DateSupport::parse($plan->from_date))->format(config('app.date_format'))}}

                                         </span> to <span class="text-dark ms-sm-2 font-weight-bold">
                    {{(\App\Supports\DateSupport::parse($plan->to_date))->format(config('app.date_format'))}}

                                        </span>

            </h6>
        </div>

        <div class="col text-end">
            <a  href="/weekly-plans" type="button" class="btn btn-info">{{__('Go back to list')}}</a>
        </div>

    </div>

    <div class="row">
        <div class="card">

            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                            <h6 class="fw-bolder">{{__('Monday')}}</h6>



                        </li>
                        <p> {!!clean($plan->monday)!!}</p>

                    </div>
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">    <h6 class="fw-bolder">{{__('Tuesday')}}</h6>


                        </li>
                        <p> {!!clean($plan->tuesday)!!}</p>


                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">     <h6 class="fw-bolder">{{__('Wednesday')}}</h6>


                        </li>
                        <p> {!!clean($plan->wednesday)!!}</p>

                    </div>
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">       <h6 class="fw-bolder">{{__('Thursday')}}</h6>



                        </li>
                        <p> {!!clean($plan->thursday)!!}</p>


                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg"> <h6 class="fw-bolder">
                                {{__('Friday')}}
                            </h6>

                        </li>
                        <p>{!!clean($plan->friday)!!}</p>

                    </div>
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">   <h6 class="fw-bolder">{{__('Saturday')}}</h6>

                        </li>
                        <p> {!!clean($plan->saturday)!!}</p>


                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">    <h6 class="fw-bolder">{{__('Sunday')}}</h6>

                        </li>
                        <p> {!!clean($plan->sunday)!!}</p>

                    </div>



                </div>



            </div>
        </div>



    </div>
@endsection
