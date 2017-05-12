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
	<style>
		body {
			padding-top: 3.4rem;
			background: #f5f5f5;
		}
		.container {
			background: #fff;
		}
	</style>

	<!-- Page Title -->
	<title>KohlerCMS</title>
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">CMS</a>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container">

		<div class="starter-template text-center">
			<h1>Bootstrap starter template</h1>
			<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
		</div>

	</div><!-- /.container -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>