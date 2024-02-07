@extends('layouts.super-admin-portal')

@section('content')

    <div class="row mb-2">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Email Addresses of the Newsletter Subscribers')}}
            </h5>

        </div>
        <div class="col text-end">
            <a href="/export-subscribers" class="btn btn-info">{{__('Export')}}</a>
        </div>


    </div>

    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{__('Email')}}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{__('Created_at')}}</th>


                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($emails as $email)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$email->email}} </h6>
                                                    <p class="text-xs text-secondary mb-0"></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$email->created_at}}</p>

                                        </td>



                                        <td class="align-middle">

                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="delete/newsletter-email/{{$email->id}}"><i class="far fa-trash-alt me-2"></i>{{__('Delete')}}</a>

                                        </td>
                                    </tr>


                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
