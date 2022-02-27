<?php 
 $conn = new mysqli('localhost','root','','Health Revive');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 }
?>