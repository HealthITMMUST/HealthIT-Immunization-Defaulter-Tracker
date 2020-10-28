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
					</li>
					<li class="sidebar-header">
						Reports
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="moh-510-register.html">
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
										<li class="breadcrumb-item"><a href="#">HealthIT Immunization Tracker</a></li>
										<li class="breadcrumb-item active" aria-current="page">Point of Care</li>
										
									</ol>
								</nav>
							</div>

							<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><i class="align-middle" data-feather="user"></i>  Patient Category</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#newpatient" role="tab">
          New Patient
        </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#logout" role="tab">
          Revisit Patient
        </a>
									
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="newpatient" role="tabpanel">

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
														<input type="text" class="form-control" id="inputDate" name="date">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputSN">Serial Number</label>
														<input type="text" class="form-control" id="inputSN" name="serialnumber">
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
														<input type="text" class="form-control" id="inputDateofBirth" name="dob">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDateFirstSeen">Date First Seen</label>
														<input type="text" class="form-control" id="inputDateFirstSeen" name="datefirstseen">
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
														<select id="inputVillage" class="form-control" name="village">
                											<option selected disabled>Choose Sub County</option>
                											<option>Butere</option>
                											<option>Ikolomani</option>
                											<option>Khwisero</option>
                											<option>Likuyani</option>
                											<option>Lugari</option>
                											<option>Lurambi</option>
                											<option>Malava</option>
                											<option>Matungu</option>
                											<option>Mumias East</option>
                											<option>Mumias West</option>
                											<option>Navakholo</option>								
                											<option>Shinyalu</option>
              											</select>
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputTelephone">Telephone</label>
														<input type="text" class="form-control" id="inputTelephone" name="telephone">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputBCG">BCG</label>
														<input type="text" class="form-control" id="inputBCG" name="bcg">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputRevaccination">Revaccination</label>
														<input type="text" class="form-control" id="inputRevaccination" name="revaccination">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPolioBD">Polio Birth Dose</label>
														<input type="text" class="form-control" id="inputPolioBD" name="poliobirthdose">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPolio1">1st Polio</label>
														<input type="text" class="form-control" id="inputPolio1" name="polio1">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPolio2">2nd Polio</label>
														<input type="text" class="form-control" id="inputPolio2" name="polio2">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPolio3">3rd Polio</label>
														<input type="text" class="form-control" id="inputPolio3" name="polio3">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDPT1">DPT/Hep.B/Hib.1</label>
														<input type="text" class="form-control" id="inputDPT1" name="dpt1">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDPT2">DPT/Hep.B/Hib.2</label>
														<input type="text" class="form-control" id="inputDPT2" name="dpt2">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputDPT3">DPT/Hep.B/Hib.3</label>
														<input type="text" class="form-control" id="inputDPT3" name="dpt3">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPVC1">PVC 10 (Pneumococcal) 1</label>
														<input type="text" class="form-control" id="inputPVC1" name="pvc1">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPVC2">PVC 10 (Pneumococcal) 2</label>
														<input type="text" class="form-control" id="inputPVC2" name="pvc2">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputPVC3">PVC 10 (Pneumococcal) 3</label>
														<input type="text" class="form-control" id="inputPVC3" name="pvc3">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputRV1">Rota Virus 1</label>
														<input type="text" class="form-control" id="inputRV1" name="rota1">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputRV2">Rota Virus 2</label>
														<input type="text" class="form-control" id="inputRV2" name="rota2">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputRV3">Rota Virus 3</label>
														<input type="text" class="form-control" id="inputRV3" name="rota3">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputMeasles">Measles</label>
														<input type="text" class="form-control" id="inputMeasles" name="measles">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputYF">Yellow Fever</label>
														<input type="text" class="form-control" id="inputYF" name="yellowfever">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputVitA">Vitamin A</label>
														<input type="text" class="form-control" id="inputVitA" name="vitamina">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputFIC">F.I.C</label>
														<input type="text" class="form-control" id="inputFIC" name="fic">
													</div>
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputLLITN">Issued with LLITN this visit?</label>
														<select id="inputLLITN" class="form-control" name="llitn">
                											<option selected disabled>Select an option</option>
                											<option>Y</option>
                											<option>N</option>
              											</select>
													</div>
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
													<!--Row-->
													<div class="mb-3 col-md-6">
														<label class="form-label" for="inputRemarks">Remarks</label>
														<input type="text" class="form-control" id="inputRemarks" name="remarks">
													</div>
													</div>
												<button type="submit" class="btn btn-primary" name="buttonSave">Save changes</button>
											
											</form>

											<?php
											if(isset($_POST['buttonSave'])){

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
											$inputBCG=$_POST['bcg'];
											$inputRevaccination=$_POST['revaccination'];
											$inputPolioBD=$_POST['poliobirthdose'];
											$inputPolio1=$_POST['polio1'];
											$inputPolio2=$_POST['polio2'];
											$inputPolio3=$_POST['polio3'];
											$inputDPT1=$_POST['dpt1'];
											$inputDPT2=$_POST['dpt2'];
											$inputDPT3=$_POST['dpt3'];
											$inputPVC1=$_POST['pvc1'];
											$inputPVC2=$_POST['pvc2'];
											$inputPVC3=$_POST['pvc3'];
											$inputRV1=$_POST['rota1'];
											$inputRV2=$_POST['rota2'];
											$inputRV3=$_POST['rota3'];
											$inputMeasles=$_POST['measles'];
											$inputYF=$_POST['yellowfever'];
											$inputVitA=$_POST['vitamina'];
											$inputFIC=$_POST['fic'];
											$inputLLITN=$_POST['llitn'];
											$inputReferrals=$_POST['referrals'];
											$inputRemarks=$_POST['remarks'];
											

											$result=mysqli_query($mysqli,"INSERT into patientimmunizationprogress values('$inputDate','$inputSN','$inputCNumber','$inputCName','$inputSex','$inputDateofBirth','$inputDateFirstSeen','$inputFName','$inputMName','$inputVillage','$inputTelephone','$inputBCG','$inputRevaccination','$inputPolioBD','$inputPolio1','$inputPolio2','$inputPolio3','$inputDPT1','$inputDPT2','$inputDPT3','$inputPVC1','$inputPVC2','$inputPVC3','$inputRV1','$inputRV2','$inputRV3','$inputMeasles','$inputYF','$inputVitA','$inputFIC','$inputLLITN','$inputReferrals','$inputRemarks')");
											if($result){
												echo "Success";
											}else{
												echo "Fail".mysqli_error($result);
											}
											
											}
											?>

										</div>
										
									</div>

							</div>
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new JsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				}
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
				nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
			});
		});
	</script>

</body>

</html>