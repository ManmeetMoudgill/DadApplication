<?php
session_start();
include './db.php';

  if($_SERVER['REQUEST_METHOD']=='POST'){
  
      $date=test_input($_POST['date']);
      $starting_time=test_input($_POST['starting_time']);
      $finishing_time=test_input($_POST['finishing_time']);
      $break_time=test_input($_POST['break_time']);
      $Working_hour=test_input($_POST['Working_hour']);
      $idClient=$_SESSION['IdClient'];
  
 /*    error_reporting(0); */
 if($date=="" && $starting_time=="" && $finishing_time=="" && $break_time=="" && $Working_hour==""){
    header('Location:./index.php?idClient='.$idClient.'&fillBlanks=True');
 }else{
    $sql="INSERT INTO `schedules`(`Date`, `Starting_Time`, `Finsihing_Time`, `Pause_Minutes`, `Working_hourDay`, `Id_Employe`) VALUES ('$date','$starting_time','$finishing_time','$break_time','$Working_hour','$idClient')";
      $result=mysqli_query($con,$sql);
      if($result){
        echo 'Data Inserted Successfully';
        header('Location:./index.php?dataSucess=true'); 
      }else{
          echo 'Error occured';
      }
    }

}
function test_input($data) {
  $data = trim($data);
/*   $data = stripslashes($data); */
  $data = htmlspecialchars($data);
  return $data;
}
?>