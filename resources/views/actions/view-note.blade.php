@extends('layouts.primary')
@section('content')

    <div class="col-lg-12 col-12 mt-4 mt-lg-0">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <div class="row mb-4">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0 text-purple fw-bolder">{{$note->topic}}</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a href="/add-note?id={{$note->id}}" class="btn btn-info btn-sm mb-0">{{__('Edit')}}
                        </a>
                        <a href="/delete/note/{{$note->id}}" class="btn btn-warning btn-sm mb-0">{{__('Delete')}}
                        </a>

                        <a href="/notes" class="btn btn-success btn-sm mb-0">
                            {{__('List Notes')}}
                        </a>


                    </div>
                </div>
            </div>

            <div class="card-body ">
                <h4 class="my-auto fw-bolder mb-4">
                    {{$note->title}}
                </h4>

                <div class="">
                    {!! $note->notes !!}

                </div>

            </div>



        </div>
    </div>







@endsection
