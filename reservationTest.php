<?php
	if(isset($_POST["btnSubmit"]))
	{	

	$fullName=$_POST["txtname"];
	$nicPssNo=$_POST["txtpnum"];
	$country=$_POST["txtcountry"];
	$address=$_POST["txtaddress"];
	$contactNo=$_POST["txtCnum"];
	$email=$_POST["txtemail"];
	$bedCount=$_POST["txtBed"];
	$memberCount=$_POST["textfield"];
	$checkInDate=$_POST["date2"];
	$checkOutDate=$_POST["date3"];
	
	if(isset($_POST["chkFirst"]))
	{
		$in[]="First Build";
	}
	
	if(isset($_POST["chkSecond"]))
	{
		$in[]="Second Build";
	}
	
	if(isset($_POST["chkThirdGF"]))
	{
		$in[]="Third Build GF";
	}
		
	if(isset($_POST["chkThirdF01"]))
	{
		$in[]="Third Build F01";
	}
	
	if(isset($_POST["chkThirdF02"]))
	{
		$in[]="Third Build F02";
	}
	
		
		
	if(isset($_POST["chkFirst"]))
	{
		$ass[]="With Furnitures";
	}
		
	if(isset($_POST["chksec"]))
	{
		$ass[]="Without Furnitures";
	}
	
	
		
	$con=mysqli_connect("localhost","root","","lankadreamsdb");
					
				if(!$con)
				{
					die("Cannot connect our DB Seaver");
				}
		
	$sql="INSERT INTO `tblreservations` (`fullname`, `nic/passNo`, `country`, `address`, `contact`, `email`, `bedCount`, `memberCount`, `checkIn`, `checkOut`) VALUES ('".$fullName."', '".$nicPssNo."', '".$country."', '".$address."', '".$contactNo."', '".$email."', '".$bedCount."', '".$memberCount."', '".$checkInDate."', '".$checkOutDate."');";

		mysqli_query($con,$sql);
		//to manage the selected resort section
		foreach($in as $a)
		{
			$sql_slt="INSERT INTO `tblselected_resort` (`email`, `selectedResort`) VALUES ('".$email."', '".$a."');"; 
		
 			mysqli_query($con,$sql_slt);
		}
		
		//to manage the accessories section
		foreach($ass as $b)
		{
			$sql_ass="INSERT INTO `tblaccessoriestype` (`email`, `type`) VALUES ('".$email."', '".$b."');"; 
			
 			mysqli_query($con,$sql_ass);
		}
	header("Location: reservation.php");
	}
	
?>