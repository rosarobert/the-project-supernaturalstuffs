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
	<?php include '../../../src/server/include/header.php'; ?>
    <!--Main content of page-->
    <main>
      <div id="flex-conatiner">
		<div id="flexItem">
			<div id="accountDetails">
			  <h2>Account Details</h2>

			  <div id="orderHistory">
				<h3>Order History</h3>
				<div id="pastOrder">

          <?php

            include '../include/db_credentials.php';

            $custE = null;
            if (isset($_SESSION['email'])){
               $custE = $_SESSION['email'];
             }else{
               header('Location: login.php');
             }

             if (isset($_SESSION['productList'])) {
               $cart = $_SESSION['productList'];
             } else {
               $cart = null;
             }

             try {
                 $pdo = new PDO($dsn, $user, $pass, $options);
             } catch (\PDOException $e) {
                 throw new \PDOException($e->getMessage(), (int)$e->getCode());
             }

            //get userID from session
            $sql = "SELECT userID FROM User WHERE email = :email";
            $statement = $pdo->prepare($sql);
            $statement->bindParam(':email', $custE, PDO::PARAM_STR);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {}

            $userID = $row['userID'];

            //get all orders from $userID
            $sql = "SELECT orderID, totalPrice, trackingNumber FROM Orders WHERE userID = :userID ORDER BY orderID DESC";
            $statement = $pdo->prepare($sql);
            $statement->bindParam(':userID', $userID, PDO::PARAM_STR);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            //find number of rows
            $numRows = 0;
            foreach ($rows as $row) {
              $numRows = $numRows + 1;
            }
            if($numRows > 0){
              echo("<table>");
              echo("<tr><th>Order ID</th><th>Total Price</th><th>Tracking Number</th></tr>");
              foreach ($rows as $row) {
                echo("<tr><td>".$row['orderID']."</td><td>$".$row['totalPrice']."</td><td>".$row['trackingNumber']."</td></tr>");
                //add products here
              }
              echo("</table>");
            }else{
              echo("<p>You have never placed an order before!</p>");
            }
          ?>
				</div>
			  </div>

			  <div id="paymentInfo">
				<h3>Payment Info</h3>
  				<form class="Main" name="savePayment" method="post" action="savePayment.php" id="savePayment" onsubmit="return checkPayment()">
  				  <fieldset>
    					<div id="payment">
    					  <div>
      						<label>Payment Method:</label>
      						<select name="payMethod" id="payMethod">
      						  <option value="Visa">Visa</option>
      						  <option value="Mastercard">Mastercard</option>
      						  <option value="American Express">American Express</option>
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
      						<input type="submit" name="submit" value="Save Card" class="button"/>
    					  </div>
    					</div>
  				  </fieldset>
  				</form>
			  </div>

			  <div id="changePassBlock">
				<h3>Change Password</h3>
				<form name="changePassword" class="Main" id="changePass" method="post" action="changePass.php" onsubmit="return checkPass()">
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

			  <p id="signout"><a href="logout.php">Sign Out</a></p>

			</div>
		<div>

		<div id="flexItem2">
			<div id = "shoppingcart">
			  <h2>Shopping Cart</h2>

        <?php

        if (isset($_SESSION['productList'])){
          foreach ($cart as $pID => $cartitem){
            $pID =$cartitem['pID'];
            $sql = "SELECT image FROM Product where pID = $pID";
            $statement = $pdo->prepare($sql);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {}

            $image = $row['image'];
            $type = "png";

            echo "<div class='items'>";
              echo	'<a href="individualProducts.php?pID='.$cartitem['pID'].'"><img class="image" src = "data:image/'.$type.';base64, '.base64_encode($image).'"/></a>';
              echo "<div class='productinfo'>";
                echo "<p>Product name: ".$cartitem['pName']."</p>";
                echo "<p>Price: ".str_replace("USD","$",money_format('%i',$cartitem['price']))."</p>";
                echo "<p>Quantity: ".$cartitem['quantity']."</p>";
                echo "<form  name='updateForm' method='get' action='updateQuantityCheckout.php' id='quantityForm'>";
                  echo "<input type='number' name='quantity' id='quantityInput'/>";
                  echo "<input class ='button' type='submit' name='update' value='Update' id='update'/>";
                  echo "<a href='?pID=".$cartitem['pID']."'><input class ='button' type='button' name='delete' value='Delete'/></a>";
                  echo "<input type='hidden' value='".$cartitem['pID']."' name='pID'/>";
                echo "</form>";
              echo "</div>";
            echo "</div>";
          }
        }

         ?>
			</div>
		 </div>
    </div>

      <?php

      if(isset($_GET['pID'])){
        removeItem($cart);
      }

      function removeItem($cart){
        unset($cart[$_GET['pID']]);
        $_SESSION['productList'] = $cart;
        unset($_GET['pID']);
        echo "<script type='text/javascript'>window.location.href='accountDetails.php'</script>";
      }
      ?>
    </main>

    <?php include '../../../src/server/include/footer.php' ?>
  </body>

  <foot>
  </foot>
</html>
