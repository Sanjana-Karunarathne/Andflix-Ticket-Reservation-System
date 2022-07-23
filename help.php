<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
</head>
<body bgcolor="black">
	<?php include_once('connection.php');
		
		if(isset($_POST['btn']))
		{
			$Email = $_POST['mail'];
			$Password = $_POST['pswrd'];
			
			$query = mysqli_query($conn, "SELECT Email,Password FROM tbl_signIn WHERE Email='$Email'");
			$num = mysqli_fetch_array($query);
			if($num>0)
			{
				$con = mysqli_query($conn, "UPDATE tbl_signIn SET Password = '$Password' WHERE Email = '$Email'");
				echo "<script> alert('Password changed successfully'); </script>";
			}
			else
			{
				echo "<script> alert('E-mail does not match'); </script>";
			}
			
		}
	?>
	
	<div style="background-color:green; padding:10px; color:white; font-size:35px; text-align:center; font-family:helvetica;"><u> <p>Change your password<p></u></div>
	<br>
	<div style="font-family:helvetica; background-color:white; width:325px; height:325px; border-radius:9px; position:center-left; margin:auto; padding:15px;">
		<form action="help.php" method="post" name="helpform" align="center">
				<b>E-mail</b> </br> <input type="text" id="mail" name="mail" size="30" required> <br><br>
				<b>New password</b></br> <input type="password" id="pswrd" name="pswrd" size="30" required> <br><br><br>
				<input type="submit" value="Change Password" id="btn" name="btn" style="border-radius:5px; cursor:pointer;"><br><br>
		</form><br><br><br><br><br>
		<a href="pHome.php" style="text-align:left; font-size:15px; color:red;">Back to Home Page</a>
	</div>
</body>
</html>