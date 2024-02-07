@extends('layouts.primary')


@section('head')

    <style>


        .container {
            text-align: center;
        }

        .settings {
            margin: 0 auto;
        }

        .setting {
            background: #F3F3F3;
            border-radius: 5px;
            display: inline-block;
            padding: 20px 40px;
        }



        .setting-display {
            font-size: 2em;
            padding: 0 20px;
        }

        .controls {
            padding: 40px;
        }

        .timers {
            font-size: 4em;
        }

        button {
            background: #EEE;
            border-radius: 5px;
            font-size: 1em;
            outline: none;
        }

        button:hover {
            cursor: pointer;
        }

        .setting-button {
            height: 40px;
            width: 40px
        }

        .control-button {
            margin: 5px;
            padding: 10px 20px;
        }

        .active {
            background: #FFF;
        }

    </style>

@endsection

@section('content')

    <div class="container">
        <header>
            <h2 class="mb-4">{{__('Promodoro Clock')}}</h2>
        </header>
        <div class="settings">
            <div class="setting bg-pink-light">
                <span class="fw-bolder mx-2 ">{{__('Break Time')}}</span>
                <button id="decrease-break-time" class="setting-button">-</button>
                <span id="break-timer-minutes-setting" class="setting-display">5</span>
                <button id="increase-break-time" class="setting-button">+</button>
            </div>
            <div class="setting bg-purple-light">
                <span class="fw-bolder mx-2">{{__('Work Time')}}</span>
                <button id="decrease-work-time" class="setting-button">-</button>
                <span id="work-timer-minutes-setting" class="setting-display">25</span>
                <button id="increase-work-time" class="setting-button">+</button>
            </div>
            <div class="controls align-items-center">
                <div class=" align-items-center mt-4  mx-auto  pt-2 ">
                    <button id="start" class=" control-button btn btn-dark rounded-circle p-2  mb-0" type="button">
                        <i class="fas fa-play p-2"></i>
                    </button>
                    <button  id="stop" class=" control-button btn btn-dark rounded-circle mx-2 p-2 mb-0" type="button">
                        <i class="fas fa-pause p-2"></i>
                    </button>

                    <button id="reset" class=" control-button btn btn-dark rounded-circle p-2 mb-0" type="button">
                        <i class="fas fa-hourglass-start p-2"></i>
                    </button>
                </div>
{{--                <button id="start" class="control-button btn-outline-success">start</button>--}}
{{--                <button id="stop" class="control-button  btn-outline-danger active">stop</button>--}}
{{--                <button id="reset" class="control-button btn-outline-secondary">reset</button>--}}
            </div>
        </div>
        <div class="timers">
            <div id="work-timer">
                <span id="work-timer-minutes">25</span> : <span id="work-timer-seconds">00</span>
            </div>
            <div id="break-timer">
                <span id="break-timer-minutes">5</span> : <span id="break-timer-seconds">00</span>
            </div>
        </div>
    </div>



@endsection


@section('script')

            <script>

                var interval;

                function startWorkTimer() {
                    interval = setInterval(function() {
                        checkConditions('#work-timer');
                    }, 1000);
                }

                function startBreakTimer() {
                    clearInterval(interval);
                    interval = setInterval(function() {
                        checkConditions('#break-timer');
                    }, 1000);
                }

                function resetButtons() {
                    $('#start').removeClass('active');
                    $('#stop').addClass('active');
                }

                function checkConditions(id) {
                    if ($(id+'-seconds').text().length === 1) {
                        $(id+'-seconds').text('0' + $(id+'-seconds').text());
                    }
                    if ($(id+'-seconds').text() === '00') {
                        $(id+'-seconds').text(60);
                        $(id+'-minutes').text(parseInt($(id+'-minutes').text()) - 1);
                    }
                    $(id+'-seconds').text(parseInt($(id+'-seconds').text()) - 1);
                    if ($(id+'-seconds').text() < 10) {
                        $(id+'-seconds').text('0' + $(id+'-seconds').text());
                    }
                    if ($('#work-timer-minutes').text() === '0' && $('#work-timer-seconds').text() === '00') {
                        startBreakTimer();
                    }
                    if ($('#break-timer-minutes').text() === '0' && $('#break-timer-seconds').text() === '00') {
                        clearInterval(interval);
                    }
                }

                $(document).ready(function() {

                    // settings

                    $('#decrease-break-time').on('click', function() {
                        clearInterval(interval);
                        resetButtons();
                        if ($('#break-timer-minutes-setting').text() > 1) {
                            $('#break-timer-minutes-setting').text(parseInt($('#break-timer-minutes-setting').text()) - 1);
                            $('#break-timer-minutes').text($('#break-timer-minutes-setting').text());
                        }
                    });

                    $('#increase-break-time').on('click', function() {
                        clearInterval(interval);
                        resetButtons();
                        $('#break-timer-minutes-setting').text(parseInt($('#break-timer-minutes-setting').text()) + 1);
                        $('#break-timer-minutes').text($('#break-timer-minutes-setting').text());
                    });

                    $('#decrease-work-time').on('click', function() {
                        clearInterval(interval);
                        resetButtons();
                        if ($('#work-timer-minutes-setting').text() > 1) {
                            $('#work-timer-minutes-setting').text(parseInt($('#work-timer-minutes-setting').text()) - 1);
                            $('#work-timer-minutes').text($('#work-timer-minutes-setting').text());
                        }
                    });

                    $('#increase-work-time').on('click', function() {
                        clearInterval(interval);
                        resetButtons();
                        $('#work-timer-minutes-setting').text(parseInt($('#work-timer-minutes-setting').text()) + 1);
                        $('#work-timer-minutes').text($('#work-timer-minutes-setting').text());
                    });

                    // controls

                    $('#start').on('click', function() {
                        clearInterval(interval);
                        if ($('work-timer-minutes').text() === '0' && $('work-timer-seconds').text() === '00') {
                            startBreakTimer();
                        } else {
                            startWorkTimer();
                        }
                        $('#start').addClass('active');
                        $('#stop').removeClass('active');
                    });

                    $('#stop').on('click', function() {
                        clearInterval(interval);
                        resetButtons();
                    });

                    $('#reset').on('click', function() {
                        clearInterval(interval);
                        resetButtons();
                        $('#work-timer-minutes').text($('#work-timer-minutes-setting').text());
                        $('#work-timer-seconds').text('00');
                        $('#break-timer-minutes').text($('#break-timer-minutes-setting').text());
                        $('#break-timer-seconds').text('00');
                    });

                });

            </script>



@endsection


