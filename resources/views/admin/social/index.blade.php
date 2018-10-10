@extends('layouts.backend.app')

@section('title', 'add new post')

@push('css')
@endpush

@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">


            <!-- form start -->
            @foreach($socials as $key => $social)
            <form class="form-horizontal" action="{{ route('admin.social.update', $social->id) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- right column -->
                        <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border bg-gray-active">
                                <h3 class="box-title">SOCIAL MIDEA</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="facebook" class="col-sm-2 control-label">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="facebook" class="form-control" id="facebook"
                                               value="{{ $social->facebook }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="facebook" class="col-sm-2 control-label">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="twitter" class="form-control" id="twitter"
                                               value="{{ $social->twitter }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="youtube" class="col-sm-2 control-label">
                                        <i class="fa fa-youtube"></i> Youtube
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="youtube" class="form-control" id="youtube"
                                               value="{{ $social->youtube }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="linkedin" class="col-sm-2 control-label">
                                        <i class="fa fa-linkedin"></i> Linkedin
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="linkedin" class="form-control" id="linkedin"
                                               value="{{ $social->linkedin }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="btn bg-red-active">BACK</a>
                <button class="btn bg-green-active">UPDATE</button>
            </form>
        @endforeach
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')

@endpush