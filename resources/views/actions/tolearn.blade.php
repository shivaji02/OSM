@extends('layouts.primary')


@section('content')

    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('To Learns')}}
            </h5>

        </div>

        <div class="col text-end">
            <a href="/add-tolearn" type="button" class="btn btn-info">
                {{__('Add Things to Learn')}}

            </a>


        </div>

    </div>


    <div class="page-header mb-4 border-radius-lg">
        <span class="mask bg-light-blue"></span>
        <div class="container">
            <div class="row">
                <p class="col-lg-6 my-auto">

                <h5 class="text-info fadeIn2 fadeInBottom mt-4">
                    {{__('Learn Something New')}}

                </h5>
                <p class=" text-info opacity-8 fadeIn3 fadeInBottom">
                    {{__('“Learning never exhausts the mind.”')}}

                </p>
                <p class=" text-info opacity-8 fadeIn3 fadeInBottom">{{__('– Leonardo da Vinci')}} </p>
                <p class="text-info opacity-8 fadeIn3 fadeInBottom">
                    {{__('“Want to earn more? Learn More”')}}

                </p>


            </div>

        </div>


    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{__('To Learns List')}}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">

                        @foreach($to_learns as $to_learn)
                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h5 class="mb-3">{{$to_learn->title}}</h5>
                                    <span class="text-xs mb-4">{{__('Start Learning')}}
                                        <span class="text-dark ms-sm-2 font-weight-bold">
                                            {{(\App\Supports\DateSupport::parse($to_learn->start_date))->format(config('app.date_format'))}}
                                        </span></span>

                                    <span class="text-xs">{{__('Date to Finish:')}} <span class="text-dark ms-sm-2 font-weight-bold"> {{(\App\Supports\DateSupport::parse($to_learn->end_date))->format(config('app.date_format'))}}
                                            </span></span>
                                </div>
                                <div class="ms-auto text-end">

                                    <a class="btn btn-link text-dark px-3 mb-0" href="/view-tolearn?id={{$to_learn->id}}"><i class="fas fa-file-alt text-dark me-2" aria-hidden="true"></i>{{__('View')}}</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="/add-tolearn?id={{$to_learn->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>{{__('Edit')}}</a>

                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="/delete/to-learn/{{$to_learn->id}}"><i class="far fa-trash-alt me-2"></i>{{__('Delete')}}</a>

                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </div>


@endsection




