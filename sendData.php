<?php
session_start();
include './db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $date=$_POST['date'];
    $starting_time=$_POST['starting_time'];
    $finishing_time=$_POST['finishing_time'];
    $break_time=$_POST['break_time'];
    $payment_per_day=$_POST['payment_per_day'];
    $idClient=$_SESSION['IdClient'];
    $time1 = strtotime($starting_time);
    $time2= strtotime($finishing_time);

    $hours = ($time2 - $time1)/3600; 
    $workingHours= floor($hours) . ':' . (($hours-floor($hours))* 60);
    echo var_dump($workingHours);
    error_reporting(0);

    switch ($break_time) {
        case $break_time==15:
            $workingHours=$workingHours-0.25;
            break;
        case $break_time==30:
            $workingHours=$workingHours-0.50;
            break;
        case $break_time==60:
            $workingHours=$workingHours-1.0;
            
            break;    
        default:
             header('Location:./index.php?pausaDurataFailed=true');
      }
     
    /*   $sql="INSERT INTO `schedules`(`Date`, `Starting_Time`, `Finsihing_Time`, `Payment_Per_Day`, `Pause_Minutes`, `Working_hourDay`, `Id_Employe`) VALUES ('$date','$starting_time','$finishing_time','$payment_per_day','$break_time','$workingHours','$idClient')";
      $result=mysqli_query($con,$sql);
      if($result){
        echo 'Data Inserted Successfully';
        header('Location:./index.php?pausaDurataFailed=true'); 
      }else{
          echo 'Error occured';
      }  */

}

?>