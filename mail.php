<?PHP
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$captcha = $_POST["captcha"];
$select = $_POST["selectText"];

$phone2 = sprintf("%s %s %s",
              substr($phone, 0, 4),
              substr($phone, 4, 3),
              substr($phone, 7));

$message ="<b>Name:</b> $name <br/>";
$message .="<b>Phone:</b> $phone2 <br/>";
$message .="<b>Email:</b> $email <br/>";
$message .= "<b>Interested in:</b> $select <br/>";
$message .= "<b>Message:</b> $msg <br/>";
$to = "info@spottersau.com.au";
$subject = "Spotters Australia - Contact";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $email\n";
$headers .= "Name: $name\n";

if($captcha == ''){
mail($to,$subject,$message,$headers);
return true;
}
else
	return false;

?>