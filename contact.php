<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     
	 <style type="text/css">
		
		.tbl1
        {
            margin:1.5%;
            border-spacing: 10px;
        }
        td 
        {
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
	*{
	  margin: 0;
	  padding: 0;
	  box-sizing: border-box;
	  font-family: "Poppins" , sans-serif;
	}
	.banner{
		width:100%;
		height:50%;
		position:center;	
	}
	}
	.content{
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	}
	.content .left-side{
	  width: 25%;
	  height: 100%;
	  display: flex;
	  flex-direction: column;
	  align-items: center;
	  justify-content: center;
	  margin-top: 15px;
	  position: relative;
	}
	.content .left-side::before{
	  content: '';
	  position: absolute;
	  height: 70%;
	  width: 2px;
	  right: -15px;
	  top: 50%;
	  transform: translateY(-50%);
	  background: #afafb6;
	}
	.content .left-side .details{
	  margin: 14px;
	  text-align: center;
	}
	.content .left-side .details i{
	  font-size: 30px;
	  color: #3e2093;
	  margin-bottom: 10px;
	}
	.content .left-side .details .topic{
	  font-size: 18px;
	  font-weight: 500;
	  color: white;
	}
	.content .left-side .details .text-one,
	.content .left-side .details .text-two{
	  font-size: 14px;
	  color: #afafb6;
	}
	.content .right-side{
	  width: 75%;
	  margin-left: 75px;
	}
	.content .right-side .topic-text{
	  font-size: 30px;
	  font-weight: 600;
	  color: white;
	}
	.right-side .input-box{
	  height: 50px;
	  width: 100%;
	  margin: 12px 0;
	}
	.right-side .input-box input,
	.right-side .input-box textarea{
	  height: 100%;
	  width: 100%;
	  border: none;
	  outline: none;
	  font-size: 16px;
	  background: #F0F1F8;
	  border-radius: 6px;
	  padding: 0 15px;
	  resize: none;
	}
	.right-side .button{
	  display: inline-block;
	  margin-top: 12px;
	}
	.right-side .button input[type="submit"]{
	  color: #fff;
	  font-size: 18px;
	  padding: 8px 16px;
	  border-radius: 6px;
	  background: #3e2093;
	  cursor: pointer;
	  outline:none;
	  border: none;
	}
	.button input[type="submit"]:hover{
	  background: #5029bc;
	}
	
	video 
        {
            position: fixed;
			right: 0;
			bottom: 0;
			z-index: -1;
       
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
   </head>
   
<body>
	<video autoplay loop muted>
		<source src = "video2.mp4" type = "video/mp4">
	</video>
	<table align="right" class="tbl1">
        <tr>
            <td><b><a href="pHome.php">| Home |</a></b></td>
            <td><b><a href="latestMovie.php">| Latest Movies |</a></b></td>
            <td><b><a href="Trailers.php">| Trailers |</a></b></td>
            <td><b><a href="signup.php">| SignUp |</a></b></td>
            <td><b><a href="booking.php">| Booking |</a></b></td>
            <td><b><a href="contact.php">| Contact Us |</a></b></td>
        </tr>
    </table> <br>
	&nbsp; <img src="logo.jpg" class="logo"/><br><br><br>
	
	<div class="banner">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Main branch</div>
          <div class="text-two">No/12,Wellawatta Rd,Colombo 05.</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">011 8748745</div>
          <div class="text-two">011 3309877</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">Andflix@gmail.com</div>
        </div>
      </div>
	  
      <div class="right-side"><br><br>
        <div class="topic-text">Contact Us</div> <br>
        
      <form action="sendMail.php" method="post">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" required name="mail">
		</div>
		<div class="input-box">
          <input type="text" placeholder="Enter message" required="required" name="msg">
		</div>
        <div class="button">
          <input type="submit" value="Send" id="submit" name="submit"> &nbsp; &nbsp;
		  <a href="comment.php" style="color:cyan; font-size:13px;"> Add Comment </a>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
