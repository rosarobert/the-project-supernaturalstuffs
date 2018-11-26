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
		<!--<script src="script.js"></script>-->
  </head>

  <body>
	<!--Include header-->
	<?php include '../../../src/server/include/header.php'; ?>
	<main>
		<div id="box">
			<div id="Users">
				<form action="usersInformation.php" method="get">
					<h2>Users</h2>
					<div class="catagories">
						<input name="filter" type="text" class="search" placeholder="Search...">
						<a href="userForm.php" method="get"><p>Add Users</p></a>
						<a href="customerList.php"><p>Customer List</p></a>
					</div>
				</form>
			</div>
			<div id="Products">
				<form action="productsInformation.php" method="get">
					<h2>Products</h2>
					<div class="catagories">
						<input name="filter" type="text" class="search" placeholder="Search...">
						<a href="productForm.php"><p>Add Products</p></a>
					</div>
				</form>
			</div>
			<div id="Orders">
				<form action="ordersInformation.php" method="get">
					<h2>Orders</h2>
					<div class="catagories">
						<input name="filter" type="text" class="search" placeholder="Search...">
						<a href="orderList.php"><p>Order History</p></a>
						<a href="orderForm.php"><p>Add Orders</p></a>
					</div>
				</form>
			</div>
		</div>
	</main>
	<!--Footer include-->
	<?php include '../../../src/server/include/footer.php'; ?>


 </body>

</html>
