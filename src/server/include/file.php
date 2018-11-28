<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use src\server\include\PHPMailer.php;
use src\server\include\Exception.php;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'supernaturalstore1234@gmail.com';                 // SMTP username
    $mail->Password = 'Supernatural1';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('supernaturalstore1234@gmail.com', 'The Supernatural Store');
    $mail->addAddress($emailOfUser);     // Add a recipient
    $mail->addReplyTo('supernaturalstore1234@gmail.com', 'The Supernatual Store');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
