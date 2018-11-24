<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
	<link href='https://fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/header-footer.css" />
    <link rel="stylesheet" href="../css/individualProducts.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
		<!--<script src="script.js"></script>-->
  </head>

  <body>
	<!--Include header-->
	<?php include '../../../src/server/include/header.php'; ?>
    <main>
          <div id ="container">
            <div id ="productbox">
              <img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
			  <img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
			  <img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
			  <img class="image" src="../images/ghostbusters-logo.png" alt="product image"/>
            </div>
            <div id="reviews">
              <h1>Reviews</h1>
                <img id="star" src="../images/star.png" alt="rating image"/>
                <img id="star" src="../images/star.png" alt="rating image"/>
                <img id="star" src="../images/star.png" alt="rating image"/>
                <img id="star" src="../images/star.png" alt="rating image"/>          
            </div>
            <div id="comments">
              <h1>Comments:</h1>
              <p>User1: comment1</p>
              <p>User2: comment2</p>
              <p>User3: comment3</p>
            </div>
          </div>

          <div id ="box">
            <div class="productinfo">
            <p>Category</p>
            <p>Product name</p>
            <p>Desciption</p>
            <p>Price</p>
            <p>Quantity</p>
            <input class ="button" type="button" name="wish" value="Add to Wishlist" onclick="location.href='products.html'"/>
            <input class ="button" type="button" name="add" value="Add to Cart" onclick="location.href='products.html'"/>
            </div>

          </div>

    </main>
	<!--Footer include-->
	<?php include '../../../src/server/include/footer.php'; ?>
  </body>

  <foot>
  </foot>
</html>
