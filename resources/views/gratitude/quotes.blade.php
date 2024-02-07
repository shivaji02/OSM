@extends('layouts.primary')
@section('content')

    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Favorite Quotes')}}
            </h5>

        </div>

        <div class="col text-end">
            <a href="/add-quote" class="btn btn-info">
                {{__(' New Quote')}}
            </a>
        </div>
    </div>
    <div class="page-header border-radius-lg mb-4">
        <span class="mask bg-light-blue"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-auto">
                    <h4 class="text-info  fw-bolder mt-4">{{__('“Once you replace negative thoughts with positive ones, you will start having positive results.”')}}
                    </h4>
                    <p class="text-info opacity-8 fadeIn3 fadeInBottom">{{__('— Willie Nelson')}} </p>
                    <p class="text-info">{{__('Write your favorite quotes here to remind yourself the importance oof being positive .')}} </p>

                </div>
            </div>

        </div>
    </div>


    <!-- Button trigger modal -->



    <div class="row " data-masonry='{"percentPosition": true }'>
        @foreach($quotes as $quote)
            <div class="col-md-3 mb-4">
                <div class="card shadow-xl card-frame">
                    <div class="card-body ">
                        <span class="badge bg-purple-light fw-bolder mb-2">{{$quote->topic}}</span>
                        {!! $quote->quotes !!}
                        <div class="d-flex mt-2">

                            <a href="/add-quote?id={{$quote->id}}" class="btn btn-sm btn-info p-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Next">
                                <i class="fas fa-pen p-2"></i>
                            </a>
                            <a href="/delete/quote/{{$quote->id}}" class="btn btn-sm btn-warning p-2 mx-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Prev">
                                <i class="fas fa-trash p-2"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach



    </div>






    <!-- Modal -->





@endsection





