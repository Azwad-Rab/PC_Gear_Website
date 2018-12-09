
<?php

	include "config.php";
	
	
	if(isset($_POST['fname']))
	{
		$name = $_POST['fname'];
	}
	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
	}
    if(isset($_POST['phone']))
	{
		$phone = $_POST['phone'];
	}
	if(isset($_POST['company']))
	{
		$company = $_POST['company'];
	}
	if(isset($_POST['message']))
	{
		$message = $_POST['message'];
	}
	
	$sql = "INSERT INTO user1 (fname, email, phone, company, message) VALUES ('$name','$email',$phone,'$company','$message')";
	
	if ($conn->query($sql) === TRUE)
	{
		$last_id = $conn->insert_id;
		echo "Insert successful. Last inserted id " . $last_id;
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
?>