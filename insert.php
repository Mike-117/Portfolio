<?php

    $servername='localhost';
    $username='mike117_mm';
    $password='N${XRA]{r%p!';
    $dbname = "mike117_contacts";
    $con=mysqli_connect($servername,$username,$password,$dbname);
      if(!$con){
          echo ('Could not Connect MySql Server:' .mysql_error());
        }


     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $message = $_POST['message'];
 
     $sql = "INSERT INTO Contacts (name,phone,email,message)
     VALUES ('$name','$phone','$email','$message')";
 
     
     if (!mysqli_query($con, $sql)) {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     } else {
        echo "Thank you for your submission!";
     }
     mysqli_close($con);
    
?>