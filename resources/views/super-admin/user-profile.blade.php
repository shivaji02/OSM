@extends('layouts.super-admin-portal')

@section('content')

    <div class="container-fluid">
        <div class="page-header min-height-150 border-radius-xl mt-4">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        @if(empty($focus_user['photo']))
                            <img src="{{PUBLIC_DIR}}/img/user-avatar-placeholder.png" class="w-100 border-radius-lg shadow-sm">
                        @else

                            <img src="{{PUBLIC_DIR}}/uploads/{{$focus_user->photo}}"alt="bruce" class="w-100 border-radius-lg shadow-sm">
                        @endif

                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{$focus_user->first_name}} {{$focus_user->last_name}}

                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                           {{$focus_user->email}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">{{__('Profile Information')}}</h6>
                            </div>
                            <div class="col-md-4 text-end">

                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <ul class="list-group">

                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">{{__('Full Name:')}}</strong> {{$focus_user->first_name}} {{$focus_user->last_name}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{{__('Mobile Number:')}}</strong> {{$focus_user->mobile_number}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{{__('Email:')}}</strong>  {{$focus_user->email}}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">{{__('Account Created:')}}</strong> {{$focus_user->created_at}}</li>

                        </ul>
                    </div>
                </div>
            </div>


            @if($focus_user_workspace->subscribed)

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0">{{__('Billing')}}</h6>
                            @if($plan)
                                <p><strong>{{__('Subscribed Plan')}}:</strong> {{$plan->name}}</p>
                            @endif
                            @if(!empty($focus_user_workspace->next_renewal_date))
                                <p><strong>{{__('Next renewal date')}}:</strong> {{date('M d Y',strtotime($focus_user_workspace->next_renewal_date))}}</p>
                            @endif
                        </div>
                    </div>
                </div>

                @endif


        </div>

    </div>




@endsection




