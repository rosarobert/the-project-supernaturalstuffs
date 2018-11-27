<!--add Order-->
<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <title></title>
	<link href='https://fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/header-footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../css/UserDetails.css">
		<!--<script src="script.js"></script>-->
  </head>

  <body>
	<!--Include header-->
	<?php include '../../../src/server/include/header.php'; ?>
	<main>
		<?php 
			include '../include/db_credentials.php'; 
			

			//connect to database
			try {
				$pdo = new PDO($dsn, $user, $pass, $options);
			} catch (\PDOException $e) {
				throw new \PDOException($e->getMessage(), (int)$e->getCode());
			}
			
			echo('<div id="box">
					<div id="Orders">
						<form action="add.php?filter=Order" method="post">
							<h2>Add Order</h2>
							<div class="catagories">
							<p>Order\'s Total Price:</p>
							<input type="text" name="totalPrice" placeholder="Username">
							<p>Order\'s tracking Number:</p>
							<input type="text" name="trackingNumber" placeholder="password">
							<p>User\'s ID for Order:</p>
							<input type="text" name="userID" placeholder="First name">				
							<p>Order\'s Store ID:</p>
							<input type="text" name="storeID" placeholder="Last name">
							<input type="submit">
							</div>
						</form>
					</div>
				</div>;');
				
		?>
		
	</main>
	<!--Footer include-->
	<?php include '../../../src/server/include/footer.php'; ?>


 </body>
 </html>