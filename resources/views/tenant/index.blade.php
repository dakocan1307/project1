@extends('layouts.master')

@section('title', 'Tenant Index')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            @livewire('components.content-header')
        </div>

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Tenant</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Unit</th>
                                            <th>Nama</th>
                                            <th>KTP</th>
                                            <th>Telp 1</th>
                                            <th>Telp 2</th>
                                            <th>Email 1</th>
                                            <th>Email 2</th>
                                            <th>Alamat</th>
                                            <th>IN Basic</th>
                                            <th>Pots Basic</th>
                                            <th>IN Upgrade</th>
                                            <th>Pots Upgrade</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script type="text/javascript">
        $('#table').DataTable({
            "scrollX": true,
            "processing": true,
            "bserverSide": true,
            ajax: {
                url: "{{ url('') }}/tenant/data",
                type: "POST",
            },
            columnDefs: [
                {
                    "targets": 0,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.unit;
                    }
                },
                {
                    "targets": 1,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.nama;
                    }
                },
                {
                    "targets": 2,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.nomor_ktp;
                    }
                },
                {
                    "targets": 3,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.telp1;
                    }
                },
                {
                    "targets": 4,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.telp2;
                    }
                },
                {
                    "targets": 5,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.email1;
                    }
                },
                {
                    "targets": 6,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.email2;
                    }
                },
                {
                    "targets": 7,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.alamat;
                    }
                },
                {
                    "targets": 8,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.no_inet_basic;
                    }
                },
                {
                    "targets": 9,
                    "visible": false,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.no_telp1_basic;
                    }
                },
                {
                    "targets": 10,
                    "visible": false,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.no_inet_upgrade;
                    }
                },
                {
                    "targets": 11,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return row.no_telp1_upgrade;
                    }
                },
            ]
        });
    </script>
@endsection
