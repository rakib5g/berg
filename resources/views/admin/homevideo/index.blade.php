@extends('layouts.backend.app')

@section('title', 'Home page video')

@push('css')
@endpush

@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">


            <!-- form start -->
            @foreach($homeVideos as $key => $homeVideo)
            <form class="form-horizontal" action="{{ route('admin.homevideo.update', $homeVideo->id) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- right column -->
                        <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border bg-gray-active">
                                <h3 class="box-title">Home page video link</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="linkedin" class="col-sm-2 control-label">
                                        <i class="fa fa-video"></i> Video link
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="link" class="form-control" id="link"
                                               value="{{ $homeVideo->link }}">
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