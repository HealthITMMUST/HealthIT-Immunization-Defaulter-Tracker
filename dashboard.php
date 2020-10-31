<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="An immunization application for healthcare workers.">
	<meta name="author" content="Alvin Hamadi">
	<meta name="keywords" content="HealthIT Immunization Tracker">

	<link rel="shortcut icon" href="img/icons/healthit.png"/>

	<title>HealthIT - Immunization Tracker</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">HealthIT</span><br>
          <span class="align-middle">Immunization Tracker</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Immunization
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="point-of-care.php">
              <i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Point of Care</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Appointments</span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="queued-appointments.html">Queued Appointments</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="missed-appointments.html">Missed Appointments</a></li>
							</li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="sms-reminders.html">
              <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">SMS Reminders</span>
            </a>
					</li>
					<li class="sidebar-header">
						Drug Store
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="current-stock.html">
              <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Current stock</span>
            </a>
            <li class="sidebar-header">
						Reports
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="moh-510-register.php">
              <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">MOH 510 Register</span>
            </a>
			</li>
					<li class="sidebar-header">
						Settings
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="settings.html">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
            </a>
					</li>
				</li>
			</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a></a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
									
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                
              </a>
							<div class="dropdown-menu dropdown-menu-right">								
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Manual</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3></strong> Dashboard</h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">HealthIT Immunization Tracker</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
									
								</ol>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Total Enrolled Patients</h5>
												<h1 class="mt-1 mb-3">0</h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Patients Immunized Today</h5>
												<h1 class="mt-1 mb-3">0</h1>										
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Expected Appointments</h5>
												<h1 class="mt-1 mb-3">0</h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Missed Appointments</h5>
												<h1 class="mt-1 mb-3">0</h1>										
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
				</div>

			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>HealthIT 2020</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>


</body>

</html>