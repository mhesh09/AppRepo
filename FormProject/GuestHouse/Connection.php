<?php

function Connection()
{

	$conn=new mysqli("localhost","sroot","GOODman123","guesthouseInformation");
	if($conn->connect_error)
	{
		die("Connection failed".$conn->connect_error);

	}else
	{
		// echo "Successfully connect to database";
		return $conn;
	}

}
function TimeToClose($conn)
{
	$conn->close();
}




?>
