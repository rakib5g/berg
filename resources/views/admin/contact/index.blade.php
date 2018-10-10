@extends('layouts.backend.app')

@section('title', 'Contact')

@push('css')
@endpush

@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">


            <!-- form start -->
            @foreach($contacts as $key => $contact)
            <form class="form-horizontal" action="{{ route('admin.contact.update', $contact->id) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- right column -->
                        <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border bg-gray-active">
                                <h3 class="box-title">Contact Info:</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="phone" class="col-sm-2 control-label">
                                        <i class="fa fa-phone"></i>  Phone
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                               value="{{ $contact->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        <i class="fa fa-envelope"></i>  Email
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="email"
                                               value="{{ $contact->email }}">
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