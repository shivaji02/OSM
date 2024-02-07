@extends('layouts.primary')
@section('content')


    <div class="card mb-3 mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="col-md-6 text-left">
                       <h6>{{__('Users')}}</h6>

                    </div>

                </div>
                <div class="col-md-6 text-right">
{{--                    <a class="btn bg-gradient-dark mb-0" href="/new-user"><i class="fas fa-plus"></i>&nbsp;&nbsp;--}}
{{--                       {{__(' Add New User')}}--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
        <div class="card-body  p-3">

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">


                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{__('Name')}}</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{__('Email')}}</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{__('Phone')}}</th>

                                <th class="text-secondary opacity-7"></th>
                            </tr>


                            <tbody>

                            @foreach($staffs as $staff)

                                @if($staff->id == $user->id)

                                    @continue

                                @endif

                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$staff->first_name}} {{$staff->last_name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$staff->email}}</p>

                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$staff->phone_number}}</span>
                                    </td>
                                    <td class="align-middle text-right">
                                        <div class="ms-auto">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="/delete/staff/{{$staff->id}}"><i class="far fa-trash-alt me-2"></i>{{__('Delete')}}</a>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="/user-edit/{{$staff->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>{{__('Edit')}}</a>
                                        </div>




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

@endsection
