@extends('layouts.admin.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets_2/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal  Quill css -->
    <link href="{{ URL::asset('assets_2/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_2/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->

    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="my-auto mb-0 content-title">Pages</h4><span class="mt-1 mb-0 mr-2 text-muted tx-13">/
                    blogs</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-xl-12">
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
            <div class="card">
                <div class="pb-0 card-header ">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Blogs</h4>
                    </div>
                    <button class="mt-4 btn btn-main-primary" type="submit" data-target="#addUser" data-toggle="modal">Add
                        New blog</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">id</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-15p border-bottom-0">Description</th>
                                    <th class="wd-15p border-bottom-0">category</th>
                                    <th class="wd-15p border-bottom-0">in Galary</th>
                                    <th class="wd-15p border-bottom-0">Img</th>
                                    <th class="wd-15p border-bottom-0">Controll</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>{{ $blog->category }}</td>
                                        <td>{{ $blog->isGalary ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <img width="40px" height="40px" style="object-fit: cover"
                                                src="{{ asset("storage/{$blog->img}") }}">
                                        </td>
                                        <td class="gap-5 d-flex">
                                            <a type="button" onclick="SelectElemnt({{ $blog }})"
                                                class="text-white btn btn-primary btn-sm" data-target="#EditUser"
                                                data-toggle="modal">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy') }}" method="POST">
                                                @csrf
                                                <a type="button" onclick="SelectElemnt({{ $blog }})"
                                                    class="mx-2 text-white btn btn-danger btn-sm" data-target="#modaldemo1"
                                                    data-toggle="modal">Delete</a>
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
        {{-- addBlog --}}
        <div class="modal" id="addUser">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <form action="{{ route('admin.blogs.store') }}" method="post" class="modal-content"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header pd-20">
                        <h6 class="modal-title">Add Blog</h6><button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body pd-0">
                        <div class="gap-2 p-2 ql-wrapper ql-wrapper-modal h-fit ">
                            <div>
                                <label>Title</label>
                                <input id='title' name="title" class="form-control" type='text'
                                    placeholder="Title">
                            </div>
                            <select name='category' class="my-3 form-control select2-no-search">
                                <option label="Choose category">
                                </option>
                                <option value="all">
                                    All
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->title }}">
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            <select name='isGalary' class="my-3 form-control select2-no-search">
                                <option label="Show in Galary">
                                </option>
                                <option value="1">
                                    Yes
                                </option>
                                <option value="0">
                                    No
                                </option>
                            </select>
                            <div>
                                <label>description</label>
                                <input id='description' name="description" class="form-control" type='text'
                                    placeholder="description">
                            </div>
                            <div>
                                <label>Content</label>
                                <textarea id="summernote" name="editordata"></textarea>
                                <div id="example"></div>
                            </div>
                            <div>
                                <label>Upload img</label>
                                <input id='img' name="img" class="form-control" type='file'>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer pd-20">
                        <button class="btn btn-main-primary" type="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- EditBlog --}}
        <div class="modal" id="EditUser">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <form action="{{ route('admin.blogs.update') }}" method="post" class="modal-content">
                    @csrf
                    <div class="modal-header pd-20">
                        <h6 class="modal-title">Edit Blog</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body pd-0">
                        <div class="gap-2 p-2 ql-wrapper ql-wrapper-modal h-fit ">
                            <div>
                                <input hidden id='edit_id' name="id" class="form-control" type='text'
                                    placeholder="Title">
                            </div>
                            <div>
                                <label>Title</label>
                                <input id='edit_title' name="title" class="form-control" type='text'
                                    placeholder="Title">
                            </div>
                            <select name='category' id='Category' class="my-3 form-control select2-no-search">
                                <option label="Choose category">
                                </option>
                                <option value="all">
                                    All
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->title }}">
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            <select name='isGalary' id="isGalary" class="my-3 form-control select2-no-search">
                                <option label="Show in Galary">
                                </option>
                                <option value="1">
                                    Yes
                                </option>
                                <option value="0">
                                    No
                                </option>
                            </select>
                            <div>
                                <label>Description</label>
                                <input id='edit_description' name="description" class="form-control" type='text'
                                    placeholder="description">
                            </div>
                            <div>
                                <label>Content</label>
                                <textarea id="summernote2" name="editordata"></textarea>
                                <div id="example"></div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer pd-20">
                        <button class="btn btn-main-primary" type="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Delete Blog -->
        <div class="modal" id="modaldemo1">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Delete Blog</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h6>Are You Sure Delete Blog</h6>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.blogs.destroy') }}" method="post">
                            @csrf
                            <input hidden type='text' name="id" id='id_user'>
                            <button class="btn ripple btn-danger" type="submit">Delete</button>
                        </form>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    {{-- <script src="{{ URL::asset('assets_2/plugins/datatable/js/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets_2/plugins/datatable/js/dataTables.responsive.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets_2/plugins/datatable/js/responsive.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets_2/plugins/datatable/js/jquery.dataTables.js') }}"></script> --}}
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

    <script src="{{ URL::asset('assets_2/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal quill js -->
    <script src="{{ URL::asset('assets_2/plugins/quill/quill.min.js') }}"></script>
    <!-- Internal Form-editor js -->
    <script src="{{ URL::asset('assets_2/js/form-editor.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        $(document).ready(function() {
            $('#summernote2').summernote();
        });
    </script>

    <script>
        function SelectElemnt(user) {
            console.log(user.content);
            let edit_id = document.getElementById('edit_id');
            let id_user = document.getElementById('edit_title');
            let input_Id = document.getElementById('edit_description');
            let isGalary = document.getElementById('isGalary');
            let Category = document.getElementById('Category');
            let input_content = document.getElementById('');
            edit_id.value = user.id;
            isGalary.value = user.isGalary;
            Category.value = user.category;
            id_user.value = user.title["@php echo config('app.locale'); @endphp"];
            input_Id.value = user.description['@php echo config('app.locale'); @endphp'];
        }
    </script>
@endsection
