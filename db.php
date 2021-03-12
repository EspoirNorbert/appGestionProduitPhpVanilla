<?php
$servername="localhost";
$username="root";
$passwd="";
$db="gestiondeproduits";
$connect=mysqli_connect($servername, $username, $passwd, $db);
 if(!$connect){
     die("connection failed:".mysqli_connect_error());
 }
?>