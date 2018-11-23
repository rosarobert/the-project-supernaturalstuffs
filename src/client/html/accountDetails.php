<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Account Details</title>
	<link href='https://fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/header-footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/accountDetails.css" />
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <script type="text/javascript" src="../script/savePayment.js"></script>
    <script type="text/javascript" src="../script/changePass.js"></script>
		<!--<script src="script.js"></script>-->
  </head>

  <body>
	<!--Include header-->
	<?php include '../include/header.php'; ?>
    <!--Main content of page-->
    <main>
      <div id="flex-conatiner">
		<div id="flexItem">
			<div id="accountDetails">
			  <h2>Account Details</h2>

			  <div id="orderHistory">
				<h3>Order History</h3>
				<div id="pastOrder">
				  <p>You have never placed an order before!</p>
				</div>
			  </div>

			  <div id="paymentInfo">
				<h3>Payment Info</h3>
				<form name="savePayment" method="post" action="http://www.randyconnolly.com/tests/process.php" id="savePayment" onsubmit="return checkPayment()">
				  <fieldset>
					<div id="payment">
					  <div>
						<label>Payment Method:</label>
						<select id="payMethod">
						  <option>Visa</option>
						  <option>Mastercard</option>
						  <option>American Express</option>
						</select>
					  </div>
					  <div>
						<label>Name On Card:</label>
						<input type="text" name="cardName" class="box"/>
					  </div>
					  <div>
						<label>Card Number:</label>
						<input type="text" name="cardNumber" class="box"/>
					  </div>
					  <div>
						<label>Expiration Date:</label>
						<input type="month" name="exDate" class="box"/>
					  </div>
					  <div>
						<label>Security Code:</label>
						<input type="text" name="secCode" class="box"/>
					  </div>
					  <p class="notes">Format: XXX</p>
					  <div class="centered">
						<input type="submit" value="Confirm Checkout" class="button"/>
					  </div>
					</div>
				  </fieldset>
				</form>
			  </div>

			  <div id="orderHistory">
				<h3>Change Password</h3>
				<form name="changePassword" id="changePass" method="post" action="http://www.randyconnolly.com/tests/process.php" onsubmit="return checkPass()">
				  <fieldset>
					<div>
					  <label>Current Password:</label>
					  <input type="password" name="curPassword" class="box"/>
					</div>
					<div>
					  <label>New Password:</label>
					  <input type="password" name="newPassword" class="box"/>
					</div>
					<p class="notes">Password must be 6 characters long and contain a number</p>
					<div>
					  <label>Confirm Password:</label>
					  <input type="password" name="cPassword" class="box"/>
					</div>
					<div class="centered">
					  <input type="submit" value="Change Password" class="button"/>
					</div>
				  </fieldset>
				</form>
			  </div>

			  <p id="signout"><a href="login.html">Sign Out</a></p>

			</div>
		<div>

		<div id="flexItem2">
			<div id = "shoppingcart">
			  <h2>Wish List</h2>

			  <div class="items">
				<img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
				<div class="productinfo">
				  <p>Product name:</p>
				  <p>Desciption:</p>
				  <p>Price:</p>
				  <p>Quantity:</p>
				  <input class ="button" type="button" name="delete" value="Delete" />
				</div>
			  </div>

			  <div class="items">
				<img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
				<div class="productinfo">
				  <p>Product name:</p>
				  <p>Desciption:</p>
				  <p>Price:</p>
				  <p>Quantity:</p>
				  <input class ="button" type="button" name="delete" value="Delete" />
				</div>
			  </div>

			  <div class="items">
				<img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
				<div class="productinfo">
				  <p>Product name:</p>
				  <p>Desciption:</p>
				  <p>Price:</p>
				  <p>Quantity:</p>
				  <input class ="button" type="button" name="delete" value="Delete" />
				</div>
			  </div>
			</div>
		</div>
      </div>
    </main>
	<?php include '../include/footer.php' ?>
  </body>

  <foot>
  </foot>
</html>
