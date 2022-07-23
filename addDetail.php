<?php
    
    include_once('connection.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];
    $password = $_POST['pswrd'];

    
    $sql = "INSERT INTO tbl_signIn (Email, Password,FirstName,LastName) VALUES ('$email', '$password','$fname','$lname')";

    if (mysqli_query($conn,$sql))
    {
        header("location: latestMovie.php");
    }
    else
    {
        echo "<script>alert ('Error: ')</script>".$sql."<br/>".mysqli_error($conn);
    }

    mysqli_close($conn);

?>