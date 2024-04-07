<?php

$conn=mysqli_connect("localhost","root","lonewolffe","chat_db");
if(!$conn){
  echo "Database connected" . mysqli_connect_error();
}

?>