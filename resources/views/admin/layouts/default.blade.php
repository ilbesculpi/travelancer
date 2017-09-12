<?php
	$assetsVerson = env('APP_VERSION', '1');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?= $settings['app.name'] ?> | @yield('title')</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="/themes/common/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/themes/common/vendor/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="/themes/admin/vendor/AdminLTE/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/themes/admin/vendor/AdminLTE/dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="/themes/admin/vendor/AdminLTE/dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="/themes/admin/css/styles.css?v=<?= $assetsVerson ?>" />
		@yield('styles')
	</head>
	<body class="hold-transition skin-blue-light sidebar-mini">
		
		<div class="wrapper">

			@include('admin.partials.header')
			
			@include('admin.partials.sidebar')

			@yield('content')

			@include('admin.partials.footer')

			@include('admin.partials.aside')
			
		</div>

		<script src="/themes/admin/vendor/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="/themes/admin/vendor/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
		<script src="/themes/admin/vendor/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="/themes/admin/vendor/AdminLTE/plugins/fastclick/fastclick.js"></script>
		<script src="/themes/admin/vendor/AdminLTE/dist/js/app.min.js"></script>
		<script src="/themes/admin/js/admin.js"></script>
		@yield('scripts')
	</body>
</html>
