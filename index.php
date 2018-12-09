<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$username=  $_SESSION['fname'];	
$userid=  $_SESSION['id'];	
//echo $userid;
?>

<!DOCTYPE>
<html>

<head>
    <title>PC GEAR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    
	<link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="js/boxOver.js"></script>
</head>

<body>
    <div id="main_container">
        <div class="top_bar">

			
			
            <div id="header">
                <div id="logo">
                    <a href="index.php?cat=All Products"><img src="images/logo4.png" alt="" border="0" width="237" height="140" /></a>
                </div>
                <div class="oferte_content">
                    <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
					
					      <div class="oferta">
	  

<div class="w3-content w3-display-container">
  <img class="mySlides" src="slider/img_fjords.jpg" style="width:100%">
  <img class="mySlides" src="slider/img_lights.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="margin-left: 489px">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
			
			

      </div>
	  <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
					
                </div>
				</div>
                <!-- end of oferte_content-->
        </div>
            <div id="main_content">
                <div id="menu_tab">
                    <div class="left_menu_corner"></div>
                    <ul class="menu">
					
                         <li><a href="index.php?cat=All%20Products" class="nav1"> Home</a></li>
                        <li class="divider"></li>
						

                        <li><a href="Sign_Up.php" class="nav4">Sign Up</a></li>
                        <li class="divider"></li>
                        <li><a href="contact.php" class="nav6">Contact Us</a></li>
                        <li class="divider"></li>
						

						<li><a href="log_in_new.php" class="nav4"><?php echo "Logged in as"." ". $username;?></a></li>
						
						
						<li class="divider"></li>
						<li><a href="location.html" class="nav5">Location</a></li>
						
						<li class="divider"></li>
						<li><a href="About.html" class="nav3">About</a></li>

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
                    
                    <?php
                    //$cat_title="All Products";    
                    $query1 = "SELECT * FROM tblproduct ";
	                if(isset($_GET["cat"])){
                            $query1 .= " WHERE Catagory='".$_GET["cat"]."'";
                            $cat_title= $_GET["cat"];
                            //echo $query1;
                        }
                    
                    ?>
                    <div class="center_title_bar"> <?php echo $cat_title?> </div>
                    <?php
                    //echo $query1;
                    $product_array = $db_handle->runQuery($query1);
                        
	                   if (!empty($product_array)) { 
		              foreach($product_array as $key=>$value){
	                ?>
		          
                    
                    <div class="prod_box">
                        <div class="top_prod_box"></div>
                        <div class="center_prod_box">
                            <div class="product_title"><a href="<?php echo "details.php?id=".$product_array[$key]["id"] ;?>"> <?php echo $product_array[$key]["name"]; ?> </a></div>
                            <div class="product_img">
                                <a href="details.html"><img class="img_edit" src="<?php echo $product_array[$key]["image"]; ?>" alt="" border="0" /></a>
                            </div>
                            <div class="prod_price"><span class="price"><?php echo $product_array[$key]["price"]."/-"; ?></span></div>
                        </div>
                        <div class="bottom_prod_box"></div>
                         <div class="prod_details_tab">
						 
						 <?php $cartlink = "cart.php?uid=".$userid."&pid=".$product_array[$key]["id"] . "&quantity=1" ."&price=". $product_array[$key]["price"]; ?>
                            <a href="<?php echo $cartlink;?>" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> 
							
							<a href="details.html" class="prod_details">details</a> </div>

                    </div>
	<?php
			}
	}
	?>
	
	
                    
                    
                    
                </div>
                <!-- end of center content -->
                <div class="right_content">
                    <div class="shopping_cart">
                        
                  
                        
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
                        <li class="odd"><a href="https://www.asus.com/bd/">ASUS</a></li>
                        <li class="even"><a href="http://www.amd.com/en/home">AMD</a></li>
                        <li class="odd"><a href="http://www.corsair.com/en-eu">CORSAIR</a></li>
                        <li class="even"><a href="http://store.antec.com/">ANTEC</a></li>
                        <li class="odd"><a href="http://www.hp.com/">HP</a></li>
                        <li class="even"><a href="https://www.razerzone.com/">RAZER</a></li>
                        <li class="odd"><a href="https://www.logitech.com/en-us">LOGITECH</a></li>
                        <li class="even"><a href="https://www.gigabyte.com/">GIGABYTE</a></li>
						<li class="odd"><a href="https://www.msi.com/index.php">MSI</a></li>
                    </ul>
                    <div class="banner_adds">
						<div class="banner_adds"> <a href="#"><img src="images/AMD.jpg" alt="" border="0" /></a> </div>
						<div class="banner_adds"> <a href="#"><img src="images/AMD.jpg" alt="" border="0" /></a> </div>
						<div class="banner_adds"> <a href="#"><img src="images/AMD.jpg" alt="" border="0" /></a> </div>
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

