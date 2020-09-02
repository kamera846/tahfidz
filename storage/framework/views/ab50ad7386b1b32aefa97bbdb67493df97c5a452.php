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
    <link rel="icon" href="<?php echo e(asset('argon/assets/img/brand/favicon.png')); ?>" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('argon/assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('argon/assets/css/argon.css?v=1.2.0')); ?>" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.html">
                <img src="<?php echo e(asset('argon/assets/img/brand/white.png')); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="dashboard.html">
                                <img src="<?php echo e(asset('argon/assets/img/brand/blue.png')); ?>">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="d-lg-none" />
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Sign In to Tahfidz</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Credentials Sign In</small>
                            </div>
                            <form role="form" class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                        <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                                        <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for=" customCheckLogin">
                                            <span class="text-muted">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="col-8 text-right">
                                        <a href="<?php echo e(route('password.request')); ?>" class="text-light"><small>Forgot password?</small></a>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?php echo e(asset('argon/assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('argon/assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
    <!-- Argon JS -->
    <script src="<?php echo e(asset('argon/assets/js/argon.js?v=1.2.0')); ?>"></script>
</body>

</html>