<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("Location: overview.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>firstBuild_overview</title>
<link rel="stylesheet" type="text/css" href="styleSheets/overviewStyles.css">
<link rel="stylesheet" type="text/css" href="styleSheets/mainStyle.css">
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
	
<!--overview section-->
<div class="banner">
		
		<div class="content">
			<h1>Lanka Dreams Holiday Resorts</h1>
			<h2 class="consecHeading">OVERVIEWS</h2>
			<p>"Spend your vaccation under our roof peacefully"</p>
		</div>
	
	</div>
<!--overview section of First Build-->
<h2>First Build resort overview</h2><br><br>
<div class="overviews">
	
	<div class="highlights">
		
<h3>Highlights</h3>
<br><br>
<table style="width:60%">
  <tr>
    <td>pets welcome</td>
    <td>swimming pool</td>
    <td>parking</td>
  </tr>
</table>
	</div>
	
<br><br>
	
	<div class="details>">
		<h3>More details about the resort</h3>
		<br><br>
		<table style="width:60%">
		  <tr>
			<td>Four Bedrooms</td>
			<td>Three Bathrooms</td>
			<td>A kitchen</td>
		  </tr>
		  <tr>
			<td>A Dining Area</td>
			<td>Two Living Rooms</td>
			<td>A veranda</td>
		  </tr>
		   <tr>
			<td>Four Balcony</td>
			<td>An Office Room</td>
			<td>A Car Pourch</td>
		  </tr>
		   <tr>
			<td>A Garden</td>
			<td>A Swimming Pool</td>
			<td>A Servant Bedroom</td>
		  </tr>
		  <tr>
			<td>A Servant Bathroom</td>
			<td>A Servant kitchen</td>
		  </tr>
		</table>
	</div>

<br><br>
	
	<div class="features">
		<h3>More features about the resort</h3>
		<br><br>
		<table>
			<tr>
			<td>Fully Furnished</td>
			<td>AC Rooms</td>
			<td>Fully Tiled Floor</td>
		  </tr>
			<tr>
			<td>Good Well Water Supply</td>
			<td>Peaceful and Carm Environment</td>
			
		  </tr>
		
		</table>
	</div>
<br><br>
<hr>
<!--overview section of Second Build-->
<h2>Second Build resort overview</h2><br><br>
<div class="overviews">
	
	<div class="highlights">
		
<h3>Highlights</h3>
<br><br>
<table style="width:60%">
  <tr>
    <td>pets welcome</td>
    <td>parking</td>
  </tr>
</table>
	</div>
	
<br><br>
<div class="details>">
		<h3>More details about the resort</h3>
		<br><br>
		<table style="width:60%">
		  <tr>
			<td>Three Bedrooms</td>
			<td>Three Bathrooms</td>
			<td>A kitchen</td>
		  </tr>
		  <tr>
			<td>A Dining Area</td>
			<td>Two Living Rooms</td>
			<td>A veranda</td>
		  </tr>
		   <tr>
			<td>A Garden</td>
			<td>A Swimming Pool</td>
			<td>A Servant Bedroom</td>
		  </tr>
		  <tr>
			<td>A Servant Bathroom</td>
			<td>A Servant kitchen</td>
		  </tr>
		</table>
	</div>

<br><br>
	
	<div class="features">
		<h3>More features about the resort</h3>
		<br><br>
		<table>
			<tr>
			<td>Fully Furnished</td>
			<td>AC Rooms</td>
			<td>Fully Tiled Floor</td>
		  </tr>
			<tr>
			<td>Good City Water Supply</td>
			<td>Peaceful and Carm Environment</td>
			<td>CCTV Security</td>	
			
		  </tr>
		
		</table>
	</div>	
<hr>	
<!--overview section of Third Build Ground Floor-->
<h2>Third Build Ground Floor overview</h2><br><br>
<div class="overviews">
	
	<div class="highlights">
		
<h3>Highlights</h3>
<br><br>
<table style="width:60%">
  <tr>
    <td>pets welcome</td>
    <td>parking</td>
  </tr>
</table>
	</div>
	
<br><br>
<div class="details>">
		<h3>More details about the resort</h3>
		<br><br>
		<table style="width:60%">
		  <tr>
			<td>One Bedrooms</td>
			<td>One Bathrooms</td>
			<td>A kitchen</td>
		  </tr>
		  <tr>
			<td>A Dining Area</td>
			<td>A Living Rooms</td>
		  </tr>
		</table>
	</div>

<br><br>
	
	<div class="features">
		<h3>More features about the resort</h3>
		<br><br>
		<table>
			<tr>
			<td>Fully Furnished</td>
			<td>AC Rooms</td>
			<td>Fully Tiled Floor</td>
		  </tr>
			<tr>
			<td>Good Well Water Supply</td>
			<td>Peaceful and Carm Environment</td>
			
		  </tr>
		
		</table>
	</div>
	<hr>
<!--overview section of Third Build First Floor-->
<h2>Third Build First Floor overview</h2><br><br>
<div class="overviews">
	
	<div class="highlights">
		
<h3>Highlights</h3>
<br><br>
<table style="width:60%">
  <tr>
    <td>pets welcome</td>
    <td>parking</td>
  </tr>
</table>
	</div>
	
<br><br>
	
	<div class="details>">
		<h3>More details about the resort</h3>
		<br><br>
		<table style="width:60%">
		  <tr>
			<td>Two Bedrooms</td>
			<td>Two Bathrooms</td>
			<td>A kitchen</td>
		  </tr>
		  <tr>
			<td>A Dining Area</td>
			<td>A Living Rooms</td>
			<td>A veranda</td>
		  </tr>
		   <tr>
			<td>A Balcony</td>
		  </tr>
		</table>
	</div>

<br><br>
	
	<div class="features">
		<h3>More features about the resort</h3>
		<br><br>
		<table>
			<tr>
			<td>Fully Furnished</td>
			<td>AC Rooms</td>
			<td>Fully Tiled Floor</td>
		  </tr>
			<tr>
			<td>Good Well Water Supply</td>
			<td>Peaceful and Carm Environment</td>
			
		  </tr>
		
		</table>
	</div>
	<hr>
	
<!--overview section of Third Build Second Floor-->
<h2>Third Build Second Floor overview</h2><br><br>
<div class="overviews">
	
	<div class="highlights">
		
<h3>Highlights</h3>
<br><br>
<table style="width:60%">
  <tr>
    <td>pets welcome</td>
    <td>parking</td>
  </tr>
</table>
	</div>
	
<br><br>
	
	<div class="details>">
		<h3>More details about the resort</h3>
		<br><br>
		<table style="width:60%">
		  <tr>
			<td>One Bedrooms</td>
			<td>One Bathrooms</td>
			<td>A kitchen</td>
		  </tr>
		  <tr>
			<td>A Dining Area</td>
			<td>A Living Rooms</td>
			<td>A veranda</td>
		  </tr>
		   <tr>
			<td>A Balcony</td>
			<td>Roof Top</td>
		  </tr>
		</table>
	</div>

<br><br>
	
	<div class="features">
		<h3>More features about the resort</h3>
		<br><br>
		<table>
			<tr>
			<td>Fully Furnished</td>
			<td>AC Rooms</td>
			<td>Fully Tiled Floor</td>
		  </tr>
			<tr>
			<td>Good Well Water Supply</td>
			<td>Peaceful and Carm Environment</td>
			
		  </tr>
		
		</table>
	</div>
	<hr>
	<div class="termsNconditions">
		<h2>Terms and conditions</h2>
		<br><br>
		
		<table>
			<tr>
				<td>You shall be entitled to use the said premises for the residential purposes only.</td>
			</tr>
			<tr>
			    <td>If you need to continue the agreement more than the time duration mentioned in the agreement(booking) you should inform us prior by a written notes or a message.</td>
			</tr>
			<tr>
				<td>When you are extending the agreement(booking), for the extended months the monthly rental will be increase by 8%.</td>
			</tr>
			<tr>
				<td>You cannot use the premises for any immoral, illegal or unlawful purposes.</td>
			</tr>
			<tr>
				<td>No loud noise allowed.If there is a party etc.. you should update us.</td>
			</tr>
			<tr>
				<td>You should be responsible for any damages to the premises except natural disasters.</td>
			</tr>
			<tr>
				<td>You should protect and take care of the plants in the premises.</td>
			</tr>
			<tr>
				<td>At the end of the said period you should hand over a peaceful and clean house as it is.</td>
			</tr>
		
		</table>

	</div>
<br><br>
	
	<div class="policy">
		<h2>Payment Policy</h2>
		<br><br>

<table style="width:100%">
  <tr>
    <td><b>Payment Schedule</b></td>
    <td><b>Cancellation Policy</b></td>
  </tr>
  <tr>
    <td>50% advance payment should be pay at the booking</td>
    <td>Advance payment is Non Refundable. </td>
  </tr>
  <tr>
    <td>Remaining balance shound be pay 5 days before arrival</td>
    <td>cancellation of advance payment will not be vaild for the next booking</td>
  </tr>
</table>
	</div>
<hr>
<br><br>
	
</div>
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
