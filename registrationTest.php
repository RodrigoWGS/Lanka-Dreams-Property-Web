	<?php
	if(isset($_POST["btnSubmit"]))
	{	

	$email=$_POST["txtEmail"];
	$fullName=$_POST["txtFullName"];
	$contact=$_POST["txtContact"];
	$password=$_POST["txtPassword"];
	
		
		$con=mysqli_connect("localhost","root","","lankadreamsdb");
					
				if(!$con)
				{
					die("Cannot connect our DB Seaver");
				}
		  $sql="INSERT INTO `tbluser` (`email`, `fullName`, `contact`, `password`) VALUES ('".$email."', '".$fullName."', '".$contact."', '".$password."');";

	
		if( mysqli_query($con,$sql))
		{
			
			header('Location:login.php');

		}
	
	}
	
?>  