@extends('install.base')
@section('content')


    <h3>{{__('Focus Installation')}}</h3>
    <p>
        {{__('Database import was successful.')}}

    </p>


    <p>
        {{__('Set your admin profile on the next step.')}}
    </p>



    <a class="btn btn-primary mt-3" href="{{route('step5')}}">
        {{__('Continue')}}

    </a>


@endsection
