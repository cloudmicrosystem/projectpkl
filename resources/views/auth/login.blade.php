<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('img/h1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 100%; width: 100%;">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container" style="z-index: 1">

            <!-- Outer Row -->
            <div class="container">
                <div class="row justify-content-center mt-5">

                <div class="col-xl-5 col-lg-6 col-md-7">

                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">

                            <!-- Nested Row within Card Body -->
                                    <div class="p-4">
                                        <div class="avatar" style="text-align: center">
                                            <img src="{{ asset('img/icon.png') }}" alt="Avatar" width="150">
                                        </div>
                                        <br>

                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        </div>

                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form class="user">
                                            <div class="form-group" :value="__('Email')">
                                                <input type="email" name="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email" :value="old('email')" required autofocus>
                                            </div>
                                            <div class="form-group" :value="__('Password')">
                                                <input type="password" name="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password" :value="__('Password')">
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                                    <label class="custom-control-label" for="customCheck">
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                        </div>
                                            <button class="btn btn-primary btn-user btn-block">
                                                <div class="text-white">{{ __('Log in') }}</div>
                                            </button>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
    </form>

</body>

</html>
