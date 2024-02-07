@extends('layouts.super-admin-portal')

@section('content')

    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col">
                                <h6>{{__('Pages')}}</h6>
                            </div>
                            <div class="col text-end">
                                <a class="btn bg-gradient-dark mb-0" href="/super-admin/page"><i class="fas fa-plus"></i>&nbsp;&nbsp;
                                    {{__(' Add New Page')}}
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{__('Page')}}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <a target="_blank" href="{{getPostPermalink($post)}}">{{$post->title}}</a>
                                        </td>

                                        <td class="align-middle">
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-dark px-3 mb-0" href="/super-admin/page?id={{$post->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>{{__('Edit')}}</a>

                                                <a class="btn btn-link text-dark px-3 mb-0" href="{{getPostPermalink($post)}}" target="_blank"><i class="fas fa-file-alt text-dark me-2" aria-hidden="true"></i>{{__('View')}}</a>

                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="/delete-post/{{$post->id}}"><i class="far fa-trash-alt me-2"></i>{{__('Delete')}}</a>

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



@endsection
