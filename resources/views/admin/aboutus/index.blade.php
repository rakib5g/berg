@extends('layouts.backend.app')

@section('title', 'About us')

@push('css')
    <link rel="stylesheet" href="{{ asset('asset/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="{{ route('admin.abouts.create') }}" class="btn bg-green-active">
                <i class="fa fa-plus"></i> ADD ABOUT
            </a>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header bg-gray-active">
                            <h5 class="box-title">Abouts
                                <span class="label label-success">{{ $abouts->count() }}</span>
                            </h5>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th width="5%">SL</th>
                                    <th width="25%">Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th class="text-center" width="14%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abouts as $key => $about)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>{!! $about->body !!}</td>
                                        <td>{{ $about->created_at }}</td>
                                        <td class="text-center">

                                            <a href="{{ route('admin.abouts.edit', $about->id) }}" class="btn bg-green-active
                                            btn-xs py-0">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{ route('admin.abouts.edit', $about->id) }}" class="btn
                                            bg-blue-active btn-xs disabled py-0">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <form action="{{ route('admin.abouts.destroy', $about->id) }}" method="POST"
                                                  id="delete-form-{{ $about->id }}" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="btn bg-red-active btn-xs py-0" onclick="if (confirm('Are ' +
                                                    'you sure to delete This?'))
                                                    {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $about->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('asset/backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush