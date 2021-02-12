
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <link rel="stylesheet" href="./main.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php  include './links.php';
  include './db.php';


  ?>
    <title>Employee Schedule Application</title>
</head>

<body>

<?php

include './header.php';
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
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Your can not leave the fields blank(Non puoi lasciare i campi vuoti)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';  
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
else if(isset($_GET['dataSucess']) && $_GET['dataSucess'] == true){
    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Your data has been submitted sucessfully(i tuoi dati sono stati inviati con successo)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
function test_input($data) {
  $data = trim($data);
/*   $data = stripslashes($data); */
  $data = htmlspecialchars($data);
  return $data;
}

?>



<?php

error_reporting(0);
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
$idClient=$_SESSION['IdClient'];
echo '<div class="container-fluid hero my-auto">
<form  action= "" method="post">
    <div class="mx-auto form-group w-50">
        <label for="exampleInputdate" class="form-label">Data</label>
        <input type="date" name="date" class="form-control -w-25"/>
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputtime" class="form-label">Oraio di Inzio🕗
        </label>
        <input type="time" name="starting_time" class="form-control -w-25"/>
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputtime1" class="form-label">Oraio di Fine🕚
        </label>
        <input type="time" name="finishing_time" class="form-control -w-25"/>
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputpause" class="form-label">Pausa Pranzale 🥫
        </label>
        <input type="text" id="time" placeholder=" Type only Minutes(Minuti)"name="break_time" class="form-control -w-25" />
    </div>
    <div class="mx-auto form-group w-50">
        <label for="exampleInputpause" class="form-label">Ore Giornaliere(Working hours)⌛ 
        </label>
        <input type="numer" name="Working_hour" class="form-control -w-25" />
    </div>
    <div class="text-center my-3">
        <button type="submit" name="submit"class="btn btn-primary">Invia</button>
        <a class="text-light" href="./showInfo.php?idClient='.$_SESSION['IdClient'].'"><button type="button" class="btn btn-primary">Mostra Dati</button></a>
        </div>
        </form>
        </div>';
}
else{
    echo'
    <div class="container-fluid hero">
    <div class=" my-auto container info d-flex justigy-content-center align-items-center flex-column">
    <h5 class="text-light alert-heading display-4">Login In To Start(Accedere per inziare)!</h5>
    <p class="mb-0 text-dark para lead">Login first in order to save your daily job routine
    .Effettua prima il login per salvare la tua routine lavorativa quotidiana</p>
  </div>
  </div>';
}

?>




<!-- javscript link here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script>
    
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>
   
       <script>
           document.getElementById('time').addEventListener('blur',()=>{

            var time=document.getElementById('time').value;
           console.log(typeof(time));
            
            //Optional: Add leading zero's
          /*   if (minutes < 10)
                minutes = '0'+minutes;

            if (seconds < 10)
                seconds = '0'+seconds; */

            //Return the current minutes and seconds
          /*   var returnVa=minutes+':'+seconds;
            document.getElementById('time').value=returnVa; */
           

}
           )
       </script>
   
    
</body>

</html>