@extends('layouts.primary')

@section('content')

    <div class="row mb-2">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Dashboard')}}
            </h5>

        </div>

        @if($trial_will_expire)
            <div class="col text-end mb-2">
                <span class="badge h6 bg-warning-light text-warning">{{__('Trial Expiring in')}} {{$trial_will_expire->diffForHumans()}}</span>

            </div>

        @endif

    </div>

    <div class="">
        <div class="row">
            <div class="col-xl-5 ms-auto mt-xl-0">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-sm bg-gradient-dark border-radius-lg">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7"></p>
                                        <h6 class="text-white font-weight-bolder mb-0">
                                            {{(\App\Supports\DateSupport::now())->format(config('app.date_time_format'))}}
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    @if(empty($modules) || in_array('goals',$modules))
                        <div class="col-md-6">
                            <div class="card shadow-sm border-radius-lg">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="numbers">
                                                <h4 class="mb-0 text-capitalize fw-bolder">
                                                    {{$total_goals}}
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-5 text-end">

                                            <div class="icon icon-shape rounded-circle bg-green-light ms-auto text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-check2-square text-success mt-3" viewBox="0 0 16 16">
                                                    <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                                    <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        <a href="/goals" class="text-sm fw-bold">
                                            {{__('Total Goals')}}

                                        </a>

                                    </p>
                                </div>
                            </div>

                        </div>
                    @endif

                    @if(empty($modules) || in_array('plans',$modules))
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="card shadow-sm border-radius-lg">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="numbers">
                                                <h4 class="mb-0 text-capitalize fw-bolder">
                                                    {{$total_plans}}
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-5 text-end">
                                            <div class="icon icon-shape rounded-circle bg-pink-light ms-auto text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-x-diamond text-danger ms-auto  mt-3" viewBox="0 0 16 16">
                                                    <path d="M7.987 16a1.526 1.526 0 0 1-1.07-.448L.45 9.082a1.531 1.531 0 0 1 0-2.165L6.917.45a1.531 1.531 0 0 1 2.166 0l6.469 6.468A1.526 1.526 0 0 1 16 8.013a1.526 1.526 0 0 1-.448 1.07l-6.47 6.469A1.526 1.526 0 0 1 7.988 16zM7.639 1.17 4.766 4.044 8 7.278l3.234-3.234L8.361 1.17a.51.51 0 0 0-.722 0zM8.722 8l3.234 3.234 2.873-2.873c.2-.2.2-.523 0-.722l-2.873-2.873L8.722 8zM8 8.722l-3.234 3.234 2.873 2.873c.2.2.523.2.722 0l2.873-2.873L8 8.722zM7.278 8 4.044 4.766 1.17 7.639a.511.511 0 0 0 0 .722l2.874 2.873L7.278 8z"/>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        <a href="/plans" class="text-sm fw-bold">
                                            {{__('Total Plans')}}
                                        </a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    @endif

                </div>
                <div class="row mt-4">
                    @if(empty($modules) || in_array('notes',$modules))
                        <div class="col-md-6">
                            <div class="card shadow-sm border-radius-lg">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="numbers">
                                                <h4 class="mb-0 text-capitalize fw-bolder">
                                                    {{$total_notes}}
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-5 text-end">
                                            <div class="icon icon-shape rounded-circle bg-purple-light ms-auto text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-pencil-square text-purple mt-3" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2">
                                        <a href="/notes" class="text-sm fw-bold ">
                                            {{__('Total Notes')}}
                                        </a>

                                    </p>
                                </div>
                            </div>
                        </div>

                    @endif


                    @if(empty($modules) || in_array('projects',$modules))
                            <div class="col-md-6 mt-md-0 mt-4">
                            <div class="card shadow-sm border-radius-lg">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="numbers">
                                                <h4 class="mb-0 text-capitalize fw-bolder">
                                                    {{$total_projects}}

                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-5 text-end">
                                            <div class="icon  icon-shape rounded-circle bg-light-blue ms-auto text-center">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-grid text-info mt-3" viewBox="0 0 16 16">
                                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2">
                                        <a href="/projects" class="text-sm fw-bold">
                                            {{__('Total Projects')}}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            </div>
                        @endif
                </div>
            </div>

            @if(empty($modules) || in_array('to_dos',$modules))

                <div class="col-xl-7">
                    <div class="card shadow-sm border-radius-lg " id="v-pills-tabContent">
                        <div class="tab-pane fade show position-relative active " id="cam1" role="tabpanel">
                            <div class="card bg-purple-light h-100 border-radius-lg">

                                <div class=" position-relative z-index-1 d-flex flex-column h-100 p-3">
                                    <h6 class=" font-weight-bolder mb-4 pt-2">{{__('Todays to-do')}}<span class="float-end"><a  href="/add-task" class="btn btn-info rounded-circle p-2 mx-2 mb-0" type="button">
                                                <i class="fas fa-plus p-2 "></i>

                                            </a></span></h6>


                                    <ul class="list-group  list-group-flush" data-toggle="checklist ">
                                        @foreach($todos as $todo)

                                            <div class="checklist-item checklist-item-primary ps-2  ms-3 mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input  todo_checkbox" type="checkbox"
                                                               data-id="{{$todo->id}}"

                                                               @if($todo->completed) checked

                                                            @endif

                                                        >
                                                    </div>
                                                    @if($todo->completed)
                                                        <h6 class="mb-0 ms-2 text-decoration-line-through text-purple font-weight-bold text-sm">{{$todo->title}}</h6>
                                                        @else
                                                        <h6 class="mb-0 ms-2 text-secondary  font-weight-bold text-sm">{{$todo->title}}</h6>

                                                    @endif


                                                </div>

                                            </div>

                                        @endforeach

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            @endif




        </div>

        @if(empty($modules) || in_array('projects',$modules))


            <div class="card shadow-sm border-radius-lg mt-4">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">{{__('Recent Projects')}}</h6>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                {{__('Project Name')}}
                            </th>

                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-7">
                                {{__('Start Date')}}

                            </th>

                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">{{__('End Date')}}</th>

                            <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-7">
                                {{__('Status')}}

                            </th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($recent_projects as $project)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="avatar rounded-circle me-3 bg-light-blue border-radius-md p-2">
                                            <h6 class="text-info text-uppercase">{{$project->title['0']}}</h6>
                                        </div>
                                        <a href="/view-project?id={{$project->id}}" class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$project->title}}</h6>

                                        </a>
                                    </div>
                                </td>


                                <td class="align-middle text-center">
                                    <span class="badge bg-purple-light fw-bolder">
                                        @if(!empty($project->start_date))
                                            {{(\App\Supports\DateSupport::parse($project->start_date))->format(config('app.date_format'))}}
                                        @endif

                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="badge bg-pink-light text-danger  font-weight-bold">  @if(!empty($project->end_date))  {{(\App\Supports\DateSupport::parse($project->end_date))->format(config('app.date_format'))}}

                                        @endif
                                        </span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="badge bg-info-light fw-bolder">{{$project->status}}</span>
                                </td>
                                <td>
                                    <a class="btn btn-link text-dark float-end px-3 mb-0" href="/create-project?id={{$project->id}}"><i class="fas  fa-pen text-dark me-2" aria-hidden="true"></i>{{__('Edit')}}</a>
                                    <a class="btn btn-link text-dark float-end px-3 mb-0" href="/view-project?id={{$project->id}}"><i class="fas fa-file-alt text-dark me-2" aria-hidden="true"></i>{{__('View')}}</a>

                                </td>

                            </tr>



                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        @endif

        <div class="row">


            @if(empty($modules) || in_array('notes',$modules))

                <div class="col-xl-7 mt-4">
                    <div class="card shadow-sm border-radius-lg" id="v-pills-tabContent">
                        <div class="" id="cam1" role="tabpanel">
                            <div class="">

                                <div class=" position-relative z-index-1 d-flex flex-column h-100 p-3">
                                    <h6 class="text-dark font-weight-bolder mb-4 pt-2">{{__('Recent Notes')}}<span class="float-end"><a  href="/add-note" class="btn btn-info btn-sm mx-2 mb-0" type="button"> <i class="fas fa-plus p-2"></i> {{__('Add Note')}}
                                            </a>
                                        </span>
                                    </h6>


                                    @foreach($recent_notes as $note)


                                        <p class="mb-2 mt-2 mb-2 fw-bolder">
                                            <a href="/view-note?id={{$note->id}}">{{$loop->iteration}}.     {{$note->title}}</a>
                                        </p>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            @endif

                <div class="col-xl-5 ms-auto mt-xl-0">

                    <div class="row mt-4">


                        @if(empty($modules) || in_array('vision_board',$modules))
                            <div class="col-md-12 mt-md-0 mt-4">
                                <div class="card shadow-sm border-radius-lg">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="numbers">
                                                    <h4 class="mb-0 text-capitalize fw-bolder">
                                                        {{$total_images}}

                                                    </h4>

                                                </div>
                                            </div>
                                            <div class="col-5 text-end">

                                                <div class="icon icon-shape rounded-circle bg-purple-light ms-auto text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-columns-gap text-purple mt-3" viewBox="0 0 16 16">
                                                        <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                        <p class="">
                                            <a href="/vision-board" class="text-sm fw-bolder">

                                                {{__('Total Vision Board Image')}}

                                            </a>

                                        </p>
                                    </div>


                                </div>
                            </div>


                        @endif


                    </div>
                    <div class="row mt-4">




                        @if(empty($modules) || in_array('five_minute_journal',$modules))

                            <div class="col-md-12 mt-md-0 mt-4">
                                <div class="card shadow-sm border-radius-lg">

                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="numbers">
                                                    <h4 class="mb-0 text-capitalize fw-bolder">
                                                        {{$total_journals}}

                                                    </h4>

                                                </div>
                                            </div>
                                            <div class="col-5 text-end">

                                                <div class="icon icon-shape rounded-circle bg-green-light ms-auto text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-check2-square text-success mt-3" viewBox="0 0 16 16">
                                                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                                        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="">
                                            <a href="/gratitude" class="text-sm fw-bolder">

                                                {{__('Total Five Minute Journal')}}

                                            </a>

                                        </p>
                                    </div>

                                </div>
                            </div>



                        @endif


                    </div>
                </div>




        </div>



        <div class="row mt-4">

            @if(empty($modules) || in_array('calendar',$modules))

                <div class="col-lg-5 ms-auto mb-4">
                    <div class="card shadow-sm border-radius-lg">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">{{__('Recent Events')}}</h6>

                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body border-radius-lg p-3">

                                @foreach($recent_events as $event)

                                    <div class="d-flex mt-4">
                                        <div>
                                            <div class="icon icon-shape bg-light-blue shadow text-center border-radius-md shadow-none">
                                                <i class="ni ni-bell-55 text-lg text-info  opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-dark text-sm">{{$event->title}}</h6>

                                                <span class="text-sm">

                                                    {{(\App\Supports\DateSupport::parse($event->start_date))->format(config('app.date_time_format'))}}---
                                                    <span class="text-sm">
                                                        {{(\App\Supports\DateSupport::parse($event->end_date))->format(config('app.date_time_format'))}}---


                                                        </span></span>




                                            </div>


                                        </div>


                                    </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>




            @endif

                @if(empty($modules) || in_array('goals',$modules))

                    <div class="col-md-7 ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow-sm mb-4">
                                    <div class="card-header pb-0">
                                        <h6>{{__('Goals')}}</h6>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">{{__('Name')}}</th>
                                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">{{__('Estimate Date to finish')}}</th>
                                                    <th class="text-center  text-uppercase text-secondary text-xs font-weight-bolders opacity-7">{{__('Completed?')}}</th>



                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($goals as $goal)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-3">

                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 "><a href="/set-goal?id={{$goal->id}}">{{$goal->name}}</a></h6>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>

                                                            <span class="text-sm font-weight-bold">
                                                                {{(\App\Supports\DateSupport::parse($goal->date))->format(config('app.date_format'))}}
                                                               </span>

                                                        </td>

                                                        <td class="text-sm text-center p-3 px-6 ">
                                                            <div class="form-check text-center ">
                                                                <input class="form-check-input goal_checkbox" type="checkbox"
                                                                       data-id="{{$goal->id}}"

                                                                       @if($goal->completed) checked @endif

                                                                >

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
                    </div>




                @endif



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



