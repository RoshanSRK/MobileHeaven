<?php
@include 'config.php';

  $name = mysqli_real_escape_string($conn, $_POST['nameN']);
  $email = mysqli_real_escape_string($conn, $_POST['emailN']);
 
  $select = "SELECT * FROM newsletterform WHERE emailN = '$email' ";
  
  $result = mysqli_query($conn, $select);
  
  if(mysqli_num_rows($result) > 0 ){
  
  $error[] = 'User Already Exists';
}
  else{
    $insert = "INSERT INTO newsletterform (newsletterId, nameN, emailN) VALUES (NULL, '$name', '$email')";
   if (mysqli_query($conn, $insert)){
      header('Location: home.html');
   }
   else{
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
   }
  }

mysqli_close($conn);

?>