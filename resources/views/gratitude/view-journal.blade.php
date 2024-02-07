@extends('layouts.primary')


@section('content')

    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Journal of  - ')}}{{$journal->date->format(config('app.date_format'))}}
            </h5>

        </div>

        <div class="col text-end">
            <a href="/add-five-min-journal?id={{$journal->id}}" type="button" class="btn btn-info btn-sm">
                {{__('Edit')}}

            </a>
            <a href="/delete/journal/{{$journal->id}}" type="button" class=" btn btn-warning btn-sm">{{__('Delete')}}</a>
            <a  href="/gratitude" type="button" class="btn btn-sm btn-success">{{__('Go back to list')}}</a>


        </div>

    </div>

<div class="row">
    <div class="card">

        <div class="card-body">

            <div class="row">
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">
                        <h6 class="fw-bolder">{{__('2 things I am grateful for')}}</h6>

                    </li>
                    <p> {!!clean($journal->grateful)!!}</p>

                </div>
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">    <h6 class="fw-bolder">{{__('What would make me feel great today')}}</h6>


                    </li>
                    <p> {!!clean($journal->feeling)!!}</p>


                </div>


            </div>
            <div class="row">
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">     <h6 class="fw-bolder">{{__('Daily affirmations')}}</h6>


                    </li>
                    <p> {!!clean($journal->affirmations)!!}</p>

                </div>
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">       <h6 class="fw-bolder">{{__('Favorite things of my day')}}</h6>



                    </li>
                    <p> {!!clean($journal->fav_things)!!}</p>


                </div>


            </div>
            <div class="row">
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg"> <h6 class="fw-bolder">
                            {{__('What can i do today that will bring me closer to my dream')}}
                        </h6>

                    </li>
                    <p>{!!clean($journal->dream)!!}</p>

                </div>
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">   <h6 class="fw-bolder">{{__('What positive habit i have developed')}}</h6>

                    </li>
                    <p> {!!clean($journal->habit)!!}</p>


                </div>


            </div>
            <div class="row">
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">    <h6 class="fw-bolder">{{__('I should not waste time on')}}</h6>

                    </li>
                    <p> {!!clean($journal->dont_waste)!!}</p>

                </div>
                <div class="col-md-6">

                    <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">   <h6 class="fw-bolder">{{__('What are the things i must accomplish today (Non-Negotiable)')}}</h6>


                    </li>
                    <p> {!!clean($journal->must_accomplish)!!}</p>


                </div>


            </div>
            <div class="col-md-12">

                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-yellow-light border-radius-lg">    <h6 class="fw-bolder">{{__('Other/Notes')}}</h6>


                </li>
                <p> {!!clean($journal->notes)!!}</p>


            </div>



        </div>
    </div>



</div>

@endsection
