<?php
  include_once 'connect.php';
  if(isset($_POST["submit"])){
      $email = $_POST['email'];


     $sql = "INSERT INTO subs_email(Email)
             VALUES('$email')";
  }
  $res = $conn->query($sql);


?>