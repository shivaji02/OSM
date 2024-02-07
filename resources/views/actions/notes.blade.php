@extends('layouts.primary')
@section('content')


    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Notes')}}
            </h5>

        </div>

        <div class="col text-end">
            <a href="/add-note" type="button" class="btn btn-success mt-3">{{__('Take New Note')}}</a>


        </div>

    </div>

    <div class="page-header mb-4 border-radius-lg" >
        <span class="mask bg-green-light"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto mb-3">

                    <h5 class="text-success fadeIn2 fadeInBottom mt-4">{{__('Taking good notes help you learn more.')}}
                    </h5>

                </div>
            </div>



        </div>
    </div>

    <div class="row " data-masonry='{"percentPosition": true }'>
        @foreach($notes as $note)
            <div class="col-md-4 mb-4">
                <div class="card">


                    <div class="card-body">
                        <h6 class="text-purple fw-bolder text-sm text-uppercase">{{$note->topic}}</h6>
                        <a href="/view-note?id={{$note->id}}">
                            <h5 class="">
                                {{$note->title}}
                            </h5>
                        </a>
                        <p class=" fw-bolder">
                            {{(\App\Supports\DateSupport::parse($note->updated_at))->format(config('app.date_format'))}}
                        </p>


                        <a href="/add-note?id={{$note->id}}" class="btn btn-info btn-sm mb-0">{{__('Edit')}}
                        </a>
                        <a href="/delete/note/{{$note->id}}" class="btn btn-warning btn-sm mb-0">{{__('Delete')}}
                        </a>



                    </div>
                </div>

            </div>
        @endforeach



    </div>







@endsection
