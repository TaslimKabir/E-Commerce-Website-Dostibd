<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}admin/assets/images/favicon.png">
    <title>Admin Login</title>

    <!-- page css -->
    <link href="{{ asset('/') }}admin/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}admin/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/css/style.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border bg-1">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Login</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
  
    <section id="wrapper">
        <div class="login-register">
           
            <div class="login-box card">
                <div class="card-body">
                    <form method="POST" action="{{route('admin.login')}}">
                        {{-- <div name="logo">
                            <img src="{{asset('/')}}admin/imgs/logo.png" alt="logo" width="90px" class="ml">
                        </div> --}}
                        @csrf
                        <h4 class="text-center m-b-20"> Login </h4>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="email" value="{{ __('Email') }}"></label>
                                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required=""
                                    placeholder="Email">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="password" value="{{ __('Password') }}"></label>
                                <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password"> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Remember me</label>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0)" id="to-recover" class="text-muted"><i
                                                class="fas fa-lock m-r-5"></i> Forgot pwd?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn w-100 btn-lg btn-info btn-rounded text-white" type="submit">Log
                                    In</button>
                            </div>
                        </div>
                        
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign
                                        Up</b></a>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('/') }}admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/') }}admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>
