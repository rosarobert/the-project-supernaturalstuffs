<?php
session_start();
if(isset($_SESSION['email'])) {
    $custE = $_SESSION['email'];
    $id = $_POST["pID"];

    $sql = "SELECT userID FROM User WHERE email = :email";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':email', $custE, PDO::PARAM_STR);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row) {}

    $userID = $row['userID'];

    $sql2 = "INSERT INTO Reviews(comment) VALUES ('" . $_POST['comment'] . '","
                         . $id . ","
                         . $userID . ")";
    $statement = $pdo->prepare($sql2);
    $insert->$statement->execute();



} else {
    $message = "You must be signed in to write a review";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='/individualProducts.php?pID='.$id.'</script>";
}

?>

//reviews table - userID, pID, comment