@extends('layouts.backend.app')

@section('title', 'Edit financial Academy ')

@push('css')
@endpush

@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- form start -->
            <form class="form-horizontal" action="{{ route('admin.financialAcademy.update', $financialacademy->id) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- right column -->
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border bg-gray-active">
                                <h3 class="box-title">Edit financial academy</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="title"
                                               value="{{ $financialacademy->title }}">
                                    </div>
                                </div>
                                <br>
                                <label for="image" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="" id="image"><br>
                                </div>
                                <div class="col-sm-10" style="padding-left: 180px">
                                    <img class="img-thumbnail" style="width: 350px; height: 180px;"
                                         src="{{ Storage::url('financialacademy/'.$financialacademy->image) }}" alt="">
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
                                <textarea id="editor1" name="body" rows="10" cols="80">{{ $financialacademy->body }}</textarea>
                            </div>
                        </div>
                        <!-- /.box -->
                        <a href="{{ route('admin.financialAcademy.index') }}" class="btn bg-red-active">BACK</a>
                        <button type="submit" class="btn bg-green-active">UPDATE</button>
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
