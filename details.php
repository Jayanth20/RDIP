<?php
  include('details.html');
  $name=$_GET['firstname'];
  $email=$_GET['email'];
  $phone=$_GET['phone'];
  $gender=$_GET['gender'];
  $reason=$_GET['reason'];
  $college=$_GET['college'];
  $declaration=$_GET['declaration'];
  echo "Name: $name<br>";
  echo "E-Mail: $email<br>";
  echo "Phone No: $phone<br>";
  echo "Gender: $gender<br>";
  //echo "Reason for RDIP: $reason<br>";
  echo "Reason: ";
  foreach($_GET['reason'] as $selected){
    echo $selected.", ";
  }
  echo "<br>College: $college<br>";
?>
