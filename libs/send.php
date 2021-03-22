<?php
//Envoyer un mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/includes/Exception.php';
require_once __DIR__ . '/includes/PHPMailer.php';
require_once __DIR__ . '/includes/SMTP.php';

$mail = new PHPMailer(true);

try {
  $email = $_POST['email'];
  $message = $_POST['message'];
  $nom = $_POST['nom'];
  $subject = $_POST['subject'];
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  $mail->Username = 'estorymap4@gmail.com';
  $mail->Password = 'qatxnvtikgnvoybe';

  $mail->setFrom($email, $nom);
  $mail->addAddress('estorymap4@gmail.com', 'The E-story-map');
  $mail->addReplyTo($email, $nom); // to set the reply to

  $mail->IsHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;
  $mail->AltBody = $message;
  $mail->send();
  header("Location:../pages/mail.php?stat=sent");
} catch (Exception $e) {
    echo "Error in sending email.";
    header("Location:../pages/mail.php?stat=error");
}
?>
