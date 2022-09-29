<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styleSheets/mainStyle.css">
<title>Register Page</title>
<style>
	*{
	margin: 0;
	padding: 0;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	box-sizing: border-box;
}


h2{
	text-align:center;
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
	font-weight: 600;
	font-size: 60px;
	padding: 10px;
	color: #f37778;
	
}
.heading{
	text-align: center;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
	font-style:italic;
	font-size: 30px;
	color: #ecc19c;
	background-color:#1e3d59;
	padding: 20px;
	
}
body{
	width: 100%;
	height: 100vh;
	background-image:  url("LDHR_Images/loginimage/Logincover.png");
	background-size: cover;
	background-position: center;
}

.datalist
{
	width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
.button {
  display: inline-block;
  border-radius: 2px;
  background-color:#1e3d59;
  border: none;
  color:#FFFDD5;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.container {
    border-radius: 5px;
    background-color:#999;
    padding: 20px;
}
input[type=text]:focus {
    background-color:#CCC;
}
* {
    box-sizing: border-box;
}

input[type=text],input[type=file]{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

td{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	text-indent:4px;

}

table[align="center"] {
    margin: 0 auto;
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
<tr>
    <td height="215" colspan="2"><form action="registrationTest.php" method="post">
      ;
      <table width="406" border="0" align="center">
      <tr>
        <td colspan="2"><h3 class="heading">CREATE YOUR ACCOUNT</h3></td>
        </tr>
		  
      <tr>
        <td width="146"><p>Full Name</p></td>
        <td width="227"><p>&nbsp;
          </p>
          <p>
            <input type="text" name="txtFullName" id="txtFullName" />
          </p>
          <p>&nbsp; </p></td>
      </tr>
		  
      <tr>
        <td>Email Address</td>
        <td><p>&nbsp;
          </p>
          <p>
            <input type="text" name="txtEmail" id="txtEmail" />
          </p>
          <p>&nbsp; </p></td>
      </tr>
		  
      <tr>
        <td><p>Contact Number</p></td>
        <td><p>&nbsp;
          </p>
          <p>
            <input type="text" name="txtContact" id="txtContact" />
          </p>
          <p>&nbsp;</p></td>
      </tr>
		  
      <tr>
        <td><p>&nbsp;</p>
          <p>Password</p>
          <p>&nbsp;</p></td>
        <td><input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
      </tr>
		  
      <tr>
        <td><p>&nbsp;</p>
          <p>Confirm Password</p>
          <p>&nbsp;</p></td>
        <td><input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="datalist" /></td>
      </tr>
  
		  
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <p>
               <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Register"/>
				 
                 <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
             </p>
			

         
        </blockquote></td>
        </tr>
    </table>
    </form>
		
	
  
    </td>
  </tr>
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