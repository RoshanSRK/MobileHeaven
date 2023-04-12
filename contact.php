<?php
@include 'config.php';

  $name = mysqli_real_escape_string($conn, $_POST['userName']);
  $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
  $number = mysqli_real_escape_string($conn, $_POST['userNumber']);
  $message = mysqli_real_escape_string($conn, $_POST['userMessage']);
 
  $select = "SELECT * FROM contactform WHERE userEmail = '$email'";
  
  $result = mysqli_query($conn, $select);
  
  if(mysqli_num_rows($result) > 0 ){
  
  $error[] = 'User Already Exists';
  }
  else{
    $insert = "INSERT INTO contactform (userId, userName, userEmail, userPhone, userMessage) VALUES (NULL, '$name', '$email', '$number', '$message')";
   if (mysqli_query($conn, $insert)){
      header('Location: index.php');
   }
   else{
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
   }
  }
  mysqli_close($conn);
?>