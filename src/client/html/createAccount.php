<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>
    <link href='https://fonts.googleapis.com/css?family=Almendra Display' rel='stylesheet'>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/header-footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
		<script type="text/javascript" src="../script/createAccount.js"></script>
  </head>

  <body>
	<!--Include header-->
  <?php
    session_start();

    if (isset($_SESSION['email'])){
      $message = "Already Logged In";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href='/index.php'</script>";
      die();
     }
  ?>
  <header>
      <h1 id="title" ><a href="/index.php"><img src="/src/client/images/logo.png">Super(natural) Store</a></h1>
      <div id="search-cart">
        <input type="text" class="searchHome" placeholder="Search...">
        <img src="/src/client/images/search.png" alt="search" id="search">
        <a href="/src/client/html/cart.html"><img src="/src/client/images/cart.png" alt="shopping cart" id="cart"></a>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="/src/server/PHP/contact-FAQ.php">Contact</a></li>
          <li><a href="/src/server/PHP/accountDetails.php">Account</a></li>
        </ul>
        <ul id="login-signup">
          <li><a href="/src/server/PHP/login.php" class="login-signup">Login</a></li>
          <li><a href="/src/server/PHP/createAccount.php" class="login-signup">Signup</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <!-- page content -->
      <!--createAccount Form-->
      <form name="createAccount" id="create" method="post" action="/src/server/PHP/createAccount.php" onsubmit="return preventDefault()">
        <fieldset>
          <legend>Create Account</legend>
          <div>
            <label>First Name:</label>
            <input type="text" name="fName" class="box"/>
          </div>
          <div>
            <label>Last Name:</label>
            <input type="text" name="lName" class="box"/>
          </div>
          <div>
            <label>Email:</label>
            <input type="text" name="email" class="box"/>
          </div>
          <div>
            <label>Confirm Email:</label>
            <input type="text" name="cEmail" class="box"/>
          </div>
          <div>
            <label>Password:</label>
            <input type="password" name="password" class="box"/>
          </div>
          <p class="notes">Password must be 6 characters long and contain a number</p>
          <div>
            <label>Confirm Password:</label>
            <input type="password" name="cPassword" class="box"/>
          </div>
          <div class="centered">
            <input type="submit" value="Create Account" class="button"/>
          </div>
          <div class="centered">
            <input type="button" onclick="location.href='login.html'" value="Already Have an Acount" class="button"/>
          </div>

        </fieldset>
      </form>
    </main>

    <footer>
    	<div id="topF">
    		<div id="detailFooter">
    			<a href="/src/server/PHP/contact-FAQ.php"><p>Find a store</p></a>
    			<a href="#"><p>Sign up for emails</p></a>
    			<a href="/src/server/PHP/contact-FAQ.php"><p>Contact</p></a>
    		</div>
    		<div class="socials">
    			<a href="https://www.facebook.com"><img src="/src/client/images/Facebook.png" alt="Facebook link"></a>
    			<a href="https://www.youtube.com"><img src="/src/client/images/YouTube.png" alt="Youtube link"></a>
    			<a href="https://www.instagram.com"><img src="/src/client/images/Instagram.png" alt="Instagram link"></a>
    			<a href="https://www.twitter.com"><img src="/src/client/images/Twitter.png" alt="Twitter link"></a>
    		</div>
    		</div>
    		<div id="bottom">
    			<p> &copy; 2017-2018, Super(natural) Store, inc. All Rights Reserved</p>
    			<p>Terms of Use</p>
    			<p>Privacy Policy</p>
    		</div>
    </footer>

  </body>

  <foot>
  </foot>
</html>
