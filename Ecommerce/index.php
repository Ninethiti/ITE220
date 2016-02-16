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
                 
                 <?php getPro(); ?>
                 <?php getCatPro(); ?>
                 <?php getBrandPro();?>
             </div>
         </div>
         
         <div id="footer">
         
         <h2 style="text-align:center; padding-top:30px;">&copy; 2016 by Thiti Dantaradate</h2>
         
         </div>
         
    
    
    
    </div>



</body>
</html>