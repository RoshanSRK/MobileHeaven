<?php
include 'config.php';
	$productId=$_POST['productId'];
	$sid=$_POST['sid'];
	$quantity=$_POST['quantity'];
	$sql = "INSERT INTO shoppingCart(productId, sid, quantity) 
	VALUES ('productId','$sid','$quantity')
	ON DUPLICATE KEY UPDATE quantity VALUES('quantity')";
	mysqli_query($conn, $sql);
?>