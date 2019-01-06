<?php

include "Connection.php";

$conn=Connection();

$OwnerName=$_POST["owner_name"];
$OwnerPAN=$_POST["owner_PAN"];
$AvailableRoom=$_POST["availableRoom"];
$HotelName=$_POST["HotelName"];
$Location=$_POST["Location"];

$sql1="select * from ClientDetails";

$result=mysqli_query($conn,$sql1);

	if(mysqli_num_rows($result)>0)
	{
		
		echo $OwnerName;
		echo $OwnerPAN;
		echo $AvailableRoom;
		echo $HotelName;
		echo $Location;


		echo "there is data";
	}
	else
	{
		echo"there is no data";
	}

?>
