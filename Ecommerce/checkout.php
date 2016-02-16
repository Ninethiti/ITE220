<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
    <head>
        <title>Thiti online shop</title>
    <link rel="stylesheet" href="styles/styles.css" media="all"/>
    </head>
    
<body>

    <div class="main_wrapper">
    
         
         <div class="header_wrapper">
         
            <a href="index.php"><img id="logo" src="images/cooltext164698778419765.png" width="300" height="100"/></a>
             <img id"banner" src="images/images.png" width="700" height="100"/>
         </div>
         
         <div class="menubar">
         
             <ul id="menu">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="all_products.php">All products</a></li>
                 <li><a href="customer/my_account.php">My Account</a></li>
                 <li><a href="#">Sign up</a></li>
                 <li><a href="cart.php">Shopping Cart</a></li>
                 <li><a href="#">Contact Us</a></li>
             </ul>
         
             <div id="form">
                 <form method="get" action="results.php" enctype="multipart/form-data">
                     <input type="text" name= "user_query" placeholder="Search a Product"/>
                     <input type="submit" name="search" value= "Search"/>
                 </form>
         </div>
     </div>
     
             
         <div class="content_wrapper">
         
             <div id="sidebar">
                 
                 <div id="sidebar_title">Categories</div>
                 
                 <ul id="cats">
                 
                    <?php getCats();?>
                 
                 <ul>
                 
                 <div id="sidebar_title">Brands</div>
                 
                 <ul id="cats">
                   
                   <?php getBrands(); ?>
                   
                 
                 <ul>
                 
                 </div>
             
             
             </div>
         
             <div id="content_area">
             <?php cart(); ?>
             <div id="shopping_cart">
                      
                      <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
                      Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price();?> <a href="cart.php" style="color:yellow">Go to cart</a></b>
                      
                      
                      </span>
             </div>
             
                 <div id="products_box">
                 
        <?php
		include("includes/db.php");
				
	    $total = 0;
		global $con;
		
		$ip = getIp();
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price= mysqli_query($con,$sel_price);
		
		while($p_price= mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['p_id'];
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price =mysqli_query($con,$pro_price);
			
			while ($pp_prce = mysqli_fetch_array($run_pro_price)){
				
			$product_price =array($pp_prce['product_price']);
			
			$product_name = $pp_prce['product_title'];
			
			$values = array_sum($product_price);
			
			$total +=$values;
			}
				
			}
				 ?>
                 
                 
                 <h2 align="center">Pay now with Paypal:</h2>
                 <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value=" thitidantaradate-buyer@gmail.com">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="hidden" name="currency_code" value="USD">


<!-- Display the payment button. -->
<input type="image" name="submit" border="0" 
src="paypal-checkout-button.png" 
alt="PayPal - The safer, easier way to pay online">
<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>

</div>
                 
                 
                 
             </div>
         </div>
         
         <div id="footer">
         
         <h2 style="text-align:center; padding-top:30px;">&copy; 2016 by Thiti Dantaradate</h2>
         
         </div>
         
    
    
    
    </div>



</body>
</html>