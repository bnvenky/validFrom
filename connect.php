<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $working = $_POST['working'];
   $gender = $_POST['gender'];
   
   //Database connection
   $conn = new mysqli("localhost","root","","username");
   if($conn->connect_error){
      echo "Failed to connect DB".$conn->connect_error;
   }else{
     $stmt = $conn->prepare("insert into registration(name, email, working, gender) 
        values(?,?,?,?)");
      $stmt->bind_param("ssss",$name, $email, $working, $gender);
      $stmt->execute();
      echo "registration Succeccfully...";
      $stmt->close();
      $conn->close();
   }
?>
