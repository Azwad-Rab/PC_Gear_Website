<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$username=  $_SESSION['fname'];	
$userid=  $_SESSION['id'];	
echo $userid;
?>

<!DOCTYPE>
<html>

<head>
    <title>PC GEAR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="style_sc.css" />
    
</head>

<body>
    <div id="main_container">
        <div class="top_bar">

			
			
            <div id="header">
                <div id="logo">
                    <a href="index.php"><img src="images/logo4.png" alt="" border="0" width="237" height="140" /></a>
                </div>
                <div class="oferte_content">
                    <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
                    <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
                </div>
				</div>
                <!-- end of oferte_content-->
        </div>
            <div id="main_content">
                <div id="menu_tab">
                    <div class="left_menu_corner"></div>
                    <ul class="menu">
					
                        <li><a href="#index.php" class="nav1"> Home</a></li>
                        <li class="divider"></li>
						

                        <li><a href="Sign_Up.php" class="nav4">Sign Up</a></li>
                        <li class="divider"></li>
                        <li><a href="contact.php" class="nav6">Contact Us</a></li>
                        <li class="divider"></li>
						

						<li><a href="log_in_new.php" class="nav4"><?php echo "Logged in as"." ". $username;?></a></li>

                    </ul>
                    <div class="right_menu_corner"></div>
                </div>
                <!-- end of menu tab -->
                <div class="left_content">
                    <div class="title_box">Categories</div>
                    <ul class="left_menu">
                        <li class="odd"><a href="index.php?cat=Processor">Processor</a></li>
                        <li class="even"><a href="index.php?cat=Motherboard">Motherboard</a></li>
                        <li class="odd"><a href="index.php?cat=RAM">RAM</a></li>
                        <li class="even"><a href="index.php?cat=Cooler">Cooler</a></li>
                        <li class="odd"><a href="index.php?cat=SSD">SSD</a></li>
                        <li class="even"><a href="index.php?cat=HDD">HDD</a></li>
                        <li class="odd"><a href="index.php?cat=GPU">GPU</a></li>
                        <li class="even"><a href="index.php?cat=PSU">PSU</a></li>
                        <li class="odd"><a href="index.php?cat=UPS">UPS</a></li>
                        <li class="even"><a href="index.php?cat=Fan">Fan</a></li>
                        <li class="even"><a href="index.php?cat=Casing">Casing</a></li>
                    </ul>
                    <div class="title_box">Special Products</div>
                    <div class="border_box">
                        <div class="product_title"><a href="details.html">Corsair</a></div>
                        <div class="product_img">
                            <a href="details.html"><img src="images/ASUS.png" alt="" border="0" /></a>
                        </div>
                        <div class="prod_price"><span class="reduce">80000/-</span> <span class="price">40000/-</span></div>
                    </div>
                    <div class="title_box">Newsletter</div>
                    <div class="border_box">
                        <input type="text" name="newsletter" class="newsletter_input" value="your email" />
                        <a href="#" class="join">join</a> </div>
                    <div class="banner_adds">
                        <a href="#"><img src="images/bann2.jpg" alt="" border="0" /></a>
                    </div>
                </div>
                <!-- end of left content -->
                <div class="center_content">
					      <div class="center_title_bar">Shopping Cart Items</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
		  
				<?php
include_once 'database.php';

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

//header("Location: shopping_cart.php");
exit();


?>

          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
	
	
                    
                    
                    
                </div>
                <!-- end of center content -->
                <div class="right_content">
                    <div class="shopping_cart">
                        <div class="cart_title">Shopping cart</div>
                        <div class="cart_details"> 3 items <br />
                            <span class="border_cart"></span> Total: <span class="price">35000/-</span> </div>
                        <div class="cart_icon">
                            <a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a>
                        
                        </div>
                        <div class="cart_item"> 
				
								
                        </div>
                        
                        
                     
                        
                        
                        
                        
                    </div>
                    <div class="title_box">What's new</div>
                    <div class="border_box">
                        <div class="product_title"><a href="details.html">RAM</a></div>
                        <div class="product_img">
                            <a href="details.html"><img src="images/p2.gif" alt="" border="0" /></a>
                        </div>
                        <div class="prod_price"><span class="reduce">3500/-</span> <span class="price">2800/-</span></div>
                    </div>
                    <div class="title_box">Manufacturers</div>
                    <ul class="left_menu">
                        <li class="odd"><a href="#">ASUS</a></li>
                        <li class="even"><a href="#">AMD</a></li>
                        <li class="odd"><a href="#">CORSAIR</a></li>
                        <li class="even"><a href="#">ANTEC</a></li>
                        <li class="odd"><a href="#">HP</a></li>
                        <li class="even"><a href="#">RAZOR</a></li>
                        <li class="odd"><a href="#">LOGITECH</a></li>
                        <li class="even"><a href="#">GIGABYTE</a></li>
                    </ul>
                    <div class="banner_adds">

                    </div>
                </div>
                <!-- end of right content -->
            </div>
            <!-- end of main content -->
            <div class="footer">
                <div class="left_footer"> <img src="images/logo1.jpg" alt="" width="170" height="49" /> </div>
                <div class="center_footer"> PC GEAR © All Rights Reserved 2017<br />
                    <div class="right_footer"> <a href="#">Home </a> |<a href="#">About </a>  |<a href="#">Sitemap </a>  |<a href="#">RSS </a> <a href="contact.html">Contact us</a> </div>
                </div>
            </div>
	</div>

            <!-- end of main_container -->
</body>

</html>

