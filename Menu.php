
<link rel="stylesheet" href="css/style.css">



		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="Homepage.php">Jogs</a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: black">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="Homepage.php">Home</a>
                           <a class="nav-item nav-link" href="Collection.php">Collection</a>
                           <a class="nav-item nav-link" href="Contact.php">Contact</a>
                           <a class="nav-item nav-link last" href="Search.php"><img src="images/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="Cart.php"><img src="images/shop_icon.png"></a>
                           <?php
                            if(empty($_SESSION['accounts'])) {
                                print '<a class="nav-item nav-link" href="SignIn.php">Signin</a>';
                            } else {
                                print '<a class="nav-item nav-link" href="Signout.php">Signout</a>';
                            }
                           
                           ?>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
