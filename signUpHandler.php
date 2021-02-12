<?php
include './db.php';
$nameErr = $surnameErr = $emailErr = $passwordErr = $cpasswordEr= "";
$ageErr="";
if($_SERVER['REQUEST_METHOD']=='POST'){

    /* Name Required Verification */
    if(empty($_POST['name'])){
        echo $nameErr="Name is not mentioned please Enter the Name";
    }else{
        $name=test_input($_POST['name']);
    }

    /* Surname required verfication */
    if(empty($_POST['surname'])){
        echo $surnameErr="Surname is not mentioned please Enter the Surname";
    }else{
        $surname=test_input($_POST['surname']);
    }


    /* email required verfication */
    if(empty($_POST['email'])){
        echo $emailErr="Email is not mentioned please enter the email";
    }else{
        $email=test_input($_POST['email']);
    }

    /* password required verfication */
    if(empty($_POST['password'])){
        echo $passwordErr="Password is not mentioned please enter the password";
    }else{
        $password=test_input($_POST['password']);
    }


    /* cpassword required verfication */
    if(empty($_POST['cpassword'])){
        echo $cpasswordEr="Confirm Password is not mentioned please Enter the Confirm Password";
    }else{
        $cpassword=test_input($_POST['cpassword']);
    }
    /* email required verfication */
    if(empty($_POST['age'])){
        echo $ageErr="Age is not mentioned please Enter the Age";
    }else{
        $age=test_input($_POST['age']);
    }
    
   
    
    
    

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
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>