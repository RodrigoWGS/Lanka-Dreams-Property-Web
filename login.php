<?php session_start(); ?>
<?php	
	if(isset($_POST["btnsubmit"]))
	{
		$username=$_POST["txtuname"];
		$password=$_POST["txtpassword"];
		$value=false;
		
		//database connection 
		$con=mysqli_connect("localhost","root","","lankadreamsdb");
		
		//error handeling 
		if(!$con)
		{
			die("Cannot connect to the database properly");
		}
		
		//sql quary
		$sql="SELECT * FROM `tbluser` WHERE `email`='".$username."' and `password`='".$password."'; "; 
		
		//to execute the quary
		$result=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			$value=true;
		}
		else
		{
			$value=false; 	
		}
		
		if($value)
		{
			$_SESSION["txtuname"]=$username;
			header('Location: overview.php');
		}
		else
		{
			echo"Please enter the correct userName and the password";
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styleSheets/mainStyle.css">
<title>Login page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	*{
	margin: 0;
	padding: 0;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	box-sizing: border-box;
}
	
body{
	width: 100%;
	height: 100vh;
	background-image: url("LDHR_Images/loginimage/Logincover.png");
	background-size: cover;
	background-position: center;
}
.active {
  background-color: #FFFDD5;
}
 
input[type=text], input[type=password] ,input[type=file]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.text
{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #FFFDD5 ;
    box-sizing: border-box
}
/* All buttons */
button {
    background-color:#1e3d59;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #1e3d59;
}

img.avatar {
   
    border-radius: 100%;
}

.container {
    padding: 20px;
	font-family: Arial, Helvetica, sans-serif;
}

span.psw {
    float: left;
    padding-top: 16px;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
	
table[align="center"] {
    margin: 0 auto;
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
	
<!---------------------------------------------registration form section--------------------------------------------->
<br><br><br>		
<form name="login" method="post" action="login.php">
	
<table width="835" height="377" border="0" align="center">
	
  <tr>
    <td height="299" colspan="2"><table width="324" height="268" border="0" align="center">
      <tr>
        <td width="294"><p class="imgcontainer"><img src="LDHR_Images/loginimage/loginn.png" alt="Avatar" width="150%" height="234" class="avatar" /></p>
			
      <div class="container">
		  
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Email" name="txtuname" id="txtuname" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" id="txtpassword" required>
		  
		<p>

		  
		</p>
    
      <button type="submit" name="btnsubmit" id="btnsubmit">Login</button>
		   
      <label>
        <input type="checkbox" checked="checked" name="chkremember"> Remember me
      </label>
    </div>

	<span class="psw">&nbsp; &nbsp; New Users <a href="registration.php">Register Now</a></span>
    <div class="container" style="background-color:#FFFDD5"><br>
    </div>
		  
		</td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
<br><br><br><br>
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