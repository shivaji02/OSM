@extends('layouts.primary')
@section('content')

    <div class=" row mb-2">
        <div class="col">
            <spna>

                <h5 class="  fw-bolder">
                    {{__('Vision Board')}} /<span class="text-secondary">
                         {{__('Categories')}}
                    </span>
                </h5>
                <p class="">{{__('Create, edit or delete the vision board categories.')}}</p>

            </spna>



        </div>
        <div class="col text-end">

            <button type="button" class="btn btn-info  mb-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"  id="btn_add_new_category"><i class="fas fa-plus"></i>&nbsp;&nbsp; {{__(' Add New Vision Category')}}</button>

        </div>
    </div>


    <div class="card">

        <div class="card-body">
            <div class=" table-responsive">
                <table class="table  mb-0" id="cloudonex_datatable">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="text-uppercase ms-3 text-xs ">{{__('Name')}}</th>
                        <th class="text-uppercase text-start text-xs ">{{__('Created At')}}</th>
                        <th class="text-center text-uppercase text-secondary text-xs">{{__('Action')}}
                        </th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)
                        <tr>

                            <td class="text-sm fw-bolder text-dark ">
                                <span class="mb-0 ms-3">{{$category->name}}</span>





                            </td>

                            <td class="text-sm ">
                                <span class="mb-0 ms-3"> {{$category->created_at}}</span>

                            </td>

                            <td class="text-center ms-2">

                                <a class="btn btn-link text-dark ms-4 mb-0 category_edit"
                                   href="#" data-id="{{$category->id}}">

                                    <i class="far fa-edit "></i>

                                </a>
                                <a class="btn btn-link text-danger  mb-0"
                                   href="/delete/vision-category/{{$category->id}}">
                                    <i
                                            class="far fa-trash-alt "></i>

                                </a>


                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">{{__('Add New Category')}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="sp_result_div"></div>
                    <form method="post" action="/category-save" id="form_main" class="">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="email">{{__('Name')}}</label>
                            <div class="input-group">

                                <input type="text" name="name" class="form-control"  id="input_name" autofocus required>
                            </div>
                        </div>
                        <!-- End of Form -->

                        @csrf
                        <button  type="submit" id="btn_submit" class="btn btn-info">{{__('Save')}}</button>
                        <input type="hidden" name="category_id" id="category_id" value="">


                    </form>


                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        $(function () {
            "use strict";

            let $btn_submit = $('#btn_submit');
            let $form_main = $('#form_main');
            let $sp_result_div = $('#sp_result_div');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                $.post('/category-save',$form_main.serialize()).done(function () {
                    location.reload();
                }).fail(function (data) {
                    let obj = $.parseJSON(data.responseText);
                    $btn_submit.prop('disabled',false);
                    let html = '';
                    $.each(obj.errors, function(key,value) {
                        html += '<div class="alert alert-danger">'+ value +'</div>'
                    });

                    $sp_result_div.html(html);

                });

            });


            let myModal = new bootstrap.Modal(document.getElementById('kt_modal_1'), {
                keyboard: false
            });


            $('.category_edit').on('click',function (event) {
                event.preventDefault();
                $.getJSON('/category-edit?id=' + $(this).data('id'),function (data) {
                    $('#input_name').val(data.name);
                    $('#category_id').val(data.id);
                });

                myModal.show();

            });

            $('#btn_add_new_category').on('click',function () {
                $('#input_name').val('');
                $('#category_id').val('');
                myModal.show();
            });

            $('#cloudonex_datatable').DataTable(
            );

        });
    </script>

@endsection



