<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
	<script>
		function validationForm(){
			let a= document.forms["myform"]["fname"].value;
			let b= document.forms["myform"]["lname"].value;
			let c= document.forms["myform"]["mail"].value;
			let d= document.forms["myform"]["pswrd"].value;
			let e= document.forms["myform"]["cpassword"].value;
			
			var letters = /^[A-Za-z]+$/;
			if(!letters.test(a)){
				alert("Invalid Input for the First Name");
				document.myform.fname.focus();
				return false;
			}
			else if(!letters.test(b)){
				alert("Invalid Input for the Last Name");
				document.myform.lname.focus();
				return false;
			}
			
			if(d!=e){
				alert("passwords are not same");
				return false;
			}
				
			var q=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if (!q.test(c)){
				alert("Please provide a valid email address!");
				return false;	
			
			}
			}
	</script>
	<style type="text/css">
		body{
		background-repeat:no-repeat;
		background-image: url("webprojectimg.jpg");
		background-size: 100%;
		}
		
		.box{
			border:2px solid #FDAB9F;
			border-radius:9px;
			margin:auto;
			width:45%;
			font-family:cursive;
			}
			
		input[type=text], input[type=password]{
			width: 70%;
			padding: 7px 8px;
			margin: 4px 60px;
			border: 1px solid #FFF0D9;
			border-radius:4px;
			box-sizing: border-box;
			font-family:cursive;
			}
		
		button{
			background-color:#ff0000;
			font-family:cursive;
			opacity:1;
			}
			
		div{
			opacity:0.65;
			}
			
		h2{
			color:#FFFFFF
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
			width:40px;
			height: 60px;
		}
	 </style>
</head>

<body>
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
	
		<form action="addDetail.php" name="myform" method="post" onsubmit="return validationForm()">
		<div class="box" style="background-color:#000000; margin-top:45px; margin-bottom:40px;">
		<h2 align="center">SIGN UP</h2><br><br>
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "fname"><b>First Name</b></label><br>
			<input type = "text" placeholder="First Name" name="fname" required><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "lname"><b>Last Name</b></label><br>
			<input type = "text" placeholder="Last Name" name="lname" required><br><br>
			
			<label style="color:white;padding-left:8px; margin-left:30px;" for = "mail"><b>E-mail</b></label><br>
			<input type = "text" placeholder="xxx@gmail.com" name="mail" required><br><br>
			
			<label style="color:white;padding-left:8px;margin-left:30px;" for = "pswrd"><b>Password</b></label><br>
			<input type = "password" placeholder = "Password" name = "pswrd" required><br><br>
			
			<label style="color:white;padding-left:8px;margin-left:30px; margin-bottom:3px;" for = "cpassword"><b>Confirm Password</b></label><br>
			<input type = "password" placeholder = "Password" name = "cpassword" required><br><br>
			
			<button style="color:white;padding:5px 30px;border-radius:10px; margin-left: 375px;" type="submit">SignUp</button><br>
		</form>
	</body>
</html>