<?php 
	require '../inc/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Tell the browser that the page is UTF-8 -->
	<meta charset="UTF-8">

	<!-- Tells the browser to scale the page according to the device's dpi -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Link the stylesheet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme-cyborg.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mdi-compat.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js""></script>
	<!-- WARNING!!! ADDED ONLY WHILE DEVELOPMENT IS ONGOING! WILL BE REMOVED AFTER RELEASE! -->
	<script>
		$.ajax({
			url: 'https://randomuser.me/api/?results=1&inc=picture&nat=DK&gender=male',
			dataType: 'json',
			success: function(data) {
				$("#profileImg").attr("src", data.results[0].picture.medium);
			}
		})
	</script>
	<style>
		/*body {
			padding-top: 3.4rem;
			background: #f5f5f5;
		}
		.container {
			background: #fff;
		}*/
		#profileImg {
			border-radius: 50%;
		}
	</style>

	<!-- Page Title -->
	<title>KohlerCMS</title>
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary fixed-top">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Housekeeping</a>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="mdi mdi-home"></i> Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="mdi mdi-account-multiple"></i> Users</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="mdi mdi-puzzle"></i> Plugins (WIP)</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="mdi mdi-settings"></i> Site settings</a>
				</li>
			</ul>
			<ul class="navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img id="profileImg" style="margin-top: -0.5em;margin-bottom: -0.5em;" src="" height="30" width="30" class="d-inline-block align-middle">&nbsp;
						Your Profile
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a href="#" class="dropdown-item"><i class="mdi mdi-account-settings-variant"></i> Update information</a>
						<a href="#" class="dropdown-item"><i class="mdi mdi-logout"></i> Log out</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link"><i class="mdi mdi-keyboard-backspace"></i> Back to site</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-md-2 hidden-xs-down bg-inverse sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<i class="nav-link mdi mdi-information mdi-36px"></i>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?p=home">Overview</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?p=adm_navbar">Nav items</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Content</a>
					</li>
				</ul>

				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<i class="nav-link mdi mdi-account-multiple mdi-36px"></i>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Edit users</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Global user settings</a>
					</li>
				</ul>

				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<i class="nav-link mdi mdi-wrench mdi-36px"></i>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Site settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Permalinks</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">And more...</a>
					</li>
				</ul>
			</nav>
			<main class="col-sm-3 offset-sm-3 col-md-10 offset-md-2 pt-3">
				<?php 
					if(!isset($_GET['p'])) {
						header("location: index.php?p=home");
						$file = $_GET['p'].".php";
						include $file;
					} else {
						$file = $_GET['p'].".php";
						include $file;
					}
				?>
			</main>
		</div>
	</div><!-- /.container-fluid -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>