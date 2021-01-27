
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Employee Inoformation 💁 </title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Date</th>
      <th scope="col">Employe Starting Time</th>
      <th scope="col">Employe Finishing Time</th>
      <th scope="col">Employe Pause Time Minutes</th>
      <th scope="col">Employe Working Hour Per Day</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include './db.php';
    session_start();
    $idClient=$_SESSION['IdClient'];

    $sql="SELECT * FROM `schedules` WHERE `Id_Employe`='$idClient'";
    $result=mysqli_query($con,$sql);
    $i=1;
    while($data=mysqli_fetch_assoc($result)){
        $date=$data['Date'];
        $starting_time=$data['Starting_Time'];
        $finishing_time=$data['Finsihing_Time'];
        $pause_time=$data['Pause_Minutes'];
        $working_hourDay=$data['Working_hourDay'];

        echo '<tr>
        <th scope="row">'.$i.'</th>
        <td>'.$date.'</td>
        <td>'.$starting_time.'</td>
        <td>'.$finishing_time.'</td>
        <td>'.$pause_time.'</td>
        <td>'.$working_hourDay.'</td>
      </tr>';
     $i++;
    }
    
?>
<a class="text-light" href="./index.php"><button class="btn btn-primary">Torna Indietro(Go Back)</button></a>
    
  </tbody>
</table>


  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>



