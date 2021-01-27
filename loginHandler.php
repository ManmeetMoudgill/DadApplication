<?php
include './db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password1=$_POST['password'];

    
    /* check whether the email is there is database */
    $sql1="SELECT * FROM `employees` WHERE `email`='$email'";
    $result1=mysqli_query($con,$sql1);

    /* check the number of rows */
    $num_row=mysqli_num_rows($result1);
    if($num_row==1){
        $dataFromDB=mysqli_fetch_assoc($result1); 
        $idClient=$dataFromDB['idEmployee'];
        if(password_verify($password1,$dataFromDB['password'])){
            session_start();
            $_SESSION['username']=$dataFromDB['name'] . $dataFromDB['surname'];
            $_SESSION['loggedIn']=true;
            $_SESSION['IdClient']=$idClient;
            header('Location:./index.php?logIN=true&idClient='.$idClient);
        }else{
        
           header('Location:./index.php?passwordWrongDB=true');
        }
    }else{
        header('Location:./index.php?signUpFirst=true');
    }
}





?>