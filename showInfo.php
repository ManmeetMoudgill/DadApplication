<?php
include './db.php';
session_start();
$idClient=$_SESSION['IdClient'];

$sql="SELECT * FROM `schedules` WHERE `Id_Employe`='$idClient'";
$result=mysqli_query($con,$sql);
$i=1;
while($data=mysqli_fetch_assoc($result)){
    echo $i.' Date is '.$data['Date'].' Employe Starting Time '.$data['Starting_Time'].' Employe Finishing Time '.$data['Finsihing_Time'].' Employe Pause Time Minutes '.$data['Pause_Minutes'].' Employe Working Hour per Day '.$data['Working_hourDay']."<br>";
    $i++;
}

?>