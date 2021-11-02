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
                                <select id="komplekFilter" class="mb-2">
                                    <option value="">Komplek</option>
                                    <option value="Bougenville">Bougenville</option>
                                    <option value="Jasmine">Jasmine</option>
                                </select>
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Unit</th>
                                            <th>Nama</th>
                                            <th>KTP</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>IN Basic</th>
                                            <th>Pots Basic</th>
                                            <th>IN Upgrade</th>
                                            <th>Pots Upgrade</th>
                                            <th>PPPOE</th>
                                            <th>Pass PPPOE</th>
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
    <script src="{{ asset('js/datatables-data-tenant.js') }}"></script>

    {{-- <script type="text/javascript">
        var table = $('#table').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "ALL"]
            ],
            "scrollX": true,
            "processing": true,
            "serverSide": true,
            ajax: {
                url: "{{ url('') }}/tenant/data",
                type: "POST",
            },
            columnDefs: [{
                    "targets": 0,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.unit + '</a>';
                    }
                },
                {
                    "targets": 1,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.nama + '</a>';
                        // return row.nama;
                    }
                },
                {
                    "targets": 2,
                    "visible": false,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.nomor_ktp + '</a>';
                    }
                },
                {
                    "targets": 3,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.telp1 + ', ' + row
                            .telp2 + '</a>';
                    }
                },
                {
                    "targets": 4,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.email1 + ', ' + row
                            .email2 + '</a>';
                    }
                },
                {
                    "targets": 5,
                    "visible": false,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.alamat + '</a>';
                    }
                },
                {
                    "targets": 6,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.no_inet_basic +
                            '</a>';
                    }
                },
                {
                    "targets": 7,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + 'Pots1: ' + row
                            .no_telp1_basic + ', Pots2: ' + row.no_telp2_basic + '</a>';
                    }
                },
                {
                    "targets": 8,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.no_inet_upgrade +
                            '</a>';
                    }
                },
                {
                    "targets": 9,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + 'Pots1: ' + row
                            .no_telp1_upgrade + ', Pots2: ' + row.no_telp2_upgrade + '</a>';
                    }
                },
                {
                    "targets": 10,
                    // "visible": false,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.pppoe + '</a>';
                    }
                },
                {
                    "targets": 11,
                    "class": "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return '<a href="' + "tenant" + "/" + row.tenant_id + '">' + row.pass_pppoe +
                        '</a>';
                    }
                },
            ]
        });

        $('#komplekFilter').on('change', function() {
            var filter_value = $(this).val();
            var liveurl = '{{ url('') }}/tenant/data/' + filter_value;
            table.ajax.url(liveurl).load();
        });
    </script> --}}
@endsection
