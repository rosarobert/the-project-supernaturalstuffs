<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Super(natural) Store</title>
		<link href='https://fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="./src/client/css/reset.css">
		<link rel="stylesheet" type="text/css" href="./src/client/css/stylesheet.css">
		<link rel="stylesheet" href="./src/client/css/header-footer.css" />
		<link rel="stylesheet" href="./src/client/css/home.css" />

		<!--<script src="script.js"></script>-->
	</head>
	<body>
	<!--Include header-->
	<?php
		include 'src/server/include/header.php';
	?>
		<main>
			<div id="about">
				<h2>Our Mission</h2>
				<p>Our mission is to give everyone the opportunity to purchase a supernatural creature and equipment without having to hunt them for themselves. </p>
				<img src="./src/client/images/SupernaturalBanner.png" alt="Supernatural creatures">
				<h2>About</h2>
				<p>We support a safe and easy way to get a hold of supernatural aspects of our world. We are a brand of choice for the highest quality and selection when it comes to your choice of supernatural creatures and equipment. Professional, passionate, purposeful it is our genuine intent to provide an unparalleled product. We funded this company on the belief that supernatural aspects of the world should be accessible and safe to all. We are committed to the perpetual improvement of our supply.</p>
			</div>
			<!--Include Product Sidebar-->
			<?php include 'src/server/include/productSidebar.php'; ?>
		</main>
		<!--Footer include-->
		<?php include 'src/server/include/footer.php'; ?>
	</body>
</html>
