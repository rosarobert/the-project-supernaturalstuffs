<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
      include 'include/db_credentials.php';

      /** Get first name **/
      $custFN = null;
      if (isset($_POST['fName'])) {
          $custFN = $_POST['fName'];
      }
      /** Get last name **/
      $custLN = null;
      if (isset($_POST['lName'])) {
          $custLN = $_POST['lName'];
      }
      /** Get email **/
      $custE = null;
      if (isset($_POST['email'])) {
          $custE = $_POST['email'];
      }
      /** Get password **/
      $custPW = null;
      if (isset($_POST['password'])) {
          $custPW = $_POST['password'];
      }

      //check to see if all not null values are entered
      if ($custFN == null){
        $message = "Please enter a first name";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='/src/client/html/createAccount.html'</script>";
        die();
      }else if ($custLN == null){
        $message = "Please enter a last name";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='/src/client/html/createAccount.html'</script>";
        die();
      }else if ($custE == null){
        $message = "Please enter an email";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='/src/client/html/createAccount.html'</script>";
        die();
      }else if ($custPW == null){
        $message = "Please enter a password";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='/src/client/html/createAccount.html'</script>";
        die();
      }
      //connect to database
      try {
          $pdo = new PDO($dsn, $user, $pass, $options);
      } catch (\PDOException $e) {
          throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }

      //check if email already exists
      $sql = "SELECT email FROM User" ;
      $statement = $pdo->prepare($sql);
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      foreach ($rows as $row) {}
        if ($row['email'] == $custE){
          $message = "Error: Email Address Already in Use";
          echo "<script type='text/javascript'>alert('$message');
          window.location.href='/src/client/html/createAccount.html'</script>";
          die();
        }
      //insert user into user
      $sql2 = "INSERT INTO User VALUES (DEFAULT ,:username ,:password ,:firstname ,:lastname ,:email)";
      $custUN = "TEST";
      $statement = $pdo->prepare($sql2);
      $statement->bindValue(':username', $custUN, PDO::PARAM_STR);
      $statement->bindValue(':password', MD5($custPW), PDO::PARAM_STR);
      $statement->bindValue(':firstname', $custFN, PDO::PARAM_STR);
      $statement->bindValue(':lastname', $custLN, PDO::PARAM_STR);
      $statement->bindValue(':email', $custE, PDO::PARAM_STR);
      $insert = $statement->execute();

      //test features
      /*$sql3 = "SELECT email,password FROM User" ;
      $statement = $pdo->prepare($sql3);
      $statement->bindParam(':email',$custE, PDO::PARAM_STR);
      $statement->execute();
      $rows2 = $statement->fetchAll(PDO::FETCH_ASSOC);
      foreach ($rows2 as $row2) {
        echo $row2['email'] . " ";
        echo $row2['password'] . " ";
      }*/
      
      //do me want them to login in now or automatically be logged in
      echo "<script type='text/javascript'>alert('Customer ' . $custFN . ' ' . $custLN . ' was added');
      window.location.href='/src/html.login.html'</script>";
    ?>
  </body>
</html>