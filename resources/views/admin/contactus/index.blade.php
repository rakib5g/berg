@extends('layouts.backend.app')

@section('title', 'Blog posts')

@push('css')
    <link rel="stylesheet" href="{{ asset('asset/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header bg-gray-active">
                            <h5 class="box-title">All Messages
                                <span class="label label-success">{{ $contactall->count() }}</span>
                            </h5>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped" style="overflow: hidden">
                                <thead>
                                <tr>
                                    <th width="5%">SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th width="50%">Message</th>
                                    <th class="text-center" width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contactall as $key => $contactus)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $contactus->name }}</td>
                                        <td>{{ $contactus->email }}</td>
                                        <td>{{ str_limit($contactus->message, 80) }}</td>
                                        <td class="text-center">
                                             <a href="{{ route('admin.contactus.show', $contactus->id) }}" class="btn
                                            bg-blue-active btn-xs py-0">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ route('admin.contactus.destroy', $contactus->id) }}" method="POST"
                                                  id="delete-form-{{ $contactus->id }}" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="btn bg-red-active btn-xs py-0" onclick="if (confirm('Are ' +
                                                    'you sure to delete This?'))
                                                    {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $contactus->id }}').submit();
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
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
