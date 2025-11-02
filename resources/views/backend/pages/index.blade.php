<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{ URL::to('backend/assets/img/logo-white.png') }}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								@include('backend.components.message')
								<!-- Form -->
								<form action="{{ route('admin.login') }}" method="POST">
									@csrf
									<div class="form-group">
										<input class="form-control" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								<hr>
								<!-- Social Login -->
								<div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
								</div>
								<!-- /Social Login -->
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset('backend/assets/js/jquery-3.2.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('backend/assets/js/script.js') }}"></script>
		
    </body>
</html>