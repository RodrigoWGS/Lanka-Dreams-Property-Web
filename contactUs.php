<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>contactUs</title>
<link rel="stylesheet" type="text/css" href="styleSheets/mainStyle.css">
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
			
	}
	
	.container{
		width: 100%;
		height: 100vh;
		/*background: url("LDHR_Images/overviewimg.jpg");*/
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
	form{
		background: #fff;
		display: flex;
		flex-direction: column;
		padding: 2vw 4vw;
		width: 90%;
		max-width: 600px; 
		border-radius: 10px; 
	}
	
	form h3{
		color: #555;
		font-weight: 800;
		margin-bottom: 20px;
	}
	
	form input, form textarea{
		border: 0;
		margin: 10px 0;
		padding: 20px;
		outline: none;
		background: #f5f5f5;
		font-size: 16px; 
		
	}
	
	form button{
		padding: 15px;
		background: linear-gradient(to right, #00093c, #2d0b00);
		color: #fff;
		font-size: 18px;
		border: 0;
		outline: none;
		cursor: pointer;
		width: 150px;
		margin: 20px auto 0;
		border-radius: 30px; 
		
	}
</style>
</head>
<body>
	
<!---------------------------------------------header section--------------------------------------------->
	
<header>
		<a href="homePage.html" class="logo">LANKA DREAMS PROPERTY WEB</a>
		
		<input type="checkbox" id="menu-bar">
		<label for="menu-bar">Menu</label>
		
		<nav class="navbar">
			<ul>
			<li><a href="homePage.html">Home</a></li>
				
			<li><a href="overview.php">Overview</a></li>
				
			<li><a href="availability.html">Availability</a></li>
				
				
			    <li><a href="#">Gallery</a>
				<ul>
					<li><a href="firstBuild_gallery.html">First Build</a></li>
					<li><a href="secondBuild_gallery.html">Second Build</a></li>
					<li><a href="#">Third Build</a>
						<ul>
							<li><a href="thirdBuild_galleryGF.html">Ground Floor</a></li>
							<li><a href="thirdBuild_galleryF1.html">First Floor</a></li>
							<li><a href="thirdBuild_galleryF2.html">Second Floor</a></li>
						</ul>
					</li>
				</ul>
				</li>
				
				<li><a href="#">Map</a>
				<ul>
					<li><a href="firstBuild_location.html">First Build</a></li>
					<li><a href="secondBuild_location.html">Second Build</a></li>
					<li><a href="thirdBuild_location.html">Third Build</a></li>
				</ul>
				</li>
				
			<li><a href="#aboutus">About Us</a></li>
				
			<li><a href="contactUs.php">Contact Us</a></li>
				
			<li><a href="reservation.php">Book</a></li>
			
			</ul>
		</nav>
	</header>
	
	<!--contact us section-->
	
	<div class="container">
		<form action="contactUs.php" method="post">
			<h3>CONTACT US</h3>
			<input type="text" name="txtname" id="txtname" placeholder="Your Name" required>
			<input type="email" name="txtemail" id="txtemail" placeholder="Email Id" required>
			<input type="text" name="txtphone" id="txtphone" placeholder="Phone Number" required>
			<textarea name="txtmessage" id="txtmessage" rows="4" placeholder="how can we help you"></textarea>
			<button type="submit" name="btnSubmit" id="btnSubmit" onclick="myFunction()">Send</button>
			
		
		</form>
	</div>
	
<script>
function myFunction() {
  alert("Your message successfully send. Have a nice day!");
}
</script>
	
<?php

if(isset($_POST["btnSubmit"]))
{
	$fullName=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$contact=$_POST["txtphone"];
	$message=$_POST["txtmessage"];
	
	
	//database connection 
	$con=mysqli_connect("localhost","root","","lankadreamsdb");
		
	//error handeling 
	if(!$con)
		{
			die("Cannot connect to the database properly");
		}
	//sql quary
	$sql="INSERT INTO `tblcontactus` (`fullname`, `email`, `contactNumber`, `message`) VALUES ('".$fullName."', '".$email."', '".$contact."', '".$message."');"; 
	
	//to execute the quary
 	mysqli_query($con,$sql);
	
	/*header('location:login.php');*/
}
	
	
?>
	
<!---------------------------------------------footer section--------------------------------------------->
	
<footer>
	<div class="row">
		
		<div class="col">
			<img src="LDHR_Images/LDHR_logo/Main Logo s02.jpg"  alt="Italian Trulli"  class="logo">
			<p><center>Long Term And Short Term Holiday Home Rental</center></p>
		</div>
		
		<div class="col">
			<h3>OFFICE</h3>
			<p>No:143,</p>
			<p>Palangathure East,</p>
			<p>Kochchikade.</p>
			<p>(NEGOMBO)</p>
			<p class="email">sanjayarodrigo80@gmail.com</p>
			<h4>0760392037</h4>
		</div>
		
		<div class="col">
			<h3>EXPLORE</h3>
			<ul>
				<li><a href="homePage.html">Home</a></li>
				<li><a href="contactUs.php">Contact Us</a></li>
				<li><a href="reservation.php">Book</a></li>
			</ul>
				
		</div>
		
		<div class="col">
			<div class="socialIcons">
				<h3 class="des">Follow Us On Social Media</h3>
				<ul class="sMedia">
					<li><a href="https://www.facebook.com/Lanka-Dreams-Holiday-Resorts-113372974127210/"><img src="LDHR_Images/LDHR_socialMedia/facebookIcon.png" alt="facebook Account "></a></li>
					<li><a href="#"><img src="LDHR_Images/LDHR_socialMedia/InstergramIcon.png" alt="instergram Account"></a></li>
					<li><a href="#"><img src="LDHR_Images/LDHR_socialMedia/WhatsappIcon.png" alt="Whatsapp Account"></a></li>
					<li><a href="#"><img src="LDHR_Images/LDHR_socialMedia/youtubeIcon.png" alt="Youtube Channel"></a></li>
				</ul>
				
			</div>
		</div>
	</div>
	<hr>
	<p class="copyRight">copyright © 2022 Lanka Dreams Holiday Resorts ® <br> Developed By Rodrigo W.G.S. IT21707940</p>
</footer>
	
</body>
</html>
