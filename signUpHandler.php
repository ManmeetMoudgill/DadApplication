<?php
include './db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $age=$_POST['age'];

    /* check whether the email is already exist */
    $sql="SELECT * FROM `employees` WHERE `email`='$email'";
    $result=mysqli_query($con,$sql);

    /* find the number of row of that particular email */
    $row=mysqli_num_rows($result);
    if($row>=1){
        header('Location:./index.php?failedSignup=true');
    }else{
        if($password==$cpassword){
            $passEncrypted=password_hash($password,PASSWORD_BCRYPT);
            $sqlQuery="INSERT INTO `employees`(`name`, `surname`, `email`, `age`, `Payment_Per_Hour`, `password`) VALUES ('$name','$surname','$email','$age',5,'$passEncrypted')";
            $RESULT=mysqli_query($con,$sqlQuery);
            if($RESULT){
                header('Location:./index.php?Signup=true');
                exit();
            }else{
                ?>
                <script>
                    alert('Alert something went wrong');
                </script> 
            <?php 
                header('Location:./index.php');
            }

        }else{
            header('Location:./index.php?passwordWrong=true');
        }
    }
   

}





?>