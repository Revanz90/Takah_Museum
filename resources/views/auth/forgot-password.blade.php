<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Takah Museum | Forgot Password</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/') }}/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/') }}/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/') }}/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-info">
            <div class="card-header text-center">
                <a href="{{ asset('AdminLTE/plugins/') }}" class="h1">TAKAH Museum</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg"> Lupa password? Disini dapat dengan mudah mengubah password baru.</p>
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    {{-- Email Recovery --}}
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                            required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block">Request new password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/') }}/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/') }}/js/adminlte.min.js"></script>
</body>

</html>
