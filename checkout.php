<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $expMonth = $_POST['expMonth'];
    $expYear = $_POST['expYear'];
    $cvv = $_POST['cvv'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "payment";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }
   $sql = "INSERT INTO paymentdetails ( Name, Email, Address, City, Country, ZipCode, NameOnCard, CreditCardNumber, ExpMonth, ExpYear, CVV)
   VALUES('$name','$email','$address','$city', '$country', '$zip','$cardName','$cardNumber','$expMonth','$expYear', '$cvv' )";
   // Return a success message to the client
   mysqli_query($conn, $sql); 
   $response = array(
        'status' => 'success',
        'message' => 'Payment successful'
    );
  }
  echo json_encode($response);
  mysqli_close($conn);
  ?>

