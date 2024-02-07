@extends('layouts.primary')
@section('content')
    <div class="bg-light-blue position-relative ">

        <div class="container   postion-relative  position-relative">
            <div class="row">
                <div class="col-md-7 mx-auto text-center">
                    <span class="badge bg-dark text-white mt-5">{{__('Pricing and Plans')}}</span>
                    <h3 class="text-info mt-3">{{__('Ready to get started with focus?')}}</h3>
                    <p class="text-gray mb-6">{{__('Choose the plan that best fit for you.')}}</p>
                </div>
            </div>
        </div>
    </div>

    @if($workspace->subscribed)

        <div class="row mt-4 mb-4 ms-1">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>{{__('Billing')}}</h4>
                        @if($plan)
                            <p>{{__('You are subscribed to the :plan plan.', ['plan' => $plan->name])}}</p>
                        @endif
                        @if(!empty($workspace->next_renewal_date))
                            <p><strong>{{__('Next renewal date')}}:</strong> {{date('M d Y',strtotime($workspace->next_renewal_date))}}</p>
                        @endif

                        <a href="/cancel-subscription?id={{$plan->id}}" type="button"
                           class="btn btn-warning btn-sm mt-3 ">{{__('Cancel Subscription')}}</a>
                    </div>
                </div>
            </div>
        </div>

    @endif


        <section class="mt-4">
            <div class="ms-2 me-2">
                <div class="row">
                    @foreach($plans as $plan)
                        <div class="card mb-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h4 class="text-uppercase text-info">{{$plan->name}}</h4>
                                        <p>{!! $plan->description !!}</p>
                                        <div class="row mt-5 mb-2">
                                            <div class="col-lg-3 col-12">
                                                <h6 class="text-dark tet-uppercase">{{__('What is included')}}</h6>
                                            </div>

                                        </div>
                                        <div class="row">

                                            @if($plan->features)

                                                @foreach(json_decode($plan->features) as $feature)

                                                    <div class="col-lg-6 col-md-6 col-12 ps-0">
                                                        <div class="d-flex align-items-center p-2">
                                                            <div class="icon icon-shape icon-xs rounded-circle bg-gradient-dark opacity-6 shadow text-center">
                                                                <i class="fas fa-check opacity-10"></i>
                                                            </div>
                                                            <div>
                                                                <span class="ps-2">{{$feature}}</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                @endforeach


                                            @endif


                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 my-auto">
                                    <div class="card-body text-center">

                                        @if($plan->price_monthly)
                                            <h6 class="mt-sm-4 mt-0 mb-0">{{__('Monthly Price')}}</h6>
                                        <h3 class="mt-0">
                                            {{formatCurrency($plan->price_monthly,getWorkspaceCurrency($settings))}}</h3>
                                        @endif
                                            @if($plan->price_yearly)
                                        <h6 class="mt-sm-4 mt-0 mb-0">{{__('Yearly Price')}}</h6>
                                        <h3 class="mt-0">
                                            {{formatCurrency($plan->price_yearly,getWorkspaceCurrency($settings))}}</h3>
                                            @endif
 </div>

                                </div>

                                <div class="">



                                    @if($plan->price_monthly && $plan->price_monthly > 0)
                                        <a href="/subscribe?id={{$plan->id}}&term=monthly" type="button" class="btn btn-info mt-3">{{__('Pay Monthly')}}</a>

                                    @endif

                                    @if($plan->price_yearly && $plan->price_yearly > 0)

                                        <a href="/subscribe?id={{$plan->id}}&term=yearly" type="button" class="btn bg-gradient-dark mt-3">{{__('Pay Yearly')}}</a>

                                    @endif

                                        @if($plan->price_monthly && $plan->price_monthly == 0)
                                            <a href="/subscribe?id={{$plan->id}}&term=free_plan" type="button"
                                               class="btn btn-success btn-sm ">{{__('free Plan')}}</a>
                                        @endif

                                        @if($workspace->plan_id == $plan->id)

                                            <span class="badge bg-indigo text-white text-center my-3">{{__('Current Plan')}}</span>
                                        @endif

                                </div>



                            </div>


                        </div>

                    @endforeach

                </div>
            </div>
        </section>






@endsection

