<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Poliklinik</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Daftar Akun Baru</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="Email" name="email" value="{{ old('email') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" 
                           placeholder="Nomor HP (08xxxxxxxxxx)" name="no_hp" value="{{ old('no_hp') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" 
                           placeholder="Nomor KTP (16 digit)" name="no_ktp" value="{{ old('no_ktp') }}" 
                           maxlength="16">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-card"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <textarea class="form-control @error('alamat') is-invalid @enderror" 
                              name="alamat" placeholder="Alamat Lengkap" rows="3">{{ old('alamat') }}</textarea>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="role" value="pasien">

                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="Password" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" 
                           placeholder="Konfirmasi password" name="password_confirmation" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                </div>
            </form>

            <p class="mt-3 mb-0 text-center">
                Sudah punya akun? <a href="{{ url('/login') }}" class="text-center">Login disini</a>
            </p>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
