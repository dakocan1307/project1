@extends('layouts.master')

@section('title', 'Tenant Index')

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

                <div class="row">
                    @livewire('components.custom-to-do-list', [
                        'card_title' => 'Riwayat',
                    ])
                    @livewire('components.custom-to-do-list', [
                        'card_title' => 'Jadwal'
                    ])
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
