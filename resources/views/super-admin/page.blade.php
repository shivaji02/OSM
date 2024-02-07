@extends('layouts.super-admin-portal')
@section('content')


    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="multisteps-form mb-5">
                    <!--progress bar-->

                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form action="/super-admin/save-post"  method="post" class="multisteps-form__form mb-8">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="list-unstyled">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h5>{{$post->title ?? __('New Page')}}</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_title">{{__('Title')}}</label>
                                            <input class="form-control" id="input_title" name="title" value="{{$post->title ?? ''}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_menu_name">{{__('Menu Name')}}</label>
                                            <input class="form-control" id="input_menu_name" name="menu_name" value="{{$post->menu_name ?? ''}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_slug">{{__('Slug')}}</label>
                                            <input class="form-control" id="input_slug" name="slug" value="{{$post->slug ?? ''}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_sort_order">{{__('Sort Order')}}</label>
                                            <input class="form-control" id="input_sort_order" name="sort_order" type="number" value="{{$post->sort_order ?? '1'}}" required>
                                        </div>
                                        <div class="button-row text-left mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                                        </div>
                                    </div>
                                </div>



                                @csrf

                                @if (!empty($post))
                                    <input type="hidden" name="id" value="{{$post->id}}">
                                @endif


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection



