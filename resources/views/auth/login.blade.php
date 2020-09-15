<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Tahfidz Sign In</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('argon/assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('argon/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('argon/assets/css/argon.css?v=1.2.0') }}" type="text/css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" type="text/css">
</head>

<body>
    <!-- Main content -->
    <div class="main-content">
        <!-- Page content -->
        <div class="container-fluid pt-6 pb-4">
            <div class="row justify-content-center">
                <div class="col-md-5 left-side">
                    <p class="text-1">| Tahfidz Boarding School</p>
                    <p class="text-2">Annur II Al-Murtadlo</p>
                    <img src="{{ asset('assets/img/illustration-4.png') }}" alt="illustration" class="illustration-1">
                </div>

                <!-- Form Login -->
                <div class="col-lg-5 col-md-5 px-lg-5">
                    <div class="card shadow">
                        <div class="card-body px-lg-5 py-lg-4">
                            <div align="center">
                                <img src="{{ asset('assets/img/icon_final.png') }}" alt="logo" height="200">
                            </div>
                            <div class="text-center text-muted mb-4 ">
                                <small>Credentials Sign In</small>
                            </div>
                            <form role="form" class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                                        
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for=" customCheckLogin">
                                                <span class="text-muted">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <a href="{{ route('password.request') }}" class="text-light"><small>Forgot password?</small></a>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-default btn-block my-5">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-3">
            <div class="copyright text-center text-muted">
                &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Tahfidz Boarding School</a> | All Rights Reserved
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('argon/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('argon/assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>