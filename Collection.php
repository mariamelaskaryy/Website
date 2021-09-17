<?php
session_start();
include("DB.php");
if (isset($_POST['add'])) {

	  $date = date('Y-m-d H:i:s');
	  $product_name = $_POST['product_name'];
	  $price = $_POST['price'];
	  $image = $_POST['image'];

  
	  if (isset($_SESSION["cart"])) {
		$productID = array_column($_SESSION["cart"], "product_name");
		if (!in_array($product_name, $productID)) {
		  $counter = count($_SESSION["cart"]);
		  $product_array = array(
			'product_name' => $product_name,
			'price' => $price,
			'image'=> $image,
		  );
		  $_SESSION["cart"][$counter] = $product_array;
  
		  DB::query(
			'INSERT INTO cart VALUES(\'\',:product_name,:price,:image)',
			array(
				':product_name' => $product_name,
				':price' => $price,
				':image' => $image,
			  )
		  );
  
		  echo '<script>alert("Item Added To Cart")</script>';
		  echo '<script>window.location="Cart.php"</script>';
		} else {
		  echo '<script>alert("Item Already Added")</script>';
		  echo '<script>window.location="Cart.php"</script>';
		}
	  } else {
		$hike_array = array(
			'product_name' => $product_name,
			'price' => $price,
			'image' => $image,
		  );
		$_SESSION["cart"][0] = $hike_array;
  
		DB::query(
		  'INSERT INTO cart VALUES(\'\',:product_name,:price,:image)',
		  array(
			':product_name' => $product_name,
			':price' => $price,
			':image' => $image,
		  )
		);
  
		echo '<script>alert("Item Added To Cart")</script>';
		echo '<script>window.location="Cart.php"</script>';
	  }
	
  }



?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Shoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section header_main">
		<?php include 'Menu.php'; ?>
	</div>
	<!-- New Arrivals section start -->
  <div class="collection_text">Shoes</div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>Shop Now</strong></h1>
    	</div>
    </div>
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Nike Air Force 1 LVL 8 </p>
    					<div class="shoes_icon"><img src="images/shoes-img4.png"></div>
    					<div class="star_text">
    						<div class="left_part">
							<form action="Collection.php" method="POST">
							<input type="hidden" name="image" value="images/shoes-img4.png"> 
							<input type="hidden" name="price" value="900">
							<input type="hidden" name="product_name" value="Nike Air Force 1 LVL 8">
							<button class="add_to_cart_btn" type="submit" name="add">Add To Cart</button>
							</form>						
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">EGP <span style="color: black;">900</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Adidas StanSmith </p>
    					<div class="shoes_icon"><img src="images/shoes-img5.png"></div>
    					<div class="star_text">
    						<div class="left_part">
							<form action="Collection.php" method="POST">
							<input type="hidden" name="image" value="images/shoes-img5.png">
							<input type="hidden" name="price" value="500">
							<input type="hidden" name="product_name" value="Adidas StanSmith">
							<button class="add_to_cart_btn" type="submit" name="add">Add To Cart</button>
							</form>	
    							

    						</div>
    						<div class="right_part">
    							<div class="shoes_price">EGP <span style="color: black;">500</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Adidas Extaball </p>
    					<div class="shoes_icon"><img src="images/shoes-img6.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    						<form action="Collection.php" method="POST">
							<input type="hidden" name="image" value="images/shoes-img6.png">
							<input type="hidden" name="price" value="600">
							<input type="hidden" name="product_name" value="Adidas Extaball">
							<button class="add_to_cart_btn" type="submit" name="add">Add To Cart</button>
							</form>		
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">EGP <span style="color: black;">600</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Adidas Ultraboost Running Shoes</p>
    					<div class="shoes_icon"><img src="images/shoes-img7.png"></div>
    					<div class="star_text">
    						<div class="left_part">
							<form action="Collection.php" method="POST">
							<input type="hidden" name="image" value="images/shoes-img7.png">
							<input type="hidden" name="price" value="400">
							<input type="hidden" name="product_name" value="Adidas Ultraboost Running Shoes">
							<button class="add_to_cart_btn" type="submit" name="add">Add To Cart</button>
							</form>	
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">EGP <span style="color: black;">400</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Nike Glow Up</p>
    					<div class="shoes_icon"><img src="images/shoes-img8.png"></div>
    					<div class="star_text">
    						<div class="left_part">
							<form action="Collection.php" method="POST">
							<input type="hidden" name="image" value="images/shoes-img8.png">
							<input type="hidden" name="price" value="500">
							<input type="hidden" name="product_name" value="Nike Glow Up">
							<button class="add_to_cart_btn" type="submit" name="add">Add To Cart</button>
							</form>	
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">EGP <span style="color: black;">500</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Nike Air Force 1 O7</p>
    					<div class="shoes_icon"><img src="images/shoes-img9.png"></div>
    					<div class="star_text">
    						<div class="left_part">
							<form action="Collection.php" method="POST">
							<input type="hidden" name="image" value="images/shoes-img9.png">
							<input type="hidden" name="price" value="900">
							<input type="hidden" name="product_name" value="Nike Glow Up">
							<button class="add_to_cart_btn" type="submit" name="add">Add To Cart</button>
							</form>	
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">EGP <span style="color: black;">900</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="https://www.facebook.com/jogs.eg1/"><img src="images/fb-icon.png"></a></li>
    							<li><a href="https://instagram.com/jogs.eg?utm_medium=copy_link"><img src="images/ig-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
	        </div>
    	</div>
	<!-- section footer end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>