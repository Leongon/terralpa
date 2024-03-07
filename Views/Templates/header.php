<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Terralpa - System</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_logo() ?>" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_logo() ?>" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_logo() ?>" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<script src="https://unpkg.com/vue-select@beta"></script>
	<link rel="stylesheet" href="https://unpkg.com/vue-select/dist/vue-select.css">

	<script src="https://unpkg.com/apexcharts"></script>
	<script src="https://unpkg.com/vue-apexcharts"></script>


	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans:ital,wght@1,800&family=Poppins:wght@100&display=swap"
		rel="stylesheet">
	<!-- CSS -->
	<link href="<?= CSS ?>/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<!-- ICONS -->
	<link rel="stylesheet" type="text/css" href="<?= ASSETS ?>/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= ASSETS ?>/vendors/styles/style.css" />

	<!-- DATATABLE -->

	<link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet"
		type="text/css">
	<script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js"
		type="text/javascript"></script>

	<!-- Select2 -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- End Google Tag Manager -->

	<!-- Axios -->
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<img src="<?= get_logo_concretera() ?>" alt="" />
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon bi bi-list"></div>
			<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
			<div class="header-search">
				<?php Permisos::getPermisos() ?>
			</div>
		</div>
		<div class="header-right">

			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="<?= ASSETS ?>/vendors/images/img.jpg" alt="" />
										<h3>John Doe</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?= ASSETS ?>/vendors/images/photo1.jpg" alt="" />
										<h3>Lea R. Frith</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?= ASSETS ?>/vendors/images/photo2.jpg" alt="" />
										<h3>Erik L. Richards</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?= ASSETS ?>/vendors/images/photo3.jpg" alt="" />
										<h3>John Doe</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?= ASSETS ?>/vendors/images/photo4.jpg" alt="" />
										<h3>Renee I. Hansen</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?= ASSETS ?>/vendors/images/img.jpg" alt="" />
										<h3>Vicki M. Coleman</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="<?= ASSETS ?>/vendors/images/photo1.jpg" alt="" />
						</span>
						<span class="user-name">
							<?php echo $_SESSION['nombre'] ?>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="<?php echo base_url ?>/Perfil/salir"><i class="dw dw-logout"></i>
							Log Out</a>
					</div>
				</div>
			</div>

		</div>
	</div>



	<?php
	include_once "nav.php";
	?>