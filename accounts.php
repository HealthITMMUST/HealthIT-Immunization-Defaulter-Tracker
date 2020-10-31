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
				<a class="sidebar-brand" href="dashboard.php">
          <span class="align-middle">HealthIT</span><br>
          <span class="align-middle">Immunization Tracker</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Immunization
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="dashboard.php">
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
					</li>
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
					<li class="sidebar-item">
						<a class="sidebar-link" href="accounts.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Accounts</span>
            </a>
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
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
							<div class="col-auto d-none d-sm-block">
								<h3></strong> Accounts</h3>
							</div>

							<div class="col-auto ml-auto text-right mt-n1">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
										<li class="breadcrumb-item"><a href="dashboard.php">HealthIT Immunization Tracker</a></li>
										<li class="breadcrumb-item active" aria-current="page">Accounts</li>
										
									</ol>
								</nav>
							</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><i class="align-middle" data-feather="user"></i>  Manage Accounts</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#createaccount" role="tab">
          Create account
        </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#deleteaccount" role="tab">
          Delete account
        </a>						
        							<a class="list-group-item list-group-item-action" data-toggle="list" href="#resetpassword" role="tab">
          Reset password
        </a>
									
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="createaccount" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Create an account</h5>
										</div>
										<div class="card-body">
											<form method="POST">
												<div class="mb-3">
													<label class="form-label" for="createaccountUsername">Username</label>
													<input type="text" class="form-control" id="createUsername" name="createaccountUsername">
												</div>
												<div class="mb-3">
													<label class="form-label" for="createaccountEmail">Email</label>
													<input type="email" class="form-control" id="createEmail" name="createaccountEmail">
												</div>
												<div class="mb-3">
													<label class="form-label" for="createaccountPassword">Password</label>
													<input type="password" class="form-control" id="createPassword" name="createaccountPassword">
												</div>
												
												<button type="submit" class="btn btn-primary" name="buttonCreateAccount">Create account</button>

												<br>
												<br>


												<?php
												if(isset($_POST['buttonCreateAccount'])){

													$username=$_POST['createaccountUsername'];
													$email=$_POST['createaccountEmail'];
													$password=$_POST['createaccountPassword'];


												  	$result = mysqli_query($mysqli,"SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1");
												  	$user = mysqli_fetch_assoc($result);
												  
												  if ($user) { 
												    if ($user['username'] === $username) {
												      echo "Username already exists";

												    }

												    if ($user['email'] === $email) {
												      echo "    ---    Email already exists";
												    }
												  }else{
												  	$encryptedpassword = md5($password);

												  	$query = "INSERT INTO users (username, email, password) 
												  			  VALUES('$username', '$email', '$encryptedpassword')";

												  	$confirmcreateaccount = mysqli_query($mysqli, $query);

												  	if($confirmcreateaccount){
																echo "$username 's account has been created successfully";

															}else{
																
																echo "Fail".mysqli_error($confirmcreateaccount);
															}
												  	

												  }								  
												  
												}
											?>

											</form>

											

										</div>
									</div>
								</div>
<!-- end of panel 1-->
<!-- start of panel 2-->									

									<div class="tab-pane fade show" id="deleteaccount" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Delete an account</h5>
										</div>
										<div class="card-body">
											<form method="POST">
												<div class="mb-3">
													<label class="form-label" for="deleteaccountEmail">Account's Email</label>
													<input type="email" class="form-control" id="deleteEmail" name="deleteaccountEmail" required>
												</div>
												<button type="submit" class="btn btn-primary" name="buttonDeleteAccount">Delete</button>
												<br>
												<br>

												<?php 
												if(isset($_POST['buttonDeleteAccount'])){
													$deleteaccountbyemail =$_POST['deleteaccountEmail'];

													$results=mysqli_query($mysqli,"DELETE FROM users WHERE email like '$deleteaccountbyemail'");
													
													if($results){
														echo "User account with $deleteaccountbyemail has been deleted";
													} else{
														echo "Account not deleted".mysql_error($results);
													}
												}
											
												?>
											</form>

										</div>
									</div>
								</div>
<!--end of panel 2 -->									

<!--start of panel 3-->
									<div class="tab-pane fade show" id="resetpassword" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Reset password</h5>
										</div>
										<div class="card-body">
											<form method="POST">
												<div class="mb-3">
													<label class="form-label" for="deleteaccountEmail">Reset Account's Password</label>
													<input type="email" class="form-control" id="resetEmail" name="resetaccountEmail" required>
												</div>
												<button type="submit" class="btn btn-primary" name="buttonResetAccountPassword">Reset</button>
												<br>
												<br>

												<?php 
												if(isset($_POST['buttonResetAccountPassword'])){
													$resetaccountpasswordbyemail =$_POST['resetaccountEmail'];
													$defaultpassword="202cb962ac59075b964b07152d234b70";


													$results=mysqli_query($mysqli,"UPDATE users SET password = '$defaultpassword' WHERE email like '$resetaccountpasswordbyemail'");
													
													if($results){
														echo "Password reset";
													} else{
														echo "Password not reset".mysql_error($results);
													}
												}
											
												?>
											</form>

										</div>
									</div>
								</div>
<!-- end of panel 3-->
					</div>

				</div>

			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="dashboard.php"><strong>HealthIT 2020</strong></a> &copy;
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