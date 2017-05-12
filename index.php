<?php 
	require 'inc/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Tell the browser that the page is UTF-8 -->
	<meta charset="UTF-8">

	<!-- Tells the browser to scale the page according to the device's dpi -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Link the stylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- Page Title -->
	<title>KohlerCMS</title>
</head>
<body>
	<nav class="navbar">
		<?php 
			$result = $db->query("SELECT * FROM nav");
			while($row = $result->fetch_assoc()):
		?>
		<span class="navbar__item"><a href="#" class="item__link">Link 1</a></span>
		<span class="navbar__item"><a href="#" class="item__link">Link 2</a></span>
		<span class="navbar__item"><a href="#" class="item__link">Link 3</a></span>
		<span class="navbar__item"><a href="#" class="item__link">Link 4</a></span>
		<?php endwhile; 
			if($result->num_rows == 0):
		?>
		<span class="navbar__item"><a href="#" class="item__link fakelink">No nav items at the moment.</a></span>
		<?php
			endif; 
		?>
	</nav>
	<main class="page-content">
		<?php 
			$result = $db->query("SELECT * FROM frontpage");
			$row = $result->fetch_assoc();
		?>
		<section class="container">
			<h1 class="title"><?php echo $row['frontpage_title']; ?></h1>
			<p class="desc"><?php echo $row['frontpage_content']; ?></p>
		</section>
	</main>
	<footer class="footer">
		<p class="footer__text">&copy; Copyright 2017 | KohlerCMS - A product by KohlerCoding</p>
	</footer>
</body>
</html>