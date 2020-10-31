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
								<h3></strong> Point of Care</h3>
							</div>

							<div class="col-auto ml-auto text-right mt-n1">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
										<li class="breadcrumb-item"><a href="dashboard.php">HealthIT Immunization Tracker</a></li>
										<li class="breadcrumb-item active" aria-current="page">Point of Care</li>
										
									</ol>
								</nav>
							</div>

							<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><i class="align-middle" data-feather="user"></i>  Category</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#newpatient" role="tab">
          New Patient
        </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#revisitpatient" role="tab">
          Revisit Patient
        </a>
									
								</div>
							</div>
							

							
							<!-- -->
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade" id="newpatient" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Register New Patient</h5>
										</div>
										<div class="card-body">
											<form action="" method="POST">
												<div class="row">
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDate">Date</label>
														<input type="date" class="form-control" id="inputDate" name="date">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputSN">Serial Number</label>
														<input type="text" class="form-control" id="inputSN" name="serialnumber" disabled placeholder="Auto-generated">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputCNumber">Child's Number</label>
														<input type="text" class="form-control" id="inputCNumber" name="childsnumber">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputCName">Child's Name</label>
														<input type="text" class="form-control" id="inputCName" name="childsname">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputSex">Sex</label>
														<select id="inputSex" class="form-control" name="sex">
                											<option selected disabled>Select an option</option>
                											<option>M</option>
                											<option>F</option>
              											</select>
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDateofBirth">Date of Birth</label>
														<input type="date" class="form-control" id="inputDateofBirth" name="dob">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDateFirstSeen">Date First Seen</label>
														<input type="date" class="form-control" id="inputDateFirstSeen" name="datefirstseen">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputFName">Father's Full Name</label>
														<input type="text" class="form-control" id="inputFName" name="fname">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputMName">Mother's Full Name</label>
														<input type="text" class="form-control" id="inputMName" name="mname">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputVillage">Village</label>
														<input type="text" class="form-control" id="inputVillage" name="village">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputTelephone">Telephone</label>
														<input type="text" class="form-control" id="inputTelephone" name="telephone">
													</div>

													</div>
												<button type="submit" class="btn btn-primary" name="buttonSave">Save Patient Info</button>

											
											</form>

											<?php
											if(isset($_POST['buttonSave'])){

											$inputDate=$_POST['date'];
											
											$inputCNumber=$_POST['childsnumber'];
											$inputCName=$_POST['childsname'];
											$inputSex=$_POST['sex'];
											$inputDateofBirth=$_POST['dob'];
											$inputDateFirstSeen=$_POST['datefirstseen'];
											$inputFName=$_POST['fname'];
											$inputMName=$_POST['mname'];
											$inputVillage=$_POST['village'];
											$inputTelephone=$_POST['telephone'];
											
											

											$result=mysqli_query($mysqli,"INSERT into patientbasicinfo values('$inputDate','','$inputCNumber','$inputCName','$inputSex','$inputDateofBirth','$inputDateFirstSeen','$inputFName','$inputMName','$inputVillage','$inputTelephone')");
											$updatemoh=mysqli_query($mysqli,"INSERT into moh510register values('$inputDate','','$inputCNumber','$inputCName','$inputSex','$inputDateofBirth','$inputDateFirstSeen','$inputFName','$inputMName','$inputVillage','$inputTelephone','','','','','','','','','','','','','','','','','','','','','','','')");
											if($result){
												echo "Success";
											}else{
												
												echo "Fail";
											}

											if($updatemoh){
												echo "Success";
											}else{
												
												echo "Fail";
											}
											
											}
											?>

										</div>
										
									</div>
							<!-- Search patient-->
							</div>
								<div class="tab-pane fade show active" id="revisitpatient" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Search for an existing patient</</h5>
											<br>
											<br>
														<div class="col-xl-6 col-xxl-7" id="searchpatient">
															<form class="d-none d-sm-inline-block">
																<div class="input-group input-group-navbar">
																	<input type="text" class="form-control" placeholder="Search…" aria-label="Search" name="buttonSearchPatient">
																	<button class="btn" type="button" name="buttonSearchPatient">
				              											<i class="align-middle" data-feather="search"></i>
				            										</button>
				            									</div>
														</div>
														<br>
														<br>


														<!-- -Search Table-->
															<div class="table-responsive">
																<table class="table mb-0" name="searchMOH510Register" id="searchMOH510Register">
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

																		</tr>
																	</thead>
																	<tbody>
																		
																		<?php 
																		$results=mysqli_query($mysqli,"SELECT * FROM patientbasicinfo");
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
																		</td>
																			</tr>
																				<?php
																			}
																				?>
																	</tbody>
																</table>

																<!--Populate fields-->
																<script type="text/javascript">
																	var table = document.getElementById('searchMOH510Register'),rTndex;
																	for (var i=1;i<table.rows.length;i++){
																		table.rows[i].onclick=function(){
																			rIndex=this.rowIndex;
																			document.getElementById("autofill-inputDate").value = this.cells[0].innerHTML;
																			document.getElementById("autofill-inputSN").value = this.cells[1].innerHTML;
																			document.getElementById("autofill-inputCNumber").value = this.cells[2].innerHTML;
																			document.getElementById("autofill-inputCName").value = this.cells[3].innerHTML;
																			document.getElementById("autofill-inputSex").value = this.cells[4].innerHTML;
																			document.getElementById("autofill-inputDateofBirth").value = this.cells[5].innerHTML;
																			document.getElementById("autofill-inputDateFirstSeen").value = this.cells[6].innerHTML;
																			document.getElementById("autofill-inputFName").value = this.cells[7].innerHTML;
																			document.getElementById("autofill-inputMName").value = this.cells[8].innerHTML;
																			document.getElementById("autofill-inputVillage").value = this.cells[9].innerHTML;
																			document.getElementById("autofill-inputTelephone").value = this.cells[10].innerHTML;
																			document.getElementById("exampledata").value = this.cells[1].innerHTML;

																		};
																	}
																</script>

																

															</div>



													</form>
													<br>
													<br>
													<br>
													

													<!-- Basic information section-->

													<h5 class="card-title">Basic Information</</h5>
													<br>
													<br>
													<form action="" method="POST">

														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputDate">Date</label>
																<input type="text" readonly class="form-control" id="autofill-inputDate" name="date">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputSN">Serial Number</label>
																<input type="text" class="form-control" id="autofill-inputSN" name="serialnumber" readonly placeholder="Auto-generated">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputCNumber">Child's Number</label>
																<input type="text" class="form-control" id="autofill-inputCNumber" name="childsnumber" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputCName">Child's Name</label>
																<input type="text" class="form-control" id="autofill-inputCName" name="childsname" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputSex">Sex</label>
																<input type="text" class="form-control" id="autofill-inputSex" name="sex" readonly>														
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputDateofBirth">Date of Birth</label>
																<input type="text" class="form-control" id="autofill-inputDateofBirth" name="dob" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputDateFirstSeen">Date First Seen</label>
																<input type="text" class="form-control" id="autofill-inputDateFirstSeen" name="datefirstseen" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputFName">Father's Full Name</label>
																<input type="text" class="form-control" id="autofill-inputFName" name="fname" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputMName">Mother's Full Name</label>
																<input type="text" class="form-control" id="autofill-inputMName" name="mname" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputVillage">Village</label>
																<input type="text" class="form-control" id="autofill-inputVillage" name="village" readonly>
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="autofill-inputTelephone">Telephone</label>
																<input type="text" class="form-control" id="autofill-inputTelephone" name="telephone" readonly>
															</div>
															
															</div>
															<button type="submit" class="btn btn-primary" name="buttonEnrollPatient">Enroll patient for vaccination</button>

															<br>
															<br>



															<?php
															if(isset($_POST['buttonEnrollPatient'])){

															$inputDate=$_POST['date'];
															$inputSN=$_POST['serialnumber'];
															$inputCNumber=$_POST['childsnumber'];
															$inputCName=$_POST['childsname'];
															$inputSex=$_POST['sex'];
															$inputDateofBirth=$_POST['dob'];
															$inputDateFirstSeen=$_POST['datefirstseen'];
															$inputFName=$_POST['fname'];
															$inputMName=$_POST['mname'];
															$inputVillage=$_POST['village'];
															$inputTelephone=$_POST['telephone'];
															
															

															$enrollpatient=mysqli_query($mysqli,"INSERT into moh510register values('$inputDate','$inputSN','$inputCNumber','$inputCName','$inputSex','$inputDateofBirth','$inputDateFirstSeen','$inputFName','$inputMName','$inputVillage','$inputTelephone','','','','','','','','','','','','','','','','','','','','','','')");
															if($enrollpatient){
																echo "$inputCName has been enrolled successfully";

															}else{
																
																echo "Fail".mysqli_error($enrollpatient);
															}

															
															}

															?>
																									
													</form>	

													
											</div>		
										</div>
									</div>
								</div>



<!-- Start of Tabs-->

							<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#tab-1">BCG</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-2">Polio</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-3">DPT</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-4">PVC</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-5">Rota Virus</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-6">Measles</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-7">Vitamin A</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-8">F.I.C.</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-9">LLITN</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-10">Referrals</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-11">Remarks</a>
										</li>

									</ul>
								</div>
<!--Start of Tabs -->								
								<div class="card-body">
									<div class="tab-content">
										<!-- Tab 1 -->
										<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
											
											<!--BCG Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputBCG">BCG</label>
																<input type="date" class="form-control" id="inputBCG" name="bcg">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputRevaccination">Revaccination</label>
																<input type="date" class="form-control" id="inputRevaccination" name="revaccination">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonBCG">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonBCG'])){

															$inputBCG=$_POST['bcg'];
															$inputRevaccination=$_POST['revaccination'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET bcg='$inputBCG', revaccination='$inputRevaccination' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

									<!-- End of BCG Tab-->
										</div>
									<!-- End of Tab 1-->

									<!-- Tab 2-->	
										<div class="tab-pane fade" id="tab-2" role="tabpanel">
											<!--Polio Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPolioBD">Polio Birth Dose</label>
																<input type="date" class="form-control" id="inputPolioBD" name="poliobirthdose">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPolio1">1st Polio</label>
																<input type="date" class="form-control" id="inputPolio1" name="polio1">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPolio2">2nd Polio</label>
																<input type="date" class="form-control" id="inputPolio2" name="polio2">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPolio3">3rd Polio</label>
																<input type="date" class="form-control" id="inputPolio3" name="polio3">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonPolio">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonPolio'])){

															$inputPolioBD=$_POST['poliobirthdose'];
															$inputPolio1=$_POST['polio1'];
															$inputPolio2=$_POST['polio2'];
															$inputPolio3=$_POST['polio3'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET poliobirthdose='$inputPolioBD', polio1='$inputPolio1', polio2='$inputPolio2', polio3='$inputPolio3' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of Polio Tab-->
										</div>
									<!-- End of Tab 2-->

									<!-- Tab 3-->
										<div class="tab-pane fade" id="tab-3" role="tabpanel">
											<!--DPT Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputDPT1">DPT/Hep.B/Hib.1</label>
																<input type="date" class="form-control" id="inputDPT1" name="dpt1">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputDPT2">DPT/Hep.B/Hib.2</label>
																<input type="date" class="form-control" id="inputDPT2" name="dpt2">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputDPT3">DPT/Hep.B/Hib.3</label>
																<input type="date" class="form-control" id="inputDPT3" name="dpt3">
															</div>
															
														</div>
														<button type="submit" class="btn btn-primary" name="buttonDpt">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonDpt'])){

															
															$inputDPT1=$_POST['dpt1'];
															$inputDPT2=$_POST['dpt2'];
															$inputDPT3=$_POST['dpt3'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET dpt1='$inputDPT1', dpt2='$inputDPT2', dpt3='$inputDPT3' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of DPT Tab-->
										</div>
										<!-- End of Tab 3-->


										<!-- Tab 4-->
										<div class="tab-pane fade" id="tab-4" role="tabpanel">
											<!--PVC Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPVC1">PVC 10 (Pneumococcal) 1</label>
																<input type="date" class="form-control" id="inputPVC1" name="pvc1">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPVC2">PVC 10 (Pneumococcal) 2</label>
																<input type="date" class="form-control" id="inputPVC2" name="pvc2">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputPVC3">PVC 10 (Pneumococcal) 3</label>
																<input type="date" class="form-control" id="inputPVC3" name="pvc3">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonPvc">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonPvc'])){

															
															$inputPVC1=$_POST['pvc1'];
															$inputPVC2=$_POST['pvc2'];
															$inputPVC3=$_POST['pvc3'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET pvc1='$inputPVC1', pvc2='$inputPVC2', pvc3='$inputPVC3' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of PVC Tab-->
										</div>
										<!-- End of Tab 4-->


										<!-- Tab 5-->
										<div class="tab-pane fade" id="tab-5" role="tabpanel">
											<!--Rota Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputRV1">Rota Virus 1</label>
																<input type="date" class="form-control" id="inputRV1" name="rota1">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputRV2">Rota Virus 2</label>
																<input type="date" class="form-control" id="inputRV2" name="rota2">
															</div>
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputRV3">Rota Virus 3</label>
																<input type="date" class="form-control" id="inputRV3" name="rota3">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonRv">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonRv'])){

															
															$inputRV1=$_POST['rota1'];
															$inputRV2=$_POST['rota2'];
															$inputRV3=$_POST['rota3'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET rota1='$inputRV1', rota2='$inputRV2', rota3='$inputRV3' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of Rota Tab-->
										</div>
										<!-- End of Tab 5-->


										<!-- Tab 6-->
										<div class="tab-pane fade" id="tab-6" role="tabpanel">
											<!--Measles Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputMeasles">Measles</label>
																<input type="date" class="form-control" id="inputMeasles" name="measles">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonMeasles">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonMeasles'])){

															
															$inputMeasles=$_POST['measles'];
															

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET measles='$inputMeasles' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of Measles Tab-->
										</div>
										<!-- End of Tab 6-->



										<!-- Tab 7-->
										<div class="tab-pane fade" id="tab-7" role="tabpanel">
											<!--Vitamin A Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputVitA">Vitamin A</label>
																<input type="date" class="form-control" id="inputVitA" name="vitamina">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonVita">Administer</button>

											
													</form>

													<?php
														if(isset($_POST['buttonVita'])){

															
															$inputVitA=$_POST['vitamina'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET vitamina='$inputVitA' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of Vitamin A Tab-->
										</div>
										<!-- End of Tab 7-->


										<!-- Tab 8-->
										<div class="tab-pane fade" id="tab-8" role="tabpanel">
											<!--FIC Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputFIC">F.I.C</label>
																<input type="date" class="form-control" id="inputFIC" name="fic">

															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonFic">Save</button>

											
													</form>

													<?php
														if(isset($_POST['buttonFic'])){

															
															$inputFIC=$_POST['fic'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET fic='$inputFIC' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of FIC Tab-->
										</div>
										<!-- End of Tab 8-->


										<!-- Tab 9-->
										<div class="tab-pane fade" id="tab-9" role="tabpanel">
											<!--LLITN Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputLLITN">Issued with LLITN this visit?</label>
																<select id="inputLLITN" class="form-control" name="llitn">
		                											<option selected disabled>Select an option</option>
		                											<option>Y</option>
		                											<option>N</option>
		              											</select>
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonLlitn">Save</button>

											
													</form>

													<?php
														if(isset($_POST['buttonLlitn'])){

															
															$inputLLITN=$_POST['llitn'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET llitn='$inputLLITN' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of LLITN Tab-->
										</div>
										<!-- End of Tab 9-->


										<!-- Tab 10-->
										<div class="tab-pane fade" id="tab-10" role="tabpanel">
											<!--Referrals Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputReferrals">Referrals</label>
																<select id="inputReferrals" class="form-control" name="referrals">
		                											<option selected disabled>Select an option</option>
		                											<option>1</option>
		                											<option>2</option>
		                											<option>3</option>
		                											<option>4</option>
		              											</select>
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonReferrals">Save</button>

											
													</form>

													<?php
														if(isset($_POST['buttonReferrals'])){

															
															$inputReferrals=$_POST['referrals'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET referrals='$inputReferrals' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of Referrals Tab-->
										</div>
										<!-- End of Tab 10-->

										<!-- Tab 11-->
										<div class="tab-pane fade" id="tab-11" role="tabpanel">
											<!--Remarks Tab -->
											<div class="card">
										
												<div class="card-body">
													<form action="" method="POST">
														<div class="row">
															<!--Row-->
															<div class="mb-3 col-md-6">
																<label class="form-label" for="inputRemarks">Remarks</label>
																<input type="text" class="form-control" id="inputRemarks" name="remarks">
															</div>
													
														</div>
														<button type="submit" class="btn btn-primary" name="buttonRemarks">Save</button>

											
													</form>

													<?php
														if(isset($_POST['buttonRemarks'])){

															
															$inputRemarks=$_POST['remarks'];

															$result=mysqli_query($mysqli,"UPDATE patientimmunizationprogress SET remarks='$inputRemarks' WHERE serialnumber='serialnumber'");

															if($result){
																echo "Success";
															}else{
																
																echo "Fail".mysqli_error($result);
															}
														
														}

													?>

												</div>
										
											</div>

											<!-- End of Remarks Tab-->
										</div>
										<!-- End of Tab 11-->

									</div>
								</div>
							</div>
						</div>
<!-- End of tabs-->



								<!-- Logout-->
								
								<div class="tab-pane fade" id="logout" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Do you wish to continue?</</h5>
											<br>
											<br>
											<button type="submit" class="btn btn-primary">Yes</button>
											<button type="submit" class="btn btn-primary">No</button>		
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