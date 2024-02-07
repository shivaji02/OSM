@extends('layouts.super-admin-portal')

@section('content')

    <div class="row ">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Dashboard')}}
            </h5>

        </div>



    </div>

    <div class="">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header mx-4 p-3 text-center ">
                                    <div class="icon icon-shape icon-lg bg-purple-light shadow text-center border-radius-lg">
                                        <i class="fas fa-coins text-purple opacity-10"></i>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">{{__('Plans')}}</h6>
                                    <span class="text-xs">{{__('Total Plans')}}</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">{{$total_plans}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <div class="card">
                                <div class="card-header mx-4 p-3 text-center">
                                    <div class="icon icon-shape icon-lg bg-light-blue shadow text-center border-radius-lg">
                                        <i class="fas fa-user text-info opacity-10"></i>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">{{__('Users')}}</h6>
                                    <span class="text-xs">{{__('Total Userss')}}</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">{{$total_users}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <div class="card">
                                <div class="card-header mx-4 p-3 text-center">
                                    <div class="icon icon-shape icon-lg bg-green-light shadow text-center border-radius-lg">
                                        <i class="fas fa-pen text-success opacity-10"></i>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">{{__('Workspaces')}}</h6>
                                    <span class="text-xs">{{__('Total Workspaces')}}</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">{{$total_workspaces}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-lg-0 mb-3">
                        <div class="card  mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">{{__('Payment Method')}}</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">

                                            <tbody>

                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img alt="Stripe" src="{{PUBLIC_DIR}}/img/stripe.svg">
                                                        </div>

                                                    </div>
                                                </td>

                                                <td>
            <span class="badge badge-dot">
              <i class="bg-info"></i>

            </span>
                                                </td>


                                                <td class="float-end">
                                                    <a href="/configure-payment-gateway?api_name=stripe" type="button" class="btn btn-info btn-md">
                                                        @if(!empty($payment_gateways['stripe']->public_key))
                                                            {{__('Edit')}}
                                                        @else
                                                            {{__('Configure')}}
                                                        @endif
                                                    </a>

                                                </td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">{{__('Workspaces')}}</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a href="/workspaces" class="btn btn-outline-primary btn-sm mb-0">{{__('View All')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">

                            @foreach($recent_workspaces as $workspaces)

                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">{{$workspaces->name}}</h6>
                                        <span class="text-xs">
                                            {{(\App\Supports\DateSupport::parse($workspaces->created_at))->format(config('app.date_time_format'))}}
                                        </span>
                                    </div>

                                </li>


                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>{{__('Users')}}</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{__('User')}}</th>


                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{__('Account Created')}}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($recent_users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @if(empty($user['photo']))
                                                        <div class="avatar avatar-md bg-light-blue border-radius-md ">
                                                            <h1 class="text-info  text-uppercase text-sm">{{$user->first_name['0']}} {{$user->last_name['0']}}</h1>
                                                        </div>
                                                    @else

                                                        <img src="{{PUBLIC_DIR}}/uploads/{{$user['photo']}}"alt="bruce" class="avatar avatar-md bg-gradient-dark border-radius-md">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center px-3" >
                                                    <h6 class="mb-0 text-sm">{{$user->first_name}} {{$user->last_name}}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                                </div>
                                            </div>
                                        </td>


                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{(\App\Supports\DateSupport::parse($user->created_at))->format(config('app.date_time_format'))}}
                                            </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="ms-auto text-end">

                                                <a class="btn btn-link text-dark px-3 mb-0" href="/user-profile?id={{$user->id}}"><i class="fas fa-file-alt text-dark me-2" aria-hidden="true"></i>{{__('View')}}</a>

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
            <div class="col-md-5 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{__('Subscription Plans')}}</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">

                            @foreach($recent_plans as $plans)

                                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">{{$plans->name}}</h6>
                                        <span class="mb-2 text-xs">{{__('Monthly Price')}} <span class="text-dark font-weight-bold ms-sm-2">{{formatCurrency($plans->price_monthly,getWorkspaceCurrency($settings))}}</span></span>
                                        <span class="mb-2 text-xs">{{__('Yearly Price')}} <span class="text-dark ms-sm-2 font-weight-bold"><a href="javascript:;">{{formatCurrency($plans->price_yearly,getWorkspaceCurrency($settings))}}</a></span></span>

                                    </div>
                                    <div class="ms-auto text-end">
                                        <a href="/subscription-plan?id={{$plans->id}}" class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>{{__('Edit')}}</a>
                                        <a  href="/delete/subscription-plan/{{$plans->id}}" class="btn btn-link text-danger px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>{{__('Delete')}}</a>
                                    </div>
                                </li>


                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection


@section('script')

    <script>
        "use strict"
        $(function () {
            $('.todo_checkbox').on('change',function () {
                let that = $(this);
                if(this.checked)
                {
                    $.post('/todos/change-status',{
                        id: that.attr('data-id'),
                        status: 'Completed',
                        _token: '{{csrf_token()}}',
                    });
                }
                else{
                    $.post('/todos/change-status',{
                        id: that.attr('data-id'),
                        status: 'Not Completed',
                        _token: '{{csrf_token()}}',
                    });
                }
            });
        });
    </script>
    <script>

        $(function () {
            $('.goal_checkbox').on('change',function () {
                let that = $(this);
                if(this.checked)
                {
                    $.post('/goals/change-status',{
                        id: that.attr('data-id'),
                        status: 'Completed',
                        _token: '{{csrf_token()}}',
                    });
                }
                else{
                    $.post('/goals/change-status',{
                        id: that.attr('data-id'),
                        status: 'Not Completed',
                        _token: '{{csrf_token()}}',
                    });
                }
            });
        });
    </script>


@endsection



