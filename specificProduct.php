<?php
    include 'config.php';
    session_start();
    $_SESSION['productId'] = $_GET['productId'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Heaven</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/protostyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts  -->

<header>

<div class="icons">
    <a href="ProductsPage.php" class="	fas fa-arrow-left" id="back"> </a>
   </div>
    <a href="home.html" class="logo">Mobile Heaven</a>

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
<main>
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

<section class ="prod">
<?php
        $x = $_SESSION['productId'];
        $stmt=$conn->prepare("SELECT * FROM product WHERE productId = $x LIMIT 1" );
        $stmt-> execute();
        $result= $stmt->get_result();
        $row = $result -> fetch_assoc();
        ?>
      <div class="slider">
        <span id="slide-1"></span>
        <span id="slide-2"></span>
        <span id="slide-3"></span>
        <div class="image-container">
          <img id = "image1" src="<?= $row['productImage1'] ?>" class="slide" width="300" height="300" />
          <img src="<?= $row['productImage2'] ?>" class="slide" width="300" height="300" />
          <img src="<?= $row['productImage3'] ?>" class="slide" width="300" height="300" />
        </div>
        <div class="buttons">
          <a href="#slide-1"></a>
          <a href="#slide-2"></a>
          <a href="#slide-3"></a>
        </div>
    </div>
      <div class = "container-details">
          <h1><?= $row['productName'] ?></h1><p>NUMBER IN STOCK: <?= $row['qtyInStock'] ?></p>
          <span class="price"> Rs <?= $row['productPrice'] ?></span>
          <button class = "cart-btn button1" id = "cart-btn"> Add to Cart</button>
      </div>
  </section>

<section class = "knowMore" id="knowMore">
      <h2>Know More</h2>
      <p><?= $row['productDesc'] ?></p>
</section>
    
</main>
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
            <a href="#" class = "no_capitalise" >mobileheaven@gmail.com</a>
            <a href="#">Port-Louis, Mauritius- 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> macadam </span> | all rights reserved </div>

</section>

<!-- footer section ends --> 
  <script src="./js/protoShoppingCart.js"></script>
  <script src="./js/script.js"></script> 
</body>
</html>