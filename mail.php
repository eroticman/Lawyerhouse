<?php
require('plugins/phpmailer/class.phpmailer.php');
$mail = new PHPMailer();

$mail->CharSet 		= "utf-8";
$mail->IsSMTP();
$mail->SMTPDebug 	= 0;
$mail->SMTPAuth 	= true;
$mail->Host 		= "mail.lawyerhouse.co.th"; // SMTP server
$mail->Port 		= 25; // พอร์ท
$mail->Username 	= "	support@lawyerhouse.co.th"; // account SMTP
$mail->Password 	= "p89OecOE4Q"; // รหัสผ่าน SMTP

$mail->SetFrom("support@lawyerhouse.co.th", "Support");
$mail->Subject =  'ติดต่อจากทางเว็บไซต์' . ' ' . 'คุณ' . $_POST['fname'];

$msg = 'ชื่อ : ' . $_POST['fname'] . ' ' . $_POST['lname'] . '<br />';
$msg .= 'อีเมล์ : ' . $_POST['email'] . '<br />';
$msg .= 'เบอร์โทรศัพท์ : ' . $_POST['tel'] . '<br />';
$msg .= 'ข้อความ : ' . $_POST['message'];

$mail->MsgHTML($msg);
$mail->AddAddress("lawyerhouse.th@gmail.com");

if(!$mail->Send()) {
    $message = 'error';
} else {
    $message = 'send';
}
?>