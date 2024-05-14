@extends('layouts.admin.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal  Quill css -->
    <link href="{{ URL::asset('assets_2/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->

    <div class="modal" id="modalQuill">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form action="{{ route('admin.custom-text.update') }}" method="post" class="modal-content">
                @csrf
                <div class="modal-header pd-20">
                    <h6 class="modal-title">Edit Content</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pd-0">
                    <div class="gap-2 p-2 ql-wrapper ql-wrapper-modal h-fit ">
                        <div>
                            <label>Id</label>
                            <input id='input_Id' name="id" class="form-control" readonly type='text'
                                placeholder="Id">
                        </div>
                        <div>
                            <label>Key</label>
                            <input id='input_Key' name="Key" class="form-control" type='text' readonly
                                placeholder="Key">
                        </div>
                        <div>
                            <label>Content</label>
                            <input id='input_content' name="content" class="form-control" type='text'
                                placeholder="English">
                        </div>
                    </div>
                </div>
                <div class="modal-footer pd-20">
                    <button class="btn btn-main-primary" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="my-auto mb-0 content-title">Custom Text</h4><span class="mt-1 mb-0 mr-2 text-muted tx-13">/ Home
                    Page</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row opened -->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error</strong> {{ session('error') }}
        </div>
    @endif
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="pb-0 card-header">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Custom Text</h4>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">id</th>
                                    <th class="wd-15p border-bottom-0">key</th>
                                    <th class="wd-15p border-bottom-0">Content_{{ config('app.locale') }}</th>
                                    <th class="wd-15p border-bottom-0">Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contents as $content)
                                    <tr>
                                        <td>{{ $content->id }}</td>
                                        <td>{{ $content->key }}</td>
                                        <td>{{ $content->content }}</td>
                                        <td>
                                            <a type="button" onclick="SelectElemnt({{ $content }})"
                                                class="text-white btn btn-primary btn-sm" data-target="#modalQuill"
                                                data-toggle="modal">Edit</a>

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
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets_2/js/table-data.js') }}"></script>
    <!--Internal  Select2 js -->
    <script src="{{ URL::asset('assets_2/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal quill js -->
    <script src="{{ URL::asset('assets_2/plugins/quill/quill.min.js') }}"></script>
    <!-- Internal Form-editor js -->
    <script src="{{ URL::asset('assets_2/js/form-editor.js') }}"></script>

    <script>
        function SelectElemnt(element) {
            let input_Id = document.getElementById('input_Id');
            let input_Key = document.getElementById('input_Key');
            let input_English = document.getElementById('input_content');

            input_Id.value = element.id;
            input_Key.value = element.key;
            input_English.value = element.content["@php echo config('app.locale'); @endphp"];
        }
    </script>
@endsection
