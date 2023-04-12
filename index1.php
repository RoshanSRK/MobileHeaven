<?php
    include 'config.php';
    session_start();
    if(isset($_SESSION['sid']))
$_SESSION['sid'] = $_SESSION['sid']+ 1;
else
$_SESSION['sid'] = 1;
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts  -->

<header>

    <!-- <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>-->

    <a href="#" class="logo">Mobile Heaven<span></span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#contact">contact</a>
        <a href="#newsletter">newsletter</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart" id="wishlist"><span class ="wishlist-quantity">0</span></a>
        <a href="#" class="fas fa-shopping-cart" id="toggle-cart"><span class ="cart-quantity">0</span></a>  
        <!--<a href="#" class="fas fa-user" onclick="document.getElementById('id01').style.display='block'"></a> -->
        <div class = "dropdown">                                <!--------------------------------> 
        <a href="#" class="fas fa-user"></a>
            <div class = "dropdown-content">
              <a href = "login.php">Login</a>
              <a href = "register.php">Register</a>
            </div>
        </div>
    </div>
  
</header>
<main>
  
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Mobile Phone Accessories</h3>
        <span> From Screen Protectors to Headphones </span>
        <p>You Need it. We Have it.</p>
        <a href="#" class="btn" onclick="window.location.href = 'ProductsPage.html';">shop now</a>    <!--<button class="button button1" onclick="window.location.href = 'ProductsPage.html';">Browse Products</button> -->
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->
<section class="review" id="about">

<h1 class="heading"> About <span>Us</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="user">
            <img src="images/ashfaaq.png" alt="">
            <div class="user-info">
                <h3>Ashfaaq Eathally</h3>
                <span>Web Developer</span>
                <p>ID: 2111078</p>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/sarah.png" alt="">
            <div class="user-info">
                <h3>Anne Sarah Sadien</h3>
                 <span>Web Developer</span>
                <p>ID: 2110188</p>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="user">
            <img src="images/alisha.png" alt="">
            <div class="user-info">
                <h3>Alisha Curpen</h3>
                 <span>Web Developer</span>
                <p>ID: 2114024</p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="user">
            <img src="images/roshan.png" alt="">
            <div class="user-info">
                <h3>Roshan Sunt Rizvan Kokil</h3>
                 <span>Web Developer</span>
                <p>ID: 2111113</p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="user">
            <img src="images/zohra.png" alt="">
            <div class="user-info">
                <h3>Zohra Malika Magho</h3>
                 <span>Web Developer</span>
                <p>ID: 2111914</p>
            </div>
        </div>
    </div>
</div>
    
</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure payments</h3>
            <span>protected by paypal</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>
    <button class="button button1" onclick="window.location.href = 'ProductsPage.php';">Browse Products</button>
  
    <div class="box-container">
      <?php
        $stmt=$conn->prepare("SELECT * FROM product ORDER BY RAND() LIMIT 6");
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
                <!--<div class="price"> Rs2500 </div>-->
                <span class="price"> Rs <?= $row['productPrice'] ?></span>
            </div>
        </div>
        <?php endwhile; ?>
</section>

<!-- prodcuts section ends -->

<!-- contact section starts  -->
<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">
        <form action = "contact.php" method="POST">
            <input type="text" placeholder="Name" name="userName" class="box">
            <input type="email" placeholder="Email" name= "userEmail" class="box">
            <input type="tel" placeholder="Phone Number" name="userNumber" class="box" pattern="5[0-9]{7}" required>
            <textarea  class="box" placeholder="Message"  name= "userMessage" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/new.jpg" alt="">
        </div>

    </div>
</section>
<!-- contact section ends  -->

<!-- newsletter section starts  -->
<section class="newsletter" id="newsletter">
    <h1 class="heading"><span>News</span>Letter</h1>
    <div class="row">
           <form action="newsletter.php" method= "POST">
            <div class ="container">
                  <h2>Subscribe to our Newsletter</h2>
            </div>
            <div class="container" style="background-color:white">
              <input type="text" placeholder="Enter name" name="nameN" class="box" required>
              <input type="text" placeholder="Enter email" name="emailN" class="box" required>
              <label>
                <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
              </label>
           </div>
          <div class="container">
            <input type="submit" value="Subscribe" class="btn">
          </div>
        </form>
    </div>
    
</section>

<!-- newsletter section ends -->
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

       <!-- <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div> -->

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
</html>