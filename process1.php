<?php 
	include "config.php";
	
	if(isset($_POST['fname']))
	{
		$User_Name = $_POST['fname'];
	}
	if(isset($_POST['pass']))
	{
		$Password = $_POST['pass'];
	}

	$sql = "INSERT INTO sign_in (fname,pass) VALUES ('$User_Name','$Password')";
	
	if ($conn->query($sql) === TRUE)
	{
		$last_id = $conn->insert_id;
		header("Location: index.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		header("Location: index.php");
	}
	
?>