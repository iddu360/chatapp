<?php

$conn=mysqli_connect("localhost","root","lonewolffe","chat");
if(!$conn){
  echo "Database connected" . mysqli_connect_error();
}

?>