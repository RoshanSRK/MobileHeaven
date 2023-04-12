<?php
@include 'config.php';


  
  $name = mysqli_real_escape_string($conn, $_POST['userName']);
  $pass = md5($_POST['userPassword']);
  $rpass = md5($_POST['userRepeatpassword']);
  $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
  
 
  $select = "SELECT * FROM newuser WHERE userEmail = '$email' && userPassword = '$pass'";
  
  $result = mysqli_query($conn, $select);
  
  if(mysqli_num_rows($result) > 0 ){
  
  $error[] = 'User Already Exists';
}

  if($pass != $rpass){
    echo 'password not matched';
    
  }
  
  else{
    $insert = "INSERT INTO newuser (userId, userName, userPassword, userEmail) VALUES (NULL, '$name', '$pass', '$email')";
   if (mysqli_query($conn, $insert)){
      echo "New record created successfully";
    
   }
   else{
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
   }
  }

mysqli_close($conn);

?>