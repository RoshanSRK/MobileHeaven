<?php

$conn = mysqli_connect('localhost', 'root', '', 'mobileheaven');
function fetch_data(){
 $y = $_SESSION['sid'];
  $query="SELECT * FROM product p WHERE p.productId IN (SELECT c.productId from shoppingcart c, shoppingsession s WHERE c.sessionId = s.sessionId AND s.sid = $y)";
  $exec=mysqli_query($conn, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;         
  }else{
    return $row=[];
  }
}

function show_data($fetchData){
      
 if(count($fetchData)>0){
      foreach($fetchData as $data){ 
  $imageSrc = $data['productImage1'];
  $price = $data['productPrice'];
  echo `<div class='product-row'>
        <img class='cart-image' src='$imageSrc' >
        <span class ='cart-price'>$price</span>
        <input class='product-quantity' type='number' value='1'>
        <button class='remove-btn'>Remove</button>
        </div>`;
   }
}
}
?>