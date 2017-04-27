<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Nazrol HR</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
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
						<li class="active">
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

	<div class="cont">
		<div class="col-md-12">
			<div class="row">
				<ul class="list-clearfix">
			        <li class="icon-container">
			        	<a href="#">
			            	<i class="icon fa fa-building" aria-hidden="true"></i>
			            </a>
			            <div>Company Settings</div>
			        </li>
			        <li class="icon-container">
			        	<a href="users.php">
			            	<i class="icon fa fa-group" aria-hidden="true"></i>
			            </a>
			            <div>Your Team</div>
			        </li>
			        <li class="icon-container">
			        	<a href="#">
			            	<i class="icon fa fa-calendar" aria-hidden="true"></i>
			            </a>
			            <div>Leave Settings</div>
			        </li>
			        <li class="icon-container">
			        	<a href="leave.php">
			            	<i class="icon fa fa-pencil-square-o" aria-hidden="true"></i>
			            </a>
			            <div>Apply Leave</div>
			        </li>
			        <li class="icon-container">
			        	<a href="#">
			            	<i class="icon fa fa-book" aria-hidden="true"></i>
			            </a>
			            <div>Leave History</div>
	                </li>
        		</ul>
			</div>
		</div>
	</div>
</body>
	<script src="../css/jquery/dist/jquery.min.js"></script>
	<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
</html>