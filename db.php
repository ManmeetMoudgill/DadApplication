<?php
$server="localhost";
$user="root";
$password="";
$db="clientinformation";

/* connecting to the database */
$con=mysqli_connect($server,$user,$password,$db);
if(!$con){
    echo 'something went wrong';
}



?>