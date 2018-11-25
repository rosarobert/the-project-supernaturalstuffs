<!--add user-->
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
					<div id="Users">
						<form action="addUser.php" method="get">
							<h2>Add User</h2>
							<div class="catagories">
							<p>User\'s username:</p>
							<input type="text" name="username" placeholder="User id">
							<p>User\'s password:</p>
							<input type="text" name="password" placeholder="password">
							<p>User\'s first name:</p>
							<input type="text" name="firstname" placeholder="First name">				
							<p>User\'s last name:</p>
							<input type="text" name="lastname" placeholder="Last name">
							<p>User\'s email:</p>
							<input type="text" name="email" plaeholder="Email"S>
							
							</div>
						</form>
					</div>
				</div>;');
				
		?>
		
	</main>
	<!--Footer include-->
	<?php include '../../../src/seSrver/include/footer.php'; ?>


 </body>
