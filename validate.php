<?php
            include('connection.php');
            
            $sql = "SELECT * FROM tbl_signIn WHERE Email='$_POST[mail]' AND password='$_POST[pswrd]'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)==1)
            {
                echo "<script> window.location.href = 'latestMovie.php'; </script>";
            }
            else
            {
                echo "<script>alert ('Invalid Email or Password'); window.location.replace('pHome.php');</script>";
            }
            
?>