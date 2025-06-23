@extends('components.layout')

@section('nav-content')
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.obatMaster') }}" class="nav-link">
                <i class="nav-icon fas fa-pills"></i>
                <p>Obat</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.dokterMaster') }}" class="nav-link">
                <i class="nav-icon fas fa-user-md"></i>
                <p>Dokter</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.pasienMaster') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Pasien</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.poliMaster') }}" class="nav-link">
                <i class="nav-icon fas fa-hospital"></i>
                <p>Poli</p>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Admin</h1>
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

            <!-- Info Boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-pills"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Obat</span>
                            <span class="info-box-number">{{ $totalObat }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-user-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Sudah Diperiksa</span>
                            <span class="info-box-number">{{ $totalPeriksa }} <small>Pasien</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-user-md"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Dokter</span>
                            <span class="info-box-number">{{ $totalDokter }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Pelanggan</span>
                            <span class="info-box-number">{{ $totalPelangan }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Quick Actions -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-0 bg-primary">
                            <h3 class="card-title">
                                <i class="fas fa-bolt mr-2"></i>Aksi Cepat
                            </h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group">
                                <a href="{{ route('admin.obatMaster') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-pills mr-2"></i>Kelola Obat
                                </a>
                                <a href="{{ route('admin.dokterMaster') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-user-md mr-2"></i>Kelola Dokter
                                </a>
                                <a href="{{ route('admin.pasienMaster') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-users mr-2"></i>Kelola Pasien
                                </a>
                                <a href="{{ route('admin.poliMaster') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-hospital mr-2"></i>Kelola Poli
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- System Info -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-info-circle mr-2"></i>Informasi Sistem
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="text-muted">
                                <p class="text-sm">Status Sistem
                                    <b class="d-block">Aktif</b>
                                </p>
                                <p class="text-sm">Versi Aplikasi
                                    <b class="d-block">1.0.0</b>
                                </p>
                                <p class="text-sm">Server Time
                                    <b class="d-block">{{ now()->format('d M Y H:i:s') }}</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



