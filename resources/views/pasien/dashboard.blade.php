@extends('components.layout')

@section('nav-content')
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('pasien.dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pasien.janjiPeriksa') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar-check"></i>
                <p>Janji Periksa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pasien.riwayat') }}" class="nav-link">
                <i class="nav-icon fas fa-history"></i>
                <p>Riwayat Periksa</p>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @if(session('welcome_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="icon fas fa-check"></i> {{ session('welcome_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if(Auth::check())
                <div class="row">
                    <div class="col-md-4">
                        <!-- Profile Widget -->
                        <div class="card card-widget widget-user">
                            <div class="widget-user-header bg-info">
                                <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                                <h5 class="widget-user-desc">Pasien</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-6 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">{{ $totalPeriksa }}</h5>
                                            <span class="description-text">TOTAL PERIKSA</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="description-block">
                                            <h5 class="description-header">{{ Auth::user()->no_rm }}</h5>
                                            <span class="description-text">NO. RM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-bolt mr-2"></i>Aksi Cepat
                                </h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group">
                                    <a href="{{ route('pasien.janjiPeriksa') }}" class="list-group-item list-group-item-action">
                                        <i class="fas fa-calendar-plus mr-2"></i>Buat Janji Periksa
                                    </a>
                                    <a href="{{ route('pasien.riwayat') }}" class="list-group-item list-group-item-action">
                                        <i class="fas fa-history mr-2"></i>Lihat Riwayat Periksa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- Riwayat Periksa Terakhir -->
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">
                                    <i class="fas fa-history mr-2"></i>Riwayat Periksa Terakhir
                                </h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Dokter</th>
                                            <th>Keluhan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fas fa-calendar mr-2"></i>
                                                {{ now()->format('d M Y') }}
                                            </td>
                                            <td>Dr. John Doe</td>
                                            <td>Demam & Flu</td>
                                            <td>
                                                <span class="badge badge-success">Selesai</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection



