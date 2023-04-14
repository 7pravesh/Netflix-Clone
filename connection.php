<?php 
  $con=mysqli_connect("localhost" , "root" , "" , "netflix_clone");

  if(mysqli_connect_error())
  {
    echo"<script>alert('Cannot Connect to the DataBase');</script>";
    exit();
  }
?>

<?php
