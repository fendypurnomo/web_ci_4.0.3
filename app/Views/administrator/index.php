<!doctype html>
<html lang="en" ng-app="ngApp">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Web Application">
	<meta name="keywords" content="HTML, CSS, XML, JavaScript, PHP, MySQL">
	<meta name="author" content="Fendy Purnomo">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="xchn" content="<?= csrf_header() ?>">
	<meta name="xctn" content="<?= csrf_hash() ?>">
	<base href="<?= base_url() ?>/">
	<title><?= $title ?></title>
	<link rel="shortcut icon" type="image/png" href="http://localhost/codeigniter/favicon.ico">
	<link rel="stylesheet" href="http://localhost/libs/pace/1.2.1/css/pace-theme-default.min.css">
	<link rel="stylesheet" href="http://localhost/libs/css/waves/0.7.6/dist/css/waves.min.css">
	<link rel="stylesheet" href="http://localhost/libs/css/fonts/fontawesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" href="http://localhost/libs/css/framework/bootstrap/4.5.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/animation.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/utilities.css') ?>">
	<script type="text/javascript" src="<?= base_url('assets/js/custom-js.js') ?>"></script>
</head>

<body>

	<ng-view></ng-view>

	<script type="text/javascript" src="http://localhost/libs/javascript/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/css/framework/bootstrap/4.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/javascript/framework/angularjs/1.8.0/angular.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/javascript/framework/angularjs/1.8.0/angular-route.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/javascript/framework/angularjs/ngStorage.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/css/waves/0.7.6/dist/js/waves.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/pace/1.2.1/js/pace.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/dropify/dist/js/dropify.min.js"></script>
	<script type="text/javascript" src="http://localhost/libs/dropify/dist/js/angular-dropify.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/custom-libs.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/ngApp.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/ngAppRoutesIndex.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/ngFactory.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/ngService.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/ngConstant.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/ngDirective.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/signin.controller.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/signup.controller.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/ngApp/recoveryaccount.controller.js') ?>"></script>
</body>

</html>