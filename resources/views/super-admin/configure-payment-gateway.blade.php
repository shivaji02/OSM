@extends('layouts.super-admin-portal')
@section('content')

    <div class="card">
        <div class="card-header">
            {{__('Configure payment gateway')}}
        </div>

        <div class="card-body pt-0">

            <form action="/configure-gateway" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @switch($api_name)

                    @case('paypal')

                    <h5 class="mb-3">{{__('PayPal')}}</h5>

                    <div class="mb-3">
                        <label for="Paypal Client ID">{{__('Paypal Client ID')}}</label>
                        <input name="username" class="form-control"
                               value="{{$gateway->username ?? ''}}"
                        >
                        <input type="hidden" name="api_name" value="paypal">

                    </div>

                    <div class="mb-3">
                        <label for="Paypal Password">{{__('Paypal Client Secret')}}</label>
                        <input type="password" name="password" class="form-control"
                               value="{{$gateway->password ?? ''}}"
                        >
                    </div>

                    @break


                    @case('stripe')

                    <h5 class="mb-3">{{__('Stripe')}}</h5>

                    <div class="form-group">
                        <label for="Public Key">{{__('Public Key')}}</label>
                        <input type="text" name="public_key" @if (!empty($gateway)) value="{{$gateway->public_key}}"@endif class="form-control" id="public_key">
                    </div>

                    <div class="form-group">
                        <label for="Private Key">{{__('Private Key')}}</label>
                        <input type="text" name="private_key" @if (!empty($gateway)) value="{{$gateway->private_key}}"@endif class="form-control" id="private-key">
                    </div>
                    <input type="hidden" name="api_name" value="stripe">

                    @break


                @endswitch



                @csrf

                @if($gateway)
                    <input type="hidden" name="id" value="{{$gateway->id}}">
                @endif


                <button type="submit" class="btn btn-success">{{__('Save')}}</button>


            </form>

        </div>





    </div>



@endsection


