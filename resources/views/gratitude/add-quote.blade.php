@extends('layouts.primary')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="/quoteSave" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-lg-9 col-12 mx-auto">
                    <div class="card card-body mt-4">
                        <h6 class="mb-0">{{__('Add New Quote')}}</h6>

                        <hr class="horizontal dark my-3">


                        <label for="projectName" class="form-label">{{__('Topic')}}</label>
                        <input type="text"@if (!empty($quote)) value="{{$quote->topic}}"@endif   name="topic" class="form-control" id="projectName">


                        <label class="mt-4 text-sm mb-2">{{__('Write Quote')}}</label>


                        <div class="form-group">
                            <textarea class="form-control" rows="10" id="description" name="quotes">@if (!empty($quote)){{$quote->quotes}}@endif
                            </textarea>
                        </div>
                        @csrf
                        @if($quote)
                            <input type="hidden" name="id" value="{{$quote->id}}">
                        @endif

                        <div class="d-flex  mt-2 ">

                            <button type="submit" name="button" class="btn btn-info m-0 ">
                                {{__('Save')}}
                            </button>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>
@endsection

@section('script')

    <script>
        "use strict";
        $(function () {



            tinymce.init({
                selector: '#description',


                plugins: 'table,code',
                toolbar:'styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code | undo redo|numlist bullist',
                branding: false,
                menubar: false,




            });

        });


    </script>

@endsection

