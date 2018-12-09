<?php
session_start();
if(isset($_POST['sub'])){
	include_once 'database.php';
	$user=$_POST['fname'];
	$pass=$_POST['pass'];
	$sql = "SELECT * FROM sign_in where fname='$user' AND pass='$pass';";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck < 1){
		echo '<p style="padding:50px 200px;"> username and password does not match!</p>';
        echo '<a style="padding-left:200px;" href="../index.php"> Back to Code Crunch </a>';
	}
	else{
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['id'] = $row['id'];
		echo $_SESSION['fname'];
		echo $_SESSION['id'];
        header("Location: index.php");
        exit();
	}
}
else{
	echo "not set";
	header("Location: index.php");
	//exit();
}

?>