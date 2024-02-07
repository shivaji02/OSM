@extends('layouts.primary')


@section('content')

    <div class="card">
        <div class="card-header">
            {{__('Plan for your dreams/goals')}}
        </div>

        <div class="card-body">
            <form action="/save-goal-plan" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">
                        {{__('Title')}}

                    </label><span class="text-danger">*</span>
                    <input class="form-control" name="title" type="text" id="example-text-input"  @if (!empty($plan)) value="{{$plan->title}}" @endif>
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">
                        {{__('Choose the goal to plan for')}}

                    </label><span class="text-danger">*</span>

                    <select class="form-select" aria-label="Default select example" name="goal_id">
                        <option value="0">None</option>

                        @foreach ($goals as $goal)
                            <option value="{{$goal->id}}"
                                    @if (!empty($plan))
                                    @if ($plan->goal_id == $goal->id)
                                    selected
                                @endif
                                @endif
                            >{{$goal->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="form-control-label">{{__('Date')}}</label>
                    <input class="form-control" name="date" id="date"
                           @if(!empty($plan))
                           value="{{$plan->date}}"
                           @else
                           value="{{date('Y-m-d')}}"
                    @endif">
                </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1">{{__('Write a precise plan')}}</label><span class="text-danger">*</span>
                        <textarea class="form-control" name="description" id="description" rows="3">@if (!empty($plan)){{$plan->description}}@endif</textarea>
                    </div>

                    @if($plan)
                        <input type="hidden" name="id" value="{{$plan->id}}">
                    @endif
                @csrf
                <button type="submit" class="btn btn-info">
                    {{__('Save')}}

                </button>

            </form>

        </div>

    </div>

@endsection
@section('script')

    <script>
        "use strict";
        $(function () {


            flatpickr("#date", {

                dateFormat: "Y-m-d",
            });



        });


    </script>
    <script>
        tinymce.init({
            selector: '#description',

            plugins: 'table,code',
            toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
            branding: false,
            menubar: false,


        });
    </script>


@endsection








