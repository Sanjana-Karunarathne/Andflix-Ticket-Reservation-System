<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Movies</title>
	<style type="text/css">
	
		body
		{
			background-color: black;
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
		img
		{
			height: 450px;
			width: 300px;
		}
		p
		{
			font-family: "Helvetica", sans-serif;
			color: red;
			font-size: 40px;
			font-weight: 15px bold;
			text-align: center;
		}
		div
		{
			background-color: white;
			padding: 1px;
		}
		.logo
		{
			width:90px;
			height: 60px;
		}
		.link
		{
			font-size: 30px;
		}
		.note
		{
			font-family: "Arial", sans-serif;
			color: white;
			font-size: 12px;
			
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
	<br><br><br> <br><br><br>
	
	<div>
		<p>Latest Movies</p>
	</div>
	
	<table align="center" style="border-spacing:45px;">
		<tr>
			<td><img src="m1.jpg"> </td>
			<td><img src="m2.jpg"> </td>
			<td><img src="m3.jpg"> </td>
		</tr>
		<tr>
			<td><p class="note">Starring: Tom Hardy, Michelle Williams, Riz Ahmed<br> <a href="discription.php" style="color:green;">See More</a></p></td>
			<td><p class="note">Starring: Fionn Whitehead, Damien Bonnard, Aneurin<br> <a href="discription.php" style="color:green;">See More</a></p></td>
			<td><p class="note">Starring: Ben Affleck,Bruce Wayne, Henry Cavill <br> <a href="discription.php" style="color:green;">See More</a></p> </td>
		</tr>
		<tr>
			<td><img src="m4.jpg"> </td>
			<td><img src="m5.jpg"> </td>
			<td><img src="m6.jpg"> </td>
		</tr>
		<tr>
			<td><p class="note">Starring: Keanu Reeves, Riccardo Scamarcio,Ian McShane<br> <a href="discription.php" style="color:green;">See More</a></p></td>
			<td><p class="note">Starring: Jason Momoa, Amber Heard,Willem Dafoe<br> <a href="discription.php" style="color:green;">See More</a></p></td>
			<td><p class="note">Starring: Chadwick Boseman, Michael B.Jordan <br> <a href="discription.php" style="color:green;">See More</a></p> </td>
		</tr>
		<tr>
			<td><img src="m7.jpg"> </td>
			<td><img src="m8.png"> </td>
			<td><img src="m9.jpg"> </td>
		</tr>
		<tr>
			<td><p class="note">Starring: Chris Hemsworth,Natalie Portman,Tom Hiddleston<br> <a href="discription.php" style="color:green;">See More</a></p></td>
			<td><p class="note">Starring: Hailee Steinfeld,Jorge Lendeborg,Pamela Adlon<br> <a href="discription.php" style="color:green;">See More</a></p></td>
			<td><p class="note">Starring: Hera Hilmar,Robert Sheehan,Hugo Weaving<br> <a href="discription.php" style="color:green;">See More</a></p> </td>
		</tr>
		<tr>
			<td><img src="m10.jpg"></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><p class="note">Starring: Kate Beckinsale,Theo James,Tobias Menzies<br> <a href="discription.php" style="color:green;">See More</a></p></td>
		</tr>
	</table>
	
	<div>
		<p>Upcoming Movies</p>
	</div>
	
	<table align="center" style="border-spacing:45px;">
		<tr>
			<td><img src="coming1.jpg"> </td>
			<td><img src="coming2.jpg"> </td>
			<td><img src="coming3.jpg"> </td>
		</tr>
		<tr>
			<td><list><ul>movie id: lm001 </ul> </list> </td>
			<td> </td>
			<td> </td>
		</tr>
		<tr>
			<td><img src="coming4.jpg"> </td>
			<td><img src="coming5.jpg"> </td>
			<td><img src="coming6.jpeg"> </td>
		</tr>
		<tr>
			<td><img src="coming7.jpg"> </td>
			<td><img src="coming8.jpg"> </td>
			<td><img src="coming9.jpg"> </td>
		</tr>
		<tr>
			<td><a href="pHome.php" class="link"> Back </a></td>
			<td></td>
			<td align="right"><a href="Trailers.php" class="link"> Next </a></td>
		</tr>
	</table>
</body>
</html>