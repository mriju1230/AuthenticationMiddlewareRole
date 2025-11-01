<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Authentication & Authorization</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/feathericon.min.css') }}">
		
		<link rel="stylesheet" href="{{ asset('backend/assets/plugins/morris/morris.css') }}">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables/datatables.min.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			@include('backend.components.header')
			
			@include('backend.components.sidebar')		
			
			@yield('main')
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset('backend/assets/js/jquery-3.2.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ asset('backend/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		
		<script src="{{ asset('backend/assets/plugins/raphael/raphael.min.js') }}"></script>    
		<script src="{{ asset('backend/assets/plugins/morris/morris.min.js') }}"></script>  
		<script src="{{ asset('backend/assets/js/chart.morris.js') }}"></script>
		
				
		<!-- Datatables JS -->
		<script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatables/datatables.min.js') }}"></script>

		<!-- Custom JS -->
		<script  src="{{ asset('backend/assets/js/script.js') }}"></script>
		
    </body>

</html>