@extends('layouts.admin.master')
@section('css')
    {{--    <!-- Internal Data table css --> --}}
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    {{--    <!--Internal  Quill css --> --}}
    <link href="{{ URL::asset('assets_2/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
    {{--    <!--- Internal Sweet-Alert css--> --}}
    <link href="{{ URL::asset('assets_2/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- Delete User -->
    <div class="modal" id="modaldemo1">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete User</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h6>Are You Sure Delete User</h6>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.category.destory') }}" method="post">
                        @csrf
                        <input hidden type='text' name="id" id='id_user'>
                        <button class="btn ripple btn-danger" type="submit">Delete</button>
                    </form>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- addUser --}}
    <div class="modal" id="addUser">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form action="{{ route('admin.category.store') }}" method="post" class="modal-content"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header pd-20">
                    <h6 class="modal-title">Add Category</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pd-0">
                    <div class="gap-2 p-2 ql-wrapper ql-wrapper-modal h-fit ">
                        <div>
                            <label>Title</label>
                            <input id='title' name="title" class="form-control" type='text' placeholder="Title">
                        </div>
                        <div>
                            <label>Description</label>
                            <input id='description' name="description" class="form-control" type='text'
                                placeholder="description">
                        </div>
                        <div>
                            <label>Upload Icon</label>
                            <input id='img' name="img" class="form-control" type='file' placeholder="Password">
                        </div>

                    </div>
                </div>
                <div class="modal-footer pd-20">
                    <button class="btn btn-main-primary" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    {{-- EditUser --}}
    <div class="modal" id="EditUser">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form action="{{ route('admin.category.update') }}" method="post" class="modal-content"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header pd-20">
                    <h6 class="modal-title">Edit Category</h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pd-0">
                    <div class="gap-2 p-2 ql-wrapper ql-wrapper-modal h-fit ">
                        <div>
                            <input hidden id='input_id' name="id" class="form-control" type='text'
                                placeholder="Title">
                        </div>
                        <div>
                            <label>Title</label>
                            <input id='title' name="title" class="form-control" type='text'
                                placeholder="Title">
                        </div>
                        <div>
                            <label>Description</label>
                            <input id='description' name="description" class="form-control" type='text'
                                placeholder="description">
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
                <h4 class="my-auto mb-0 content-title">Category</h4><span class="mt-1 mb-0 mr-2 text-muted tx-13">/
                    Settings</span>
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
                <div class="pb-0 card-header ">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Categories</h4>
                    </div>
                    <button class="mt-4 btn btn-main-primary" type="submit" data-target="#addUser"
                        data-toggle="modal">Add New Category</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">id</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-15p border-bottom-0">Description</th>
                                    <th class="wd-15p border-bottom-0">Img</th>
                                    <th class="wd-15p border-bottom-0">Controll</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <img width="40px" height="40px" style="object-fit: cover"
                                                src="{{ asset("storage/{$category->img_path}") }}">
                                        </td>
                                        <td class="gap-5 d-flex">
                                            <a type="button" onclick="SelectElemnt({{ $category }})"
                                                class="text-white btn btn-primary btn-sm" data-target="#EditUser"
                                                data-toggle="modal">Edit</a>
                                            <form action="/test" method="POST">
                                                @csrf
                                                <a type="button" onclick="SelectElemnt({{ $category }})"
                                                    class="mx-2 text-white btn btn-danger btn-sm"
                                                    data-target="#modaldemo1" data-toggle="modal">Delete</a>
                                            </form>


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

    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets_2/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets_2/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/rating/ratings.js') }}"></script>
    <!--Internal  Sweet-Alert js-->
    <script src="{{ URL::asset('assets_2/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>
    <!-- Sweet-alert js  -->
    <script src="{{ URL::asset('assets_2/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets_2/js/sweet-alert.js') }}"></script>

    <script>
        function SelectElemnt(user) {
            console.log(user);
            let id_user = document.getElementById('id_user');
            let input_Id = document.getElementById('input_id');
            let input_Key = document.getElementById('input_name');
            let input_English = document.getElementById('input_email');
            let input_French = document.getElementById('input_role');

            id_user.value = user.id;
            input_Id.value = user.id;
            input_Key.value = user.name;
            input_English.value = user.email;
            input_French.value = user.role;

        }
    </script>
@endsection
