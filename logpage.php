<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="css/formstyle.css">
  </head>
  <body>
    
    <div class = "welcome">
      <h1>Welcome <?php echo $user["name"]; ?>!</h1>
      <div>
         <a href="logout.php">Logout</a>
         <a href="index.php">Continue to Browse</a>
      </div>
    </div>
  </body>
</html>
