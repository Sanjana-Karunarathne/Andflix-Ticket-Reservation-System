<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style type="text/css">
        video 
        {
            position: absolute;
			right: 0;
			bottom: 0;
			z-index: -1;
            background-repeat: none;
        }
		@media (min-aspect-ratio: 16/9)
		{
			video{
			width: 100%;
			height: auto;
			}
		}
			@media (max-aspect-ratio: 16/9)
		{
			video{
			width: auto;
			height: 100%;
			}
		}

        table
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
		div
		{
			font-family: "Helvetica", sans-serif;
			font-size: 35px;
			text-align: bottom;
			color: white;
			padding: 20px 30px 0;
			font-weight: 100;
		}
        .box
		{
			font-family: "verdana", sans-serif;
			background-color:#FFFFFF;
			width: 450px;
			height: 215px;
			padding: 40px;
			position: center-left;
			margin: auto;
			color: black;
			font-size: 18px;
			font-weight: bold;
			opacity:0.6;
			filter: alpha(opacity=60);
		}
		.btn
		{
			color: black;
			cursor: pointer;
			font-weight: bold;
			border-radius: 8px;
			padding:8px;
		}
		.link
		{
			color: red;
			font-size: 12px;
		}
		p
		{
			font-size:45px;
		}
    </style>
</head>
<body>

	<video autoplay loop muted>
		<source src = "video1.mp4" type = "video/mp4">
	</video>
	
    <table align="right">
        <tr>
            <td><b><a href="pHome.php">| Home |</a></b></td>
            <td><b><a href="latestMovie.php">| Latest Movies |</a></b></td>
            <td><b><a href="Trailers.php">| Trailers |</a></b></td>
            <td><b><a href="signup.php">| SignUp |</a></b></td>
            <td><b><a href="booking.php">| Booking |</a></b></td>
            <td><b><a href="contact.php">| Contact Us |</a></b></td>
        </tr>
    </table>
	<img src="logo.jpg" width="90px" height="60px"/>
	<div>
	<p>Have fun with <b><i>&flix </i></b>!</p>
	<h2>Enjoy your favourite movie.</h2>
 	</div>
	
	<div class="box">
		<form action="validate.php" method="post" id="form">	
			<h5 align="center">Get Ready!</h5>
			<b>E-mail</b> </br> <input type="text" id="mail" name="mail" size="50" required autofocus> <br><br>
			<b>Password</b></br> <input type="password" id="pswrd" name="pswrd" size="50" required> <br><br>
			<input type="submit" value="Sign In" id="btn" class="btn"> &nbsp; &nbsp;
			<a href="help.php" class="link"> Need help? </a>
		</form>
	</div>
	
	
</body>
</html>