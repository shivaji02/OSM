@extends('layouts.super-admin-portal')
@section('content')

    <div class="page-header mb-4 ">
        <span class="mask bg-light-blue"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">

                    <h5 class="text-info fadeIn2 fadeInBottom mt-4 mb-4">
                        {{__('Create Plans')}}
                    </h5>

                </div>
                <div class="col mt-3 text-end">
                    <a  href="/subscription-plan" type="button" class="btn btn-info ">{{__('Create Plan')}}</a>
                </div>
            </div>



        </div>
    </div>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto text-start ">
                    <h4>{{__('Subscription Plan List')}}</h4>
                    <p class="lead">{{__('You can edit or delete the plans')}}</p>
                </div>
            </div>
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
                                        <div class="col-6">
                                            <hr class="horizontal dark">
                                        </div>
                                    </div>
                                    <div class="row">

                                        @if($plan->features)

                                            @foreach(json_decode($plan->features) as $feature)

                                                <div class="col-lg-6 col-md-6 col-12 ps-0">
                                                    <div class="d-flex p-2">
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
                                        {{formatCurrency($plan->price_monthly,getWorkspaceCurrency($settings))}}
                                    </h3>
                                    @endif
                                        @if($plan->price_yearly)
                                            <h6 class="mt-sm-4 mt-0 mb-0">{{__('Yearly Price')}}</h6>
                                            <h3 class="mt-0">
                                                {{formatCurrency($plan->price_yearly,getWorkspaceCurrency($settings))}}
                                            </h3>
                                        @endif



                                </div>

                            </div>

                            <div>

                                <a href="/subscription-plan?id={{$plan->id}}" type="button" class="btn btn-info mt-3">{{__('Edit')}}</a>
                                <a href="/delete/subscription-plan/{{$plan->id}}" type="button" class="btn btn-warning mt-3">{{__('Delete')}}</a>

                            </div>



                        </div>


                    </div>

                @endforeach

            </div>
        </div>
    </section>

@endsection
