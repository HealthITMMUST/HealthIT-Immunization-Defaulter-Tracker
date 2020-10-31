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

	<style type="text/css">
		table tr{
			cursor: pointer;transition:all .25s ease-in-out;
		}
		table tr:hover{background-color: #ddd;}
	</style>

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
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
							<div class="col-auto d-none d-sm-block">
								<h3></strong> MOH 510 Register</h3>
							</div>

							<div class="col-auto ml-auto text-right mt-n1">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
										<li class="breadcrumb-item"><a href="dashboard.php">HealthIT Immunization Tracker</a></li>
										<li class="breadcrumb-item active" aria-current="page">MOH 510 Register</li>
										
									</ol>
								</nav>
							</div>

							<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Date When Immunization was given must be indicated.</h5>
								</div>
								<div class="table-responsive">
									<table class="table mb-0" name="MOH510Register" id="MOH510RegisterPDF">
										<thead>
											<tr>
												<th scope="col">Date</th>
												<th scope="col">Serial Number</th>
												<th scope="col">Child's Number</th>
												<th scope="col">Child's Names</th>
												<th scope="col">Sex</th>
												<th scope="col">Date of Birth</th>
												<th scope="col">Date First Seen</th>
												<th scope="col">Father's Full Names</th>
												<th scope="col">Mother's Full Names</th>
												<th scope="col">Village / Estate / Landmark</th>
												<th scope="col">Telphone Number</th>
												<th scope="col">BCG</th>
												<th scope="col">Revaccination</th>
												<th scope="col">Polio birth Dose</th>
												<th scope="col">1st Polio</th>
												<th scope="col">2nd Polio</th>
												<th scope="col">3rd Polio</th>
												<th scope="col">DPT/Hep.B/Hib.1</th>
												<th scope="col">DPT/Hep.B/Hib.2</th>
												<th scope="col">DPT/Hep.B/Hib.3</th>
												<th scope="col">PVC 10 (Pneumococcal) 1</th>
												<th scope="col">PVC 10 (Pneumococcal) 2</th>
												<th scope="col">PVC 10 (Pneumococcal) 3</th>
												<th scope="col">Rota Virus1</th>
												<th scope="col">Rota Virus2</th>
												<th scope="col">Rota Virus3</th>
												<th scope="col">Measles</th>
												<th scope="col">Yellow Fever</th>
												<th scope="col">Vitamin A</th>
												<th scope="col">F.I.C</th>
												<th scope="col">Issued with LLITN this visit? (Y/N)</th>
												<th scope="col">Referrals: 1=From Other HF, 2=To Other HF, 3=From CU, 4=To CU</th>
												<th scope="col">Remarks</th>
												<th>Actions</th>

											</tr>
										</thead>
										<tbody>
											
											<?php 
											$results=mysqli_query($mysqli,"SELECT * FROM moh510register");
											while($data=mysqli_fetch_array($results)){
											
											?>

												<tr onclick="propagate">
													<td><?php echo $data['date'];?></td>
													<td><?php echo $data['serialnumber'];?></td>
													<td><?php echo $data['childsnumber'];?></td>
													<td><?php echo $data['childsnames'];?></td>
													<td><?php echo $data['sex'];?></td>
													<td><?php echo $data['dob'];?></td>
													<td><?php echo $data['datefirstseen'];?></td>
													<td><?php echo $data['fname'];?></td>
													<td><?php echo $data['mname'];?></td>
													<td><?php echo $data['village'];?></td>
													<td><?php echo $data['telephone'];?></td>
													<td><?php echo $data['bcg'];?></td>
													<td><?php echo $data['revaccination'];?></td>
													<td><?php echo $data['poliobirthdose'];?></td>
													<td><?php echo $data['polio1'];?></td>
													<td><?php echo $data['polio2'];?></td>
													<td><?php echo $data['polio3'];?></td>
													<td><?php echo $data['dpt1'];?></td>
													<td><?php echo $data['dpt2'];?></td>
													<td><?php echo $data['dpt3'];?></td>
													<td><?php echo $data['pvc1'];?></td>
													<td><?php echo $data['pvc2'];?></td>
													<td><?php echo $data['pvc3'];?></td>
													<td><?php echo $data['rota1'];?></td>
													<td><?php echo $data['rota2'];?></td>
													<td><?php echo $data['rota3'];?></td>
													<td><?php echo $data['measles'];?></td>
													<td><?php echo $data['yellowfever'];?></td>
													<td><?php echo $data['vitamina'];?></td>
													<td><?php echo $data['fic'];?></td>
													<td><?php echo $data['llitn'];?></td>
													<td><?php echo $data['referrals'];?></td>
													<td><?php echo $data['remarks'];?></td>
													<td class="table-action">
													<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
													<a href="#"><i class="align-middle" data-feather="trash"></i></a>
													</td>
												</tr>
													<?php
												}
													?>
										</tbody>
									</table>
								</div>
							</div>
							<button type="button" class="btn btn-primary" name="buttonPrint" onclick="createMOH510PDF()">Print Register</button>
							
<!-- Print MOH510 Register-->
								<script>
								    function createMOH510PDF() {
								        var sTable = document.getElementById('MOH510RegisterPDF').innerHTML;
								        win.print();

								        var style = "<style>";
								        style = style + "table {width: 100%;font: 17px Calibri;}";
								        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
								        style = style + "padding: 2px 3px;text-align: center;}";
								        style = style + "</style>";

								        // CREATE A WINDOW OBJECT.
								        var win = window.open('', '', 'height=700,width=700');

								        win.document.write('<html><head>');
								        win.document.write('<title>MOH 510 REGISTER</title>');   // <title> FOR PDF HEADER.
								        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
								        win.document.write('</head>');
								        win.document.write('<body>');
								        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
								        win.document.write('</body></html>');

								        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

								        win.print();    // PRINT THE CONTENTS.
								    }
							</script>
<!-- End of print-->

						</div>

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
	<script src="js/printpdf.js"></script>

	
</body>

</html>