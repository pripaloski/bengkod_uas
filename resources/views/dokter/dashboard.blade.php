@extends('components.layout')

@section('nav-content')
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('dokter.dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dokter.memeriksa') }}" class="nav-link">
                <i class="nav-icon fas fa-stethoscope"></i>
                <p>Memeriksa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dokter.jadwalPeriksa') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>Jadwal Periksa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dokter.historyPeriksa') }}" class="nav-link">
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
                    <h1 class="m-0">Dashboard Dokter</h1>
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
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Diperiksa</span>
                            <span class="info-box-number">{{ $totalPeriksa }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-clock"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Menunggu</span>
                            <span class="info-box-number">{{ $totalBelumDiPeriksa }} <small>Pasien</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jadwal Aktif</span>
                            <span class="info-box-number">{{ $totalJadwalAktif ?? 0 }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-times"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jadwal Nonaktif</span>
                            <span class="info-box-number">{{ $totalJadwalNonaktif ?? 0 }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Profile Card -->
                <div class="col-md-4">
                    <div class="card card-widget widget-user">
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                            <h5 class="widget-user-desc">Dokter {{ Auth::user()->poli->nama_poli }}</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$totalPeriksa ?? 0}}</h5>
                                        <span class="description-text">PASIEN</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $totalJadwalAktif ?? 0 }}</h5>
                                        <span class="description-text">JADWAL</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">4.9</h5>
                                        <span class="description-text">RATING</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="card">
                        <div class="card-header bg-gradient-info">
                            <h3 class="card-title">
                                <i class="fas fa-bolt mr-2"></i>Aksi Cepat
                            </h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group">
                                <a href="{{ route('dokter.memeriksa') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-stethoscope mr-2"></i>Mulai Periksa Pasien
                                </a>
                                <a href="{{ route('dokter.jadwalPeriksa') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-calendar-alt mr-2"></i>Atur Jadwal Periksa
                                </a>
                                <a href="{{ route('dokter.historyPeriksa') }}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-history mr-2"></i>Lihat Riwayat Periksa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Biodata Card -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            <h3 class="card-title">
                                <i class="fas fa-user-md mr-2"></i>Biodata Dokter
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('dokter.dashboardEdit', ['id' => Auth::user()->id]) }}" 
                                   class="btn btn-tool" title="Edit Profile">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th style="width: 30%">ID Dokter</th>
                                            <td>: {{ Auth::user()->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>No. KTP</th>
                                            <td>: {{ Auth::user()->no_ktp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td>: {{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: {{ Auth::user()->email }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th style="width: 30%">No. HP</th>
                                            <td>: {{ Auth::user()->no_hp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>: {{ Auth::user()->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th>Poli</th>
                                            <td>: {{ Auth::user()->poli->nama_poli }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>: <span class="badge badge-success">Aktif</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
