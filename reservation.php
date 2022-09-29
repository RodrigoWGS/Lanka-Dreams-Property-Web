<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reservation at LDHR</title>
<link rel="stylesheet" type="text/css" href="styleSheets/mainStyle.css">
<style>
h2
{
	text-align: center;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace";
}

.center
{
	margin-left: auto;
	margin-right: auto;
	
}

ul
{
	text-align: center
}
	
table {
  border-collapse: collapse;
  width: 75%;
}
input[type=text] ,input[type=password]{
    width: 100%;
    padding: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}
input[type=submit] ,input[type=reset] {
    background-color:midnightblue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
	margin: 20px;
}
	td{
		padding: 14px;
	}


tr:nth-child(even) {background-color: #f2f2f2;}
	
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
	<br>
	<br>

	<h3> <center>Fill the below details for your reservation:</center></h3>
	

<br>

	
<form id="form1" name="form1" method="post" action="reservationTest.php">
  <table class="center" width="564" height="346" border="1">
  <tbody>
    <tr></tr>
  </tbody>
  <tbody>
    <tr>
      <td colspan="4"><p><strong style="color: #9F8105">Personal  Details:</strong></p></td>
    </tr>
    <tr>
      <td width="124"><p>Full Name </p></td>
      <td colspan="3"><input type="text" name="txtname" id="txtname"></td>
    </tr>
    <tr>
      <td><p>NIC/Passport Number</p></td>
      <td width="144"><input type="text" name="txtpnum" id="txtpnum"></td>
      <td width="65">Country </td>
      <td width="203"><input type="text" name="txtcountry" id="txtcountry"></td>
    </tr>
    <tr>
      <td><p>Address </p></td>
      <td colspan="3"><textarea name="txtaddress" id="txtaddress"></textarea></td>
    </tr>
    <tr>
      <td><p>Contact Number </p></td>
      <td><input type="text" name="txtCnum" id="txtCnum"></td>
      <td>Email  Address </td>
      <td><input type="text" name="txtemail" id="txtemail"></td>
    </tr>
    <tr>
      <td colspan="4"><p><strong style="color: #9F8105">Booking  Details:</strong></p></td>
    </tr>
    <tr>
      <td width="124">Selected  Resort </td>
       <td colspan="4"><br />
          <input type="checkbox" name="chkFirst" id="chkFirst" />
          <label for="chkBooks">First Build<br>
            <input type="checkbox" name="chkFirst" id="chkSecond" />
            Second Build <br>
            <input type="checkbox" name="chkThirdGF" id="chkThirdGF" />
            Third Build GF<br />
			 <input type="checkbox" name="chkThirdF01" id="chkThirdF01" />
            Third Build F01<br />
			  <input type="checkbox" name="chkThirdF02" id="chkThirdF02" />
            Third Build F02<br />
            <br />
          </label></td>
    </tr>
    <tr>
      <td>Number  Of Bedrooms Needed </td>
      <td colspan="3"><input type="text" name="txtBed" id="txtBed"></td>
    </tr>
    <tr>
      <td ><p>Accessories </p></td>
       <td  ><br />
          <input type="checkbox" name="chkFirst" id="chkFirst" />
          <label for="chkBooks">With Furnitures<br>
            <input type="checkbox" name="chkFirst" id="chksec" />
            Without Furnitures <br>
            <br />
          </label></td>
      <td width="65">&nbsp;</td>
      <td width="203">&nbsp;</td>
    </tr>
    <tr>
      <td><p>Number of members </p></td>
      <td colspan="3"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td><p>Check-in Date</p></td>
      <td colspan="3"><label for="date2">Date:</label>
        <input type="date" name="date2" id="date2"></td>
    </tr>
    <tr>
      <td><p>Check-out Date </p></td>
      <td colspan="3"><label for="date3">Date:</label>
        <input type="date" name="date3" id="date3"></td>
    </tr>
 
    <tr>
      <td colspan="3" height="86"><input name="btnSubmit" type="submit" class="topnav-centered" onclick="myFunction()" id="btnSubmit" value="Submit">
        <input name="btnReset" type="reset" id="btnReset" value="Reset" 1="&lt;input type=&quot;reset&quot; name=&quot;btnReset&quot; id=&quot;btnReset&quot; value=&quot;Reset&quot;&gt;&lt;footer&gt;Content for New footer Tag Goes Here&lt;/footer&gt;"></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
  <tbody>
  </tbody>
  </table>
</form><br><br><br><br><br><br><br><br>

<script>
function myFunction() {
  alert("Your reservation successfully send. We will be contacting you in soon via email. Thank You! Have a nice day!");
}
</script>

	
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
