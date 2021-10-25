@extends('layouts.master')

@section('title', 'Customer Support')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Kretek Simpel</a></li>
                            <li class="breadcrumb-item active">Technical Support</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    @livewire('components.custom-small-box', [
                        'amount' => 150,
                        'card_title' => 'Tiket Aktivasi',
                        'bg_color' => 'info'
                    ])
                    @livewire('components.custom-small-box', [
                        'amount' => 125,
                        'card_title' => 'Tiket Batal',
                        'bg_color' => 'danger'
                    ])
                    @livewire('components.custom-small-box', [
                        'amount' => 175,
                        'card_title' => 'Tiket Batal',
                        'bg_color' => 'warning'
                    ])
                    @livewire('components.custom-small-box', [
                        'amount' => 100,
                        'card_title' => 'Tiket Validasi',
                        'bg_color' => 'success'
                    ])
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    @livewire('components.custom-to-do-list', [
                        'card_title' => 'Riwayat',
                    ])
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    @livewire('components.custom-to-do-list', [
                        'card_title' => 'Jadwal'
                    ])
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
