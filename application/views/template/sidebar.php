<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<img src="<?= base_url('assets/img/02.png') ?>" width="40" height="40" alt="">
				</div>
				<div class="sidebar-brand-text mx-3">WEB-Spk</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('welcome/index') ?>">
					<i class="fas fa-info-circle"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Master Data
			</div>

			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('welcome/table1') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Keriteria</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('welcome/table2') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Sub Kriteria</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('welcome/table3') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Arternatif</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('welcome/perhitungan') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Perhitungan Saw</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				User Aplikasi
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('welcome/user') ?>">
					<i class="fas fa-user"></i>
					<span>User</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
