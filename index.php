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
		

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				

				<div class="navbar-collapse collapse">
					
				</div>
			</nav>

			<main class="content">
				<div class="col-md-6 container-fluid">

					<div class="card-body text-center">

		                    <div class="mb-4">
		                        
								<img src="img/icons/healthit.png">
											
		                    </div>
		                    <h3 class="mb-4 text">Immunization Defaulter Tracker</h3>
		                    <div class="card-body">
								<form action="" method="POST">
				                    <div class="input-group mb-3">
				                        <input type="email" class="form-control" placeholder="Email" required name="loginEmail">
				                    </div>
				                    <div class="input-group mb-4">
				                        <input type="password" class="form-control" placeholder="password" required name="loginPassword">
				                    </div>
				                    <button class="btn btn-primary shadow-2 mb-4" name="buttonLogin">Login</button>
				                    <br>
				                    <br>

				                    <?php
				                    if(isset($_POST['buttonLogin'])){

				                    		  $email = $_POST['loginEmail'];
											  $password = md5($_POST['loginPassword']);
											  


											  $results = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$email' AND password='$password'");
											  

											  if (mysqli_num_rows($results) == 1) {
											  	  echo "You are now logged in as $email";
											  	  header('location: dashboard.php');
											  	  
											  	}else {
											  	  echo "Wrong username/password combination";
											  	}		  

				                    }


				                    ?>
				                </form>
				            </div>
		                    
                	</div>
				</div>



			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6">
							<p class="mb-0">
								<img src="img/icons/usaid.png">
								<img src="img/icons/healthitbrand.png" class="mb-1">
								
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