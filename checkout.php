<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("ketnoi.php")
?>
<!DOCTYPE html>
<html>
<head>
<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href="index.php"><img src="images/logo-4.png" alt="" /></a>
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart-1.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="#">Men</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="products.html">New Arrivals</a></li>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">login</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Women</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="products.html">New Arrivals</a></li>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">login</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Kids</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="products.html">New Arrivals</a></li>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">login</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Style Videos</a></li>

									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Sports</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="products.html">New Arrivals</a></li>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">login</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Brands</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="products.html">New Arrivals</a></li>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">login</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="products.html">Men</a></li>
										<li><a href="products.html">Women</a></li>
										<li><a href="products.html">Brands</a></li>
										<li><a href="products.html">Kids</a></li>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Style Videos</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h3>My Shopping Bag (3)</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
               <div class="in-check" >
				<ul class="unit">
                	
					<li><span style="margin-left:85px">Item</span></li>
					<li><span style="margin-left:60px">Product Name</span></li>		
					<li><span style="margin-left:80px">Price</span></li>
					<li><span style="margin-left:60px">Stock Status</span></li>
                    <li><span style="margin-left:60px">Số lượng</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<?php
				if(isset($_SESSION['giohang'])){
				for($i = 0 ;$i <count($_SESSION['giohang']); $i++){
					$query = mysql_query("select * from product where id = ".$_SESSION['giohang'][$i]['id']);
					$row = mysql_fetch_array($query);
					?>
			
                
				<ul class="cart-header">
             
					<div class="close1"> </div>
                      
						<li class="ring-in"><a href="single.php" ><img src="images/<?php echo $row['ImageUrl'] ?>" class="img-responsive" style="width:100px; height:100px;" alt=""></a>
						</li>
						<li><span><?php echo $row['ProductName'] ?></span></li>
						<li><span><?php echo $row['Price'] ?></span></li>
						<li><span>In Stock</span></li>
                        <li><span><select><option selected="selected">1</option>
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option>
                        <option >9</option></select></span></li>
				<div class="clearfix"> </div>
				</ul>
					<?php }
				}
				?>
			</div> 
			</div>  
		 </div>
		</div>
	</div>
    <div style=" font-size:25px; margin-right:100px; " align="right"><a href="#">MUA HÀNG</a></div>
	<!--end-ckeckout-->
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h3>ABOUT US</h3>
					<ul>
						<li><a href="#">Who We Are</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="#">Our Sites</a></li>
						<li><a href="#">In The News</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Carrers</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="account.php">Your Account</a></li>
						<li><a href="#">Personal Information</a></li>
						<li><a href="contact.html">Addresses</a></li>
						<li><a href="#">Discount</a></li>
						<li><a href="#">Track your order</a></li>					 					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>CUSTOMER SERVICES</h3>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Shipping</a></li>				 
					</ul>
					<div class="sub">
						<form>
							<input type="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="col-md-3 footer-left footer-right">
					<h3>FOLLOW US</h3>
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="drbl"> </span></a></li>
						<li><a href="#"><span class="google"> </span></a></li>				 
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class">© 2015 Free Style All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	
</body>
</html>