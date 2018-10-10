@extends('layouts.backend.app')

@section('title', 'add new post')

@push('css')
@endpush

@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- form start -->
            <form class="form-horizontal" action="{{ route('admin.financialAcademy.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- right column -->
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border bg-gray-active">
                                <h3 class="box-title">Add New Financial Academy</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="title"
                                               placeholder="Title">
                                    </div>
                                </div>
                                <br>
                                <label for="image" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="" id="image"><br>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <div class="row">
                    <!-- right column -->
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border bg-gray-active">
                                <h3 class="box-title">Description</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                               <textarea id="editor1" name="body" rows="10" cols="80"> </textarea>
                            </div>
                        </div>
                        <!-- /.box -->
                        <a href="{{ route('admin.financialAcademy.index') }}" class="btn bg-red-active">BACK</a>
                        <button type="submit" class="btn bg-green-active">SAVE</button>
                    </div>
                    <!--/.col (right) -->
                </div>

            </form>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('asset/backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- CK Editor -->
    <script src="{{ asset('asset/backend/bower_components/ckeditor/ckeditor.js') }}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        });

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
        });
    </script>
@endpush
