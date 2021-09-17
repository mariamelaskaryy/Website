<?php
#include('includes/head.php');
session_start();
if (empty($_SESSION["cart"])) {
  $subtotal = 0;
  $total = 0;
}
if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION["cart"] as $keys => $values) 
    {
      if ($values["product_name"] == $_GET["id"]) {
        unset($_SESSION["cart"][$keys]);
        
        
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Product Sans Font -->
  <link rel="stylesheet" href="layout/css/productsans.css">
  <!-- Main CSS File -->
  <link rel="stylesheet" href="css/master.css">
  <!-- Favicon  -->
  <link href="layout/svg/logo-mark.svg" rel="shortcut icon" type="image/png">
  <!-- Link To Icons File -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <title>Jogs</title>
</head>

<body id="review">
  <div class="top-banner">
    <div class="overlay"></div>
    <div class="content">
      <h1>Your Cart</h1>
    </div>
  </div>
  <!-- Top Banner END -->
  <!-- Cart Body START -->
  <div class="cart-body">
    <div class="flex-container">
      <div class="right">
        <?php
        if (!empty($_SESSION["cart"])) {
          $total_price = 0;
          foreach ($_SESSION["cart"] as $keys => $values) {
            // $productid = $values['product_id'];
			$price = $values['price'];
			$product_name = $values['product_name'];
      $productImage = $values['image'];
            // $product_info = DB::query('SELECT * FROM products WHERE id=:id', array(':id' => $productid))[0];
        ?>
            <div class=" cart-container ">
              <div class="cartimg"> <img src="<?php echo $productImage; ?>"> </div>
              <table>
                <tr>
                  <td>
                    <div class="title"><?php echo $product_name; ?></div>
                  </td>
                </tr>
                <tr>

                </tr>
                <tr>
                  <td>
                    <?php echo $price; ?>
                  </td>
                </tr>
              </table>
              <table class="fl-1 ta-r">
                <tr>

                  <td>
                    <a href="cart.php?action=delete&id=<?php echo $product_name ?>"> <i class="fas fa-times remove-cart"></i> </a>
                  </td>
                </tr>
              </table>

            </div>
          <?php
            // $total_price = $values["total_price"];
          }
          ?>
        <?php
        }
        ?>
        <!-- Card 1 END-->
        <!-- Card 2 END-->
      </div>
      <!-- Cart Details START -->
      <div class="left">
        <div class=" cart-container ">
          <h1 class="ta-c">Cart Details</h1>
          <hr>
          <?php
          if (!empty($_SESSION["cart"])) {
            $total = 0;
            $subtotal = 0;
            foreach ($_SESSION["cart"] as $keys => $values) {
				$price = $values['price'];
				$product_name = $values['product_name'];
              
              
              
              
          ?>
              <div class="payment-details">
                <div class="flex mb-10"> <b class="fl-1"></b>
                  <p class="fl-1 ta-r"></p>
                </div>
              </div>
            <?php

              $subtotal += $values["price"];
            }
            ?>
          <?php
            // $tax = $subtotal * 0.14;
            // $total = $tax + $subtotal;
          }
          ?>

          
          <div class="payment-details">
            
            <div class="flex mb-10"> <b class="fl-1">Total Price</b>
              <p class="fl-1 ta-r"><?php echo $subtotal; ?></p>
            </div>
            <br>
            <a href="checkout.php?tprice=<?php echo $subtotal; ?>"> <button class="mb-a xbutton mb-20 "> Proceed to checkout </button> </a>
            <a href="Collection.php">
              <div class="mb-a xbutton grey  "> Continue exploring </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Cart Details END -->
    </div>


  </div>
  </div>
  
</body>

</html>
