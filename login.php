<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: logpage.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/formstyle.css">
  </head>
  <body>
    <div class = "center">
      <a href="index.php" class="	fas fa-arrow-left"> </a>
    <h2>Login</h2
    
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" class= "button"onclick="submitData();">Login</button>
    </form>
    
    <br>
    <br>
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
    </div>
    
  </body>
</html>