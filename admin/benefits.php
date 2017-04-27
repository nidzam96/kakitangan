<!DOCTYPE html>
<html>
<head>
	<title>Benefits | Nazrol HR</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
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
						<li>
							<a href="leave.php">
								<span class="fa fa-calendar fa-fw"></span>
								Leave 
							</a>
						</li>
						<li class="active">
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

	<div class="col-md-8 col-md-offset-2">
		<div id="calendar"></div>
	</div>
</body>
	<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>

	<script>
		$(document).ready(function() {

	    // page is now ready, initialize the calendar...

	    $('#calendar').fullCalendar({
	        // put your options and callbacks here
    })

});
	</script>
</html>