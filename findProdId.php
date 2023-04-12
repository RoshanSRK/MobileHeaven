<?php
include 'config.php';
$productImage=$_POST['productImage'];
$sql = "SELECT producId FROM product WHERE productImage1 = '$productImage'"
$execprod=mysqli_query($conn, $prodQuery);
$rowProd= $execprod->fetch_assoc();
$prodId = $rowProd["productID"];
echo $prodId;
?>