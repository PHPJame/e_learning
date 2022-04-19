<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>E-learning</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ mix('css/thaifont.css') }}">

    <style>
    body {
        font-family: "Sarabun";
        background-color: #EFEBEB;
    }

    .btn {
        font-family: "Sarabun";
    }
    </style>
</head>

<body class="question-template">
    <div class="container p-lg-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card my-5">


                    <div class="card-body">
                        <form class="card-body p-lg-5" method="POST" action="{{ route('register') }}">
                            <h2 class="text-center">สมัครสมาชิก</h2><br>
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" placeholder="ชื่อ-นามสกุล" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="อีเมล" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="รหัสผ่าน" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder="ยืนยันรหัสผ่าน" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">
                                        สมัครสมาชิก
                                    </button>
                                </div>
                                <br>
                                <div class="text-center">
                                    <a class=" btn btn-link" href="{{ route('login') }}">คุณบัญชีผู้ใช้งานอยู่แล้ว</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="{{ mix('js/fontawesome.js') }}"></script>

</body>

</html>