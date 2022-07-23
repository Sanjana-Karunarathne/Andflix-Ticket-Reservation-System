<?php
	
	include 'connection.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (Name, Comment)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="com_styles.css">
	<title>Comment Section</title>
</head>
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
</style>
<body>
	<video autoplay loop muted>
		<source src = "video.mp4" type = "video/mp4">
	</video>
	
	<div class="wrapper">
		<form action="" method="post" class="form">
		<h2 align="center"> Share Your Experience</h2>
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
			
			<a href="contact.php" align="left"> Back </a>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM comments";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['Name']; ?></h3>
		<p><?php echo $row['Comment']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>