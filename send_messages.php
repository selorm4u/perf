<?php
if(isset(($_POST['share'])))
{
	if(isset($_POST['name']) &&  isset($_POST['from']) && isset($_POST['message']))
	{
$email = $_POST["email"];
$to = "selorm4u@gmail.com";
$subject = "Tributes & Condolences by " . $_POST['name'];
$headers = "From: $email\n";
$message = $_POST['message'];

// Email Address: $email";
// $user = "$email";
// $usersubject = "Thank You";
// $userheaders = "From: you@youremailaddress.com\n";
// $usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
//mail($user,$usersubject,$usermessage,$userheaders);
	}
}
?>