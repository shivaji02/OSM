@extends('layouts.primary')
@section('content')


    <div class="">
        <div class="row mb-5">


            <div class="col-lg-8 mt-lg-0 ">

                    <div class="card" id="basic-info">
                        <div class="card-header">

                            <div class="float-end">
                                <a  href="/projects" type="button" class="btn btn-sm btn-info mt-4">
                                    {{__('Go back to Project List')}}
                                </a>
                                <a href="/create-project?id={{$project->id}}" type="button" class="btn btn-sm btn-warning mt-4">{{__('Edit')}}</a>

                            </div>
                            <h5 class="mt-4">{{$project->title}}</h5>



                        </div>
                        <div class="card-body">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="fw-bolder text-secondary">{{__('Start date')}}</h6>
                                        <span>
                                            <div class="ms-auto">
                            <span class="badge badge-sm bg-purple-light">
                                @if(!empty($project->start_date))
                                    {{(\App\Supports\DateSupport::parse($project->start_date))->format(config('app.date_format'))}}@endif
                            </span>
                        </div>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <h6 class="fw-bolder text-secondary">{{__('End date')}}</h6>
                                        <span>
                                            <div class="ms-auto">
                            <span class="badge badge-sm bg-warning-light">@if(!empty($project->end_date))
                                    {{(\App\Supports\DateSupport::parse($project->end_date))->format(config('app.date_format'))}}@endif</span>
                        </div>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <h6 class="fw-bolder text-secondary">{{__('Status')}}</h6>

                                        <span class="badge bg-gradient-info font-weight-bold">{{$project->status}}</span>
                                    </div>

                                </div>


                                <h6 class="mt-4 fw-bolder">{{__('Summary')}}</h6>
                                <div class="d-flex bg-gray-100 border-radius-lg p-3">
                                    <p class="my-auto">
                                        <span class="text-secondary text-sm me-1"></span>{{$project->summary}}<span class="text-secondary text-sm ms-1"></span>
                                    </p>

                                </div>




                            </div>

                        </div>



            </div>
                <div class="card mt-3" id="basic-info">
                    <div class="card-body">

                        <h6 class="mt-4 fw-bolder">{{__('Description')}}</h6>
                        <p class="mt-4 mb-0">{!! $project->description !!}</p>


                    </div>

                </div>


        </div>
            <div class="col-md-4">
                <div class="card" id="additional_settings">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0">{{__('Project Todo list')}}</h6>

                            </div>



                            <div class="col-md-6 d-flex justify-content-end ">
                                <a  href="/add-task?for=project" type="button" class="btn btn-sm bg-gradient-dark mt-4">{{__('Add To-dos')}}</a>

                            </div>

                        </div>
                        <hr class="horizontal dark mb-0">
                    </div>
                    <div class="card-body p-3 pt-0">
                        <ul class="list-group list-group-flush" data-toggle="checklist">
                            @foreach($todos_projects as $todo)


                                <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                    <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input todo_checkbox" type="checkbox"
                                                       data-id="{{$todo->id}}"

                                                       @if($todo->completed) checked @endif

                                                >
                                            </div>
                                            <h6 class="mb-0 text-dark font-weight-bold text-sm">{{$todo->title}}</h6>  <div class="float-end">

                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="/delete/today-todo/{{$todo->id}}"><i class="far fa-trash-alt me-2"></i></a>
                                                <a class="btn btn-link text-dark px-3 mb-0" href="/add-task/?id={{$todo->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="d-flex align-items-center ms-4 mt-3 ps-1">
                                            <div>
                                                <p class="text-xs mb-0 text-secondary font-weight-bold">{{__('Date')}}</p>
                                                <span class="text-xs font-weight-bolder">{{$todo->date}}</span>
                                            </div>

                                        </div>
                                    </div>

                                    <hr class="horizontal dark mt-4 mb-0">
                                </li>

                            @endforeach



                        </ul>
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


@endsection

