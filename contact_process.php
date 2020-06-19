<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if(isset($_POST['btnContact']))
{
  //#1
  
  $message = $_POST['message'];
  $to_id = $_POST['email'];
  $to_name = $_POST['name'];
  $subject = $_POST['subject'];

  //#2
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = 'gawe0405@gmail.com';
  $mail->Password = 'xlqltybdjnynszws';
  $mail->FromName = "Demo Send Mail";
  $from =  $to_id; // Reply to this email
  $to="khanhln45@gmail.com"; // Recipients email ID
$name="Khanh"; // Recipient's name
$mail->From = $from;
$mail->FromName = $to_name; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);
$mail->AddReplyTo($from, $to_name);
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Test mail script from bloghoctap.com";
$mail->Body = $message; //HTML Body
$mail->AltBody = "Mail nay duoc goi bang phpmailer class. - bloghoctap.com"; //Text Body
//$mail->SMTPDebug = 2;
if(!$mail->Send())
{
	echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
}
else
{
	echo "<h1>Send mail thanh cong</h1>";
}
  //#3
//   $mail->addAddress($to_id);
//   $mail->Subject = $subject;
//   $mail->msgHTML($message);

//   //#4
//   if (!$mail->send()) {
//     $error = "Lỗi: " . $mail->ErrorInfo;
//     echo '<p>'.$error.'</p>';
//   }
//   else {
//     echo '<p>Đã gửi!</p>';
//   }
// }
// else{
//   echo '<p>Vui lòng nhập dữ liệu</p>';
// }
}
?>