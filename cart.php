<?php
session_start();
include_once 'database.php';
$userid = $_GET['uid'];
$productid = $_GET['pid'];
$price = $_GET['price'];
$qu = $_GET['quantity'];
$sql = "INSERT INTO cart(user_id ,	product_id, quantity 	, 	price)
        VALUES('$userid',$productid,$qu,$price);";
mysqli_query($conn, $sql);	
echo $sql;
echo "success";


$sql1="SELECT tblproduct.name,cart.user_id FROM cart inner join tblproduct on cart.product_id=tblproduct.id";
$sql2="SELECT fname FROM sign_in inner join cart on sign_in.id=cart.user_id";
$result = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
	
while($row = mysqli_fetch_assoc($result)){
 echo  $row['user_id'] . " " . " " . $row['name'] . " " . " "  ;
 echo "<br />";
 echo "<br />";
}

while($row = mysqli_fetch_assoc($result2)){
 echo  $row['fname'] . " " . " " ;
 echo "<br />";
 echo "<br />";
}



header("Location: shopping_cart.php");
exit();


?>