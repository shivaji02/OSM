@extends('layouts.primary')



@section('content')
    <div class=" row">
        <div class="col">
            <h5 class="text-secondary fw-bolder">
                {{__('New Board')}}
            </h5>

        </div>
        <div class="col text-end">


            <a href="/visionboard" class="btn btn-info  mb-3">{{__('Vision Board')}}</a>

        </div>


    </div>




        <form action="/vision-board" class="form-control dropzone" id="dropzone" >
            <div class="col-sm-6 mx-auto">
                <label class="mx-auto">{{__('Choose Category')}}</label>&nbsp;
                <select class="form-control" name="category_id" id="choices-category-edit">
                    <option value="0">{{__('None')}}</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}"
                                @if (!empty($image))
                                @if ($image->category_id === $image->id)
                                selected
                                @endif
                                @endif
                        >{{$category->name}} </option>
                    @endforeach
                </select>

            </div>
            <div class="fallback">
                <input name="file" type="file" multiple />

            </div>
        </form>


    <div class="row mt-4 has-lightbox-images" data-masonry='{"percentPosition": true }'>
        @foreach($images as $image)
            <div class="col-md-4 mb-4">

                <div class="card">
                    <div class="card-body">
                        <a class="lightbox-image" href="{{asset(PUBLIC_DIR.'/uploads/'.$image->path)}}"><img
                                    src="{{asset(PUBLIC_DIR.'/uploads/'.$image->path)}}"
                                    class="w-100 shadow-1-strong rounded mb-3"
                                    alt=""
                            /></a>
                        <a  href="/delete/image/{{$image->id}}"  type="button">
                            <i class="fas fa-trash p-2"></i> {{__('Delete')}}
                        </a>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
    <!-- Gallery -->

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


