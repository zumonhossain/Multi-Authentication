<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/simulor/layouts/light/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 08:43:35 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('contents/admin') }}/assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('contents/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2 text-dark"></i></a>
        </div>
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{ asset('contents/admin') }}/assets/images/logo-dark.png" alt="" height="22"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Don't have an account? Create free account</p>
                                </div>

                                <form action="{{ route('admin.register.create') }}" method="POST">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="fullname">Full Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter your name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="Enter your confirm password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="{{ route('login_from') }}" class="font-weight-medium text-dark ml-1">Log In</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="{{ asset('contents/admin') }}/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('contents/admin') }}/assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/simulor/layouts/light/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 08:43:35 GMT -->
</html>