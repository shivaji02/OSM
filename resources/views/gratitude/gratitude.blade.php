@extends('layouts.primary')
@section('content')


    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('My Daily Journals')}}
            </h5>
            <p class="mb-0 text-sm">
                {{__('Free your mind from the noise of thousands of thoughts and set your intention for the day. This practice has proven to be the most effective in terms of productivity and mental peace.')}}
            </p>

        </div>

        <div class="col text-end">
            <a  href="/add-five-min-journal" type="button" class="btn btn-info">{{__('New Five Minute Journal')}}</a>

        </div>

    </div>

    <div class="">
        <div class="row">
            <div class=" ">
                <div class="">
                    <div class="row mt-3">

                        @foreach($journals as $journal)
                            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 mb-4">
                                <div class="card  border-radius-lg shadow-sm text-center">
                                    <div class=" p-3">
                                        <span class="bg-gradient-light"></span>
                                        <div class="card-body">
                                            <h5 class=" fw-bolder mt-3">{{__('5 Minute Journal')}}</h5>
                                            <h6 class="text-secondary">
                                                {{(\App\Supports\DateSupport::parse($journal->date))->format(config('app.date_format'))}}</h6>
                                            <a class="text-secondary text-sm font-weight-bold mb-0 icon-move-right mt-4" href="/view-journal?id={{$journal->id}}">
                                                {{__('Read More')}}
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                            </a>
                                            <div class="mt-4">
                                                <a href="/add-five-min-journal?id={{$journal->id}}" type="button" class="btn btn-success btn-sm">
                                                    {{__('Edit')}}

                                                </a>
                                                <a href="/delete/journal/{{$journal->id}}" type="button" class=" btn btn-warning btn-sm">{{__('Delete')}}</a>

                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
