
@extends('layouts.primary')


@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{__('Plan Your Week')}}</h5>

        </div>
        <div class="card-body">
            <form action="/save-weeklyplan" method="post">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">{{__('Title')}} </label><span class="text-danger">*</span>
                    <input class="form-control" type="text" name="title" id="example-text-input"
                           @if (!empty($plan)) value="{{$plan->title}}" @endif>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">
                                {{__('From Date')}}

                            </label>
                            <input class="form-control"  name="from_date"   id="fromdate"
                                   @if(!empty($plan))
                                   value="{{$plan->from_date}}"
                                   @else
                                   value="{{date('Y-m-d')}}"
                                @endif>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">
                               {{__('To Date')}}

                            </label>
                            <input class="form-control" name="to_date" id="todate"
                                   @if(!empty($plan))
                                   value="{{$plan->to_date}}"
                                   @else
                                   value="{{date('Y-m-d')}}"
                                @endif>
                        </div>

                    </div>
                </div>




                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                {{__('Monday')}}

                            </label>
                            <textarea class="form-control" name="monday" id="monday" rows="10">@if(!empty($plan)) {{$plan->monday}}@endif</textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Tuesday')}}</label>
                            <textarea class="form-control" name="tuesday" id="tuesday" rows="10">
                                @if(!empty($plan)){{$plan->tuesday}}@endif</textarea>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Wednesday')}}</label>
                            <textarea class="form-control" name="wednesday" id="wednesday" rows="10">
                                @if(!empty($plan)){{$plan->wednesday}}@endif</textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Thursday')}}</label>
                            <textarea class="form-control" name="thursday" id="thursday" rows="10">
                                @if(!empty($plan)){{$plan->thursday}}@endif
                            </textarea>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Friday')}}</label>
                            <textarea class="form-control" name="friday" id="friday" rows="10">
                                @if(!empty($plan)){{$plan->friday}}@endif
                            </textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Saturday')}}</label>
                            <textarea class="form-control" name="saturday" id="saturday" rows="10">
                                @if(!empty($plan)){{$plan->saturday}}@endif
                            </textarea>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Sunday')}}</label>
                            <textarea class="form-control" name="sunday" id="sunday" rows="10">
                                @if(!empty($plan)){{$plan->sunday}}@endif
                            </textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('Notes')}}</label>
                            <textarea class="form-control" name="notes" id="notes" rows="10"></textarea>
                        </div>

                    </div>
                </div>


                @if($plan)
                    <input type="hidden" name="id" value="{{$plan->id}}">
                @endif

                @csrf
                <button type="submit" class="btn bg-gradient-secondary">{{__('Save')}}</button>

            </form>


        </div>


    </div>

@endsection


@section('script')

    <script>
        "use strict";
        $(function () {


            flatpickr("#fromdate", {

                dateFormat: "Y-m-d",
            });
            flatpickr("#todate", {

                dateFormat: "Y-m-d",
            });



        });


    </script>
    <script>

        tinymce.init({
            selector: '#grateful',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,


        });
        tinymce.init({
            selector: '#saturday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
        tinymce.init({
            selector: '#sunday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
        tinymce.init({
            selector: '#monday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
        tinymce.init({
            selector: '#tuesday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false



        });
        tinymce.init({
            selector: '#wednesday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
        tinymce.init({
            selector: '#thursday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
        tinymce.init({
            selector: '#friday',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
        tinymce.init({
            selector: '#notes',

            plugins: 'lists,table',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            lists_indent_on_tab: false,
            branding: false,
            menubar:false


        });
    </script>

@endsection











