<?php
session_start();
include './db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $date=$_POST['date'];
    $starting_time=$_POST['starting_time'];
    $finishing_time=$_POST['finishing_time'];
    $break_time=$_POST['break_time'];
    $Working_hour=$_POST['Working_hour'];
    $idClient=$_SESSION['IdClient'];
  
 /*    error_reporting(0); */
    $sql="INSERT INTO `schedules`(`Date`, `Starting_Time`, `Finsihing_Time`, `Pause_Minutes`, `Working_hourDay`, `Id_Employe`) VALUES ('$date','$starting_time','$finishing_time','$break_time','$Working_hour','$idClient')";
      $result=mysqli_query($con,$sql);
      if($result){
        echo 'Data Inserted Successfully';
        header('Location:./index.php?dataSucess'); 
      }else{
          echo 'Error occured';
      }

}

?>