@extends('layouts.super-admin-portal')
@section('content')

    <div class="row mb-5">
        <div class="col-lg-3 mb-3">
            <div class="card position-sticky top-1">
                <ul class="nav flex-column bg-white border-radius-lg p-3">
                    <li class="nav-item pt-2">
                        <a class="nav-link text-body" data-scroll="" href="#basic-info">
                            <div class="icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                </svg>
                            </div>
                            <span class="text-sm"> {{__('Email Settings')}}</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-lg-9 mt-lg-0">
            <!-- Card email setting -->

            <div class="card">
                <div class="card-header">
                    <h5>{{__('Email Settings')}}</h5>
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data" action="/save-email-setting" method="post">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="" id="basic-info">
                            <div class="">
                                <div class="row mb-4">
                                    <label class="form-label">{{__('SMTP Host')}}</label>

                                    <div class="input-group">
                                        <input id="host" name="smtp_host" value="{{$settings['smtp_host'] ?? ''}}"
                                               class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="form-label">{{__('SMTP Username')}}</label>

                                    <div class="input-group">
                                        <input id="username" name="smtp_username" value="{{$settings['smtp_username'] ?? ''}}"
                                               class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label">{{__('SMTP Password')}}</label>

                                    <div class="input-group">
                                        <input id="password" name="smtp_password" value="{{$settings['smtp_password'] ?? ''}}"
                                               class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label">{{__('SMTP Port')}}</label>

                                    <div class="input-group">
                                        <input id="port" name="smtp_port" value="{{$settings['smtp_port'] ?? ''}}"
                                               class="form-control" type="number">
                                    </div>
                                </div>

                                @csrf
                                <button class="btn btn-dark btn-sm float-left mt-4 mb-0">{{__('Update')}} </button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>



@endsection
