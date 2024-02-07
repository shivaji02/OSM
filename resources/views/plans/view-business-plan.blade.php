@extends('layouts.primary')
@section('content')

    <div class=" row mt-1 d-print-none">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Business Plan')}}
            </h5>

        </div>

        <div class="col text-end">

            <a href="#" onclick="window.print()" class="btn btn-info btn-sm add_event waves-effect waves-light">{{__('Print')}}</a>
            <a href="/write-business-plan?id={{$plan->id}}" class="btn btn-sm btn-warning add_event waves-effect waves-light">{{__('Edit')}}</a>
            <a href="/delete/business-plan/{{$plan->id}}" class="btn btn-sm btn-danger add_event waves-effect waves-light">{{__('Delete')}}</a>
        </div>

    </div>

    <div class="">
        <div class="col-lg-12 mx-auto">
            <div class="card card-body ">

                <div class="page-header mb-4 border-radius-xl">
                    <span class="mask bg-purple-light"></span>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-6 mb-6 text-center my-auto">

                                <h3 class="text-dark">
                                    {{$plan->company_name}}
                                </h3>

                                <h2 class="text-purple display-3 fadeIn2 fadeInBottom mt-4 mb-4">{{__('Business Plan')}}</h2>
                                <h5 class="text-muted fadeIn2 fadeInBottom">
                                    @if(!empty($plan->date))
                                        {{(\App\Supports\DateSupport::parse($plan->date))->format(config('app.date_format'))}}
                                    @endif

                                </h5>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="mt-4 text-center mt-8 mb-7">

                    <h5 class=" fadeIn2 fadeInBottom">{{__('Prepared By')}}</h5>
                    <h3>{{$plan->name}}</h3>

                    <h6 class="text-muted">{{$plan->email}}</h6>
                </div>


                    @if($plan->ex_summary)

                    <div class="text-center mt-8">
                        <h6>{{__('Executive Summary')}}</h6>


                    </div>
                    <div>
                        {!! $plan->ex_summary !!}



                    </div>
                @endif


                 @if($plan->description)
                    <div class="text-center mt-4">
                        <h6>{{__('Company description')}}</h6>
                    </div>
                    {!! $plan->description !!}

                @endif




                @if($plan->m_analysis)

                    <div class="text-center mt-4">
                        <h6>{{__('Market Analysis')}}</h6>
                    </div>
                    {!! $plan->m_analysis !!}

                @endif


                @if($plan->management)

                    <div class="text-center mt-4">
                        <h6>{{__('Organization & Management')}}</h6>
                    </div>
                    {!! $plan->management !!}


                @endif


                @if($plan->product)

                    <div class="text-center mt-4">
                        <h6>{{__('Service or product')}}</h6>
                    </div>
                    {!! $plan->product !!}


                @endif


                @if($plan->marketing)

                    <div class="text-center mt-4">
                        <h6>{{__('Marketing and sales')}}</h6>
                    </div>
                    {!! $plan->marketing !!}

                @endif



                @if($plan->budget)
                    <div class="text-center mt-4">
                        <h6>{{__('Budget')}}</h6>
                    </div>
                    {!! $plan->budget !!}

                @endif


                @if( $plan->investment )


                    <div class="text-center mt-4">
                        <h6>{{__('Investment/Funding request')}}</h6>
                    </div>
                    {!! $plan->investment !!}



                @endif



                @if($plan->finance)

                    <div class="text-center mt-4">
                        <h6>{{__('Financial projections')}}</h6>
                    </div>
                    {!! $plan->finance !!}


                @endif

                @if($plan->appendix)

                    <div class="text-center mt-4">
                        <h6>{{__('Appendix')}}</h6>
                    </div>
                    {!! $plan->appendix !!}

                @endif



                </div>



            </div>

        </div>


    </div>



@endsection
