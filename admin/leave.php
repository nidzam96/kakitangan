<!DOCTYPE html>
<html>
<head>
	<title>Leave | Nazrol HR</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../bower_components/jquery-ui/themes/base/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link rel="stylesheet" type="text/css" href="../bower_components/fullcalendar/dist/fullcalendar.css">
	
	<script src="../css/jquery/dist/jquery.min.js"></script>
	<script src="../bower_components/moment/min/moment.min.js"></script>
	<script src="../bower_components/fullcalendar/dist/fullcalendar.js"></script>
</head>
<body>
	<!-- <div class="row"> -->
		<dir class="col12">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="#" class="navbar-brand">Nazrol HR</a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="dashboard.php">
								<span class="fa fa-podcast fa-fw"></span>
								Dashboard
							</a>
						</li>
						<li>
							<a href="users.php">
								<span class="fa fa-users fa-fw"></span>
								Users
							</a>
						</li>
						<li class="active">
							<a href="leave.php">
								<span class="fa fa-calendar fa-fw"></span>
								Leave 
							</a>
						</li>
						<li>
							<a href="benefits.php">
								<span class="fa fa-birthday-cake fa-fw"></span>
								Benefits
							</a>
						</li>
					</ul>	

					<ul class="nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Welcome HR
								<i class="fa fa-user fa-fw"></i>
								<i class="fa fa-caret-down"></i>
							</a>

							<ul class="dropdown-menu dropdown-messages">
								<li>
									<a href="#">
									<i class="fa fa-lock fa-fw"></i>
									Change Password
									</a>
								</li>
								<li>
									<a href="#">
									<i class="fa fa-sign-out fa-fw"></i>
									Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>	
				</div>
			</nav>
		</dir>
	<!-- </div> -->

	<div class="section-2">
		<div class="tabs" role="tabpanel">
			<ul class="nav-tabs" role="tablist">
				<li class="active" role="presentation">
					<a href="#apply" role="tab" data-toggle="tab" aria-controls="apply" id="tabApply">
						Apply for leave
					</a>
				</li>
			</ul>
		</div>

		<div class="tab-content">
			<div class="tab-pane active" id="apply">
				<section class="section-secondary section-calendar">
					
					<div class="row">
						<div class="col-md-8">
							<div class="section-head">
								<h2 class="title" style="margin-left: 280px">Calendar</h2>
							</div>

							<div class="section-head-entry">
								Plan ahead and make sure your leave doesn't clash with
                        		any company or department's events by checking your calendar(s).
							</div>

							<div class="top30">
								<div id="calendar"></div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form form-event">
								<div role="panel" class="tabs">
									<div class="form-body">
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="leave">
												<form id="applyleave" method="post">
													<input type="hidden" name="crsfmiddlewaretoken">
													<input type="hidden" name="action" value="apply_leave">

													<div class="form-group" style="margin-top: -28px;">
														
														<div class="form-row">
															<label class="form-label">Select Location</label>
															<div class="form-controls">
																<select name="location" id="location" class="form-control">
																	<option value="Kelantan" selected="selected">Kelantan</option>
																</select>
															</div>
														</div>

														<div class="form-row">
															<label class="form-label">Select Employees</label>
															<div class="form-controls">
																<select name="selectEmployee" id="selectEmployee" class="form-control">
																	<option value="Nidzam">Nidzam</option>
																</select>
															</div>
														</div>

														<div class="form-row">
															<label class="form-label">Leave Type</label>
															<div class="form-controls">
																<select name="leaveType" id="leaveType" class="form-control">
																	<option value="Annual" data-availdays="5.5">Annual</option>
																	<option value="Hospitaliztion" data-availdays="60.0">Hospitalization</option>
																	<option value="Replacement" data-availdays="0.0">Replacement</option>
																	<option value="Sick" data-availdays="14.0">Sick</option>
																</select>
																
															</div>
														</div>

														<div class="form-row">
															<div class="col-md-6" style="margin-left: -15px; margin-right: 10px">
																<label class="form-label">Start Date</label>
																<input type="date" name="sdate" class="form-control">
															</div>
															<div class="col-md-6">
																<label class="for-label">End Date</label>
																<input type="date" name="edate" class="form-control">
															</div>
														</div>

														<div class="form-row">
															
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</body>
<!-- 	<script src="../css/jquery/dist/jquery.min.js"></script>
	<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>

    <script type="text/javascript" src="../css/admin/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../css/admin/isotope.pkgd.min.js" ></script>
    <script type="text/javascript" src="../css/admin/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="../css/admin/functions.js"></script>
    <script type="text/javascript" src="../css/admin/bootstrap-dialog.min.js"></script>
    <script type="text/javascript" src="../css/admin/uservoice.js"></script>
        
	<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../css/admin/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="../css/admin/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="../css/admin/bootstrap-tokenfield.min.js"></script>
	<script type="text/javascript" src="../css/admin/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../css/admin/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="../css/admin/dataTables.tableTools.js"></script>
	<script type="text/javascript" src="../css/admin/jquery.truncate.min.js"></script> -->

	<script>
		$(document).ready(function() {

	    // page is now ready, initialize the calendar...

	    $('#calendar').fullCalendar({
	        // put your options and callbacks here
    	})

	});
	</script>
</html>