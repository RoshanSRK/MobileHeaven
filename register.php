<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/formstyle.css">
  </head>
  <body>
    <div class = "center">
      <a href="index.php" class="	fas fa-arrow-left"> </a>
    <h2>Register</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" class = "button" onclick="submitData();">Register</button>
    </form>
    <br>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
    </div>
  </body>
</html>
