@extends('layouts.primary')
@section('content')
    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('Vision Board')}}
            </h5>

        </div>
        <div class="col text-end">
            <a href="/new-vision-board" class="btn btn-success  mb-3">{{__('Upload Photo')}}</a>

            <a href="/vision-categories" class="btn btn-info  mb-3">{{__('Categories')}}</a>

        </div>
    </div>

    @foreach($categories as $category)
        <a href="/visionboard?category_id={{$category->id}}"  class="btn btn-dark btn-rounded">
            <span>{{$category->name}}</span>

        </a>
    @endforeach




    <!-- Gallery -->


    <div class="row mt-3 has-lightbox-images" data-masonry='{"percentPosition": true }'>
        @foreach($images as $image)
        <div class="col-md-3 ">

            <a class="lightbox-image " href="{{asset(PUBLIC_DIR.'/uploads/'.$image->path)}}"><img
                        src="{{asset(PUBLIC_DIR.'/uploads/'.$image->path)}}"
                        class="w-100 shadow-1-strong  mb-3 border-radius-xl"
                        alt=""
                /></a>


        </div>
        @endforeach



    </div>



@endsection




@section('script')
    <script>
        "use strict"

        Dropzone.autoDiscover = false;
        Dropzone.options.dropzone = {
            acceptedFiles:'image/*'
        };

        $(function () {
            $("#dropzone").dropzone({
                url: "/vision-board",
                success: function (file, response) {
                    location.reload();
                },
                error: function (file, response) {
                    file.previewElement.classList.add("dz-error");
                },
                sending: function(file, xhr, formData){

                    formData.append('_token', '{{csrf_token()}}');
                }
            });
        })
    </script>

@endsection


