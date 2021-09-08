<?php
  include_once 'connect.php';
  if(isset($_POST['submit']))
  {
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $email = $_POST['mail'];
    $contact = $_POST['c_no'];
    $blood = $_POST['blood_g'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];
    $b_date = $_POST['join'];

    $sql = "INSERT INTO vol_prac(first_name,last_name,email,contact,blood,gender,branch,join_date,birth_date)
    VALUES('$f_name','$l_name','$email','$contact','$blood','$gender','$branch',CURDATE(),'$b_date')";

$result = $conn->query($sql);
header ("Location: vol_input.html");

  }
?>