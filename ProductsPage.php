<?php
    include 'config.php';
    session_start();
?>
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
      <header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
   <div class="icons">
    <a href="home.html" class="	fas fa-arrow-left" id="back"> </a>
   </div>
    <a href="home.html" class="logo">Mobile Heaven</a>
    <nav class="navbar">
        <a href="#mobile" class="hover-underline-animation">Mobile Phones</a>
        <a href="#wearables" class="hover-underline-animation">Wearables</a>
        <a href="#chargers" class="hover-underline-animation">Chargers</a>
        <a href="#other" class="hover-underline-animation">Other Accessories</a>
    </nav>

    <div class="icons">
         <a href="#" class="fas fa-heart" id="wishlist"><span class ="wishlist-quantity">0</span></a>
        <a href="#" class="fas fa-shopping-cart" id="toggle-cart"><span class ="cart-quantity">0</span></a>  
        <div class = "dropdown">                                <!--------------------------------> 
        <a href="#" class="fas fa-user"></a>
            <div class = "dropdown-content">
              <a href = "login.php">Login</a>
              <a href = "register.php">Register</a>
            </div>
        </div>
    </div>
</header>

<!-- header section ends -->
 <!-- Cart Modal-->
<div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
      <h1 class="basket">Basket</h1>
        <div class="product-rows">
                   <?
             $fetchData= fetch_data();
            show_data($fetchData);
            ?>
        </div>
        <div class="total">
          <h1 class="cart-total">TOTAL</h1>
            <span class="total-price">Rs 0</span>
              <button class="purchase-btn">CHECKOUT</button>
        </div>
      </div>
</div>
<!--   end of cart modal -->

 <!-- Wishlist Modal-->
<div class="wishlist-modal-overlay">
    <div class="wishlist-modal">
      <i id="close-btnW" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
        <h1 class="basket">Wishlist</h1>
        <div class="productW-rows"> </div>    
    </div>
</div>
<!--   end of wishlist modal -->

      <section class="products mobile" id = "mobile" >   
       <h1 class="heading3"> Mobile <span>Phones</span> </h1>
       <div class="cover">
        <button class="left_button" ><i class="fa fa-chevron-left"></i></button> 
        <div class="box-container" id="box-containerM">
        <?php
        $stmt=$conn->prepare("SELECT * FROM product WHERE productCategory LIKE 'P%' ORDER BY RAND()");
        $stmt-> execute();
        $result= $stmt->get_result();
        while($row=$result->fetch_assoc()):
        ?>
       <div class="box">
            <div class="image">
                <img class="product-image" src="<?= $row['productImage1'] ?>" alt="">
                <div class="icons">
                    <button class="heart-btn fas fa-heart" ></button>
                    <button class="cart-btn"> Add to cart </button>
                    <a href="specificProduct.php?productId=<?= $row['productId']?>"  class="fas fa-angle-double-right"></a>
                </div>
            </div>
            <div class="content">
                <h3><?= $row['productName'] ?></h3>
                <span class="price"> Rs <?= $row['productPrice'] ?></span>
            </div>
        </div>
        <?php endwhile; ?>
       </div>
        <button class="right_button"  ><i class="fa fa-chevron-right"></i></button>
      </div>
      </section>
        
        
    <section class="products wearables" id = "wearables">
    <h1 class="heading">Wear<span>Ables</span> </h1>
     <div class="cover">
      <button class="left_button" ><i class="fa fa-chevron-left"></i></button> 
     <div class="box-container" id="box-containerW">
        <?php
        $stmt=$conn->prepare("SELECT * FROM product WHERE productCategory LIKE 'E%' OR productCategory LIKE 'H%' ORDER BY RAND()");
        $stmt-> execute();
        $result= $stmt->get_result();
        while($row=$result->fetch_assoc()):
        ?>
       <div class="box">
            <div class="image">
                <img class="product-image" src="<?= $row['productImage1'] ?>" alt="">
                <div class="icons">
                    <button class="heart-btn fas fa-heart" ></button>
                    <button class="cart-btn"> Add to cart </button>
                    <a href="specificProduct.php?productId=<?= $row['productId']?>"  class="fas fa-angle-double-right"></a>
                    <!-- loadproductpage.php in href -->
                </div>
            </div>
            <div class="content">
                <h3><?= $row['productName'] ?></h3>
                <span class="price"> Rs <?= $row['productPrice'] ?></span>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <button class="right_button" ><i class="fa fa-chevron-right"></i></button>
    </div>
</section>

<section class="products chargers" id = "chargers">

    <h1 class="heading">Chargers <span></span> </h1>
      <div class="cover">
      <button class="left_button"><i class="fa fa-chevron-left"></i></button> 
         <div class="box-container" id="box-containerC">
 <?php
        $stmt=$conn->prepare("SELECT * FROM product WHERE productCategory LIKE 'C%' ORDER BY RAND()");
        $stmt-> execute();
        $result= $stmt->get_result();
        while($row=$result->fetch_assoc()):
        ?>
       <div class="box">
            <div class="image">
                <img class="product-image" src="<?= $row['productImage1'] ?>" alt="">
                <div class="icons">
                    <button class="heart-btn fas fa-heart" ></button>
                    <button class="cart-btn"> Add to cart </button>
                    <a href="specificProduct.php?productId=<?= $row['productId']?>"  class="fas fa-angle-double-right"></a>
                    <!-- loadproductpage.php in href -->
                </div>
            </div>
            <div class="content">
                <h3><?= $row['productName'] ?></h3>
                <!--<div class="price"> Rs2500 </div>-->
                <span class="price"> Rs <?= $row['productPrice'] ?></span>
            </div>
        </div>
        <?php endwhile; ?>
        </div>
      <button class="right_button" ><i class="fa fa-chevron-right"></i></button>
    </div>
</section>
          
    <section class="products other" id = "other">

    <h1 class="heading"> Other <span>Accessories</span> </h1>
      <div class="cover">
      <button class="left_button" ><i class="fa fa-chevron-left"></i></button> 
          <div class="box-container" id="box-containerO">
        <?php
         $stmt=$conn->prepare("SELECT * FROM product WHERE productCategory LIKE 'O%' ORDER BY RAND()");
         $stmt-> execute();
         $result= $stmt->get_result();
         while($row=$result->fetch_assoc()):
        ?>
       <div class="box">
            <div class="image">
                <img class="product-image" src="<?= $row['productImage1'] ?>" alt="">
                <div class="icons">
                    <button class="heart-btn fas fa-heart" ></button>
                    <button class="cart-btn"> Add to cart </button>
                    <a href="specificProduct.php?productId=<?= $row['productId']?>"  class="fas fa-angle-double-right"></a>
                    <!-- loadproductpage.php in href -->
                </div>
            </div>
            <div class="content">
                <h3><?= $row['productName'] ?></h3>
                <!--<div class="price"> Rs2500 </div>-->
                <span class="price"> Rs <?= $row['productPrice'] ?></span>
            </div>
        </div>
        <?php endwhile; ?>
      </div>
      <button class="right_button" ><i class="fa fa-chevron-right"></i></button>
    </div>
</section>
             
<!-- footer section starts  -->

    
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
             <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">mobileheaven@gmail.com</a>
            <a href="#">Port-Louis, Mauritius- 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> macadam </span> | all rights reserved </div>

</section>

<!-- footer section ends -->
        
       <script src="./js/shopcart.js"></script>
  <script src="./js/script.js"></script> 

    </body>
    
    