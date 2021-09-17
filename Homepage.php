<?php session_start(); ?>
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
      <title>Homepage</title>
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
	<div class="header_section" >
        <?php include 'Menu.php'; ?>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Checkout our best selling product</h1>
							<h1 class="mens_text"><strong>Air Jordan 1 Retro</strong></h1>
							<p class="lorem_text">For Only 800 Egyptian pounds</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/AIR_JORDAN_Retro.PNG"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Jordan 1 Retro </h1>
							<h1 class="mens_text"><strong>Black/White</strong></h1>
							<p class="lorem_text">For Only 800 Egyptian pounds</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/Retro1.PNG"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Adidas SuperStar </h1>
							<h1 class="mens_text"><strong>White/Black/Gold</strong></h1>
							<p class="lorem_text">For Only 700 Egyptian pounds</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/SuperStar.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Adidas Yeezys </h1>
							<h1 class="mens_text"><strong>Grey</strong></h1>
							<p class="lorem_text">For Only 1,000 Egyptian pounds.</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/Yeezy.png"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>			
			</div>
		</div>
	</div>
	<!-- header section end -->
       
       
	<!-- new collection section start -->
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Arrivals</strong></h1>
    	    <p class="consectetur_text">Check out the latest arrivals here</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
    	    		<div class="col-md-6">
    	    			<div class="about-img">
    	    				<button class="new_bt">New</button>
    	    				<div class="shoes-img"><img src="images/shoes-img1.png"></div>
    	    				<p class="sport_text">Nike Dior x Air Jordan</p>
    	    				<div class="dolar_text">EGP<strong style="color: black;">750</strong> </div>
    	    				<div class="star_icon">
    	    				</div>
    	    			</div>
    	    			<button class="seemore_bt"><a href="Collection.php" class="seemore_bt">See More</a></button>
    	    		</div>
    	    		<div class="col-md-6">
    	    			<div class="about-img2">
    	    				<div class="shoes-img2"><img src="images/shoes-img2.png"></div>
    	    				<p class="sport_text">Air Jordan 4 Retro Kaws</p>
    	    				<div class="dolar_text">EGP<strong style="color: black;">750</strong> </div>
    	    				<div class="star_icon">
    	    				</div>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
    
    
    </div>
	<!-- new collection section end -->
	
   	
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
