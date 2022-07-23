<?php
	$server = "localhost";
    $username = "root";
    $password = "";
    $db = "movies";

    // create connection
    $conn = mysqli_connect($server, $username, $password, $db);

    // check connection
    if (!$conn)
    {
        die ("Coonection failed: ".mysqli_connect_error());
    }

?>