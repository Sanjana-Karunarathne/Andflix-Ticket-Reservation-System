<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	
	<script>
		function validationForm(){
			let a= document.forms["myform"]["cardno"].value;
			let b= document.forms["myform"]["cardname"].value;
			let c= document.forms["myform"]["cvvno"].value;
			
			if(a.length < 16 && a.length > 16){
				alert("Card Number must be in 16 digits");
				return false;
			
			var letters = /^[A-Za-z]+$/;
			if(!letters.test(b)){
				alert("Invalid Input for the Card on name");
				document.myform.fname.focus();
				return false;
				
			if(c.length < 3 && c.length > 3){
				alert("CVV Number must be in 3 digits");
				return false;	
			
			}
			}
	</script>
	
	<style type="text/css">
		body{
		background-size: 100% 110%; 
		background-repeat:no-repeat;
		}
		
		.box{
			border:2px solid #ffffff;
			border-radius:8px;
			margin:auto;
			width:35%;
			font-family:cursive;
			align:center;
			
			}
			
		input[type=text], input[type=password]{
			width: 85%;
			padding: 8px 8px;
			margin: 8px 52px;
			border: 1px solid #FFF0D9;
			border-radius:4px;
			box-sizing: border-box;
			font-family:cursive;
			}
			
		select{
			width: 85%;
			padding: 8px 8px;
			margin: 8px 52px;
			border: 1px solid #FFF0D9;
			border-radius:4px;
			box-sizing: border-box;
			font-family:cursive;
			}
		
		button{
			background-color:#ff0000;
			font-family:cursive;
			opacity:1;
			border:none;
			}
			
		div{
			opacity:0.7;
			}
			
		h2{
			color:#ffffff
			}
		.tbl1
        {
            margin:1.5%;
            border-spacing: 10px;
        }
        td 
        {
            background-color: none;
            font-size: 18px;
            padding: 5px 10px;
        }
        a
        {
	font-family: "Helvetica", sans-serif;
            text-decoration: none;
            color: white;
        }
		a:hover
        {
            color: red;
        }
	.logo
	{
		width:90px;
		height: 60px;
	}
       		
	</style>
</head>
	<body background="paypic.jpg">

	<table align="right" class="tbl1">
        <tr>
            <td><b><a href="pHome.php">| Home |</a></b></td>
            <td><b><a href="latestMovie.php">| Latest Movies |</a></b></td>
            <td><b><a href="Trailers.php">| Trailers |</a></b></td>
            <td><b><a href="signup.php">| SignUp |</a></b></td>
            <td><b><a href="booking.php">| Booking |</a></b></td>
            <td><b><a href="contact.php">| Contact Us |</a></b></td>
        </tr>
    </table> 
	<img src="logo.jpg" class="logo"/>

		<form name="myform" action="sentmail.php" method="post" onsubmit="return validationForm()">
		<div class="box" style="background-color:#1F456E; margin-top:100px;">
		<h2 align="center">MAKE PAYMENT</h2><br><br>
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "fname"><b>Card Number</b></label><br>
			<input type = "text" placeholder="Enter Card Number" name="cardno" required autofocus><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "Cardname"><b>Name on Card</b></label><br>
			<input type = "text" placeholder="Enter Name on Card" name="cardname" required><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "Cardtype"><b>Card Type</b></label><br>
			<select name="Cardtype" id = "Cardtype">
			<option value= "Debit Card">Debit Card </option>
			<option value= "Credit Card">Credit Card </option>
			</select><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "expiredate"><b>Card Expiry</b></label><br>
			<input type = "text" placeholder="MM/YY" name="expiredate" required><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "cvvno"><b>CVV Number</b></label><br>
			<input type = "text" placeholder="xxx" name="cvvno" required><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "email"><b>E-mail</b></label><br>
			<input type = "text" placeholder="xxx@gmail.com" name="mail" required><br><br>
			
			<button style="color:white;padding:5px 30px;border-radius:10px;margin:5% 72%;" type="Submit"> Make Payment</button>
			
		</form>
        </div>
	//<?php
		$total = $_POST['tot'];
	?>
</body>
</html>		