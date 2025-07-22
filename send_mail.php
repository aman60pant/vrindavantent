<?php
require_once('PHPMailer/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$message = $_POST['message'];

$mail->Host = "mail.arcconsultant.com";
$mail->Port = 25;
$mail->Username = "mail@arcconsultant.com";
$mail->Password = "Arc@india2020%&#";

$mail->SetFrom($email, $name);
$mail->Subject = "Query From Vrindaban Tent Company";
$body="
<b>***CONTACT US PAGE QUERY***</b> <br><br><br>
<b>NAME:</b> $name <br><br>
<b>MOBILE NO.:</b> $mobile <br><br>
<b>EMAIL ID:</b> $email <br><br>

<b>MESSAGE:</b> $message";
$mail->MsgHTML($body);
$Address = "info@vrindabantentcompany.com";
$mail->AddAddress($Address, 'Vrindaban Tent Company');

if($mail->Send()) {
  echo "<div id='navigation' style='width: 405px;  text-align:center; font-weight: 700; color: #009900; padding-top:9px; position:absolute; height:24px; margin-left:394px; margin-right:auto; margin-top:240px; '> THANK YOU! WE HAVE RECEIVED YOUR REQUEST <br><br><a href='index.html' style='background:red;padding:10px 20px;color:white;'>Close</a></div>";
} else {
  echo "Mailer Error: " . $mail->ErrorInfo;
}

?>
