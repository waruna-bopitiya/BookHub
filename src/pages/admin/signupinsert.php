<?php
if(isset($_POST["submit"])){

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $number=["number"];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $rpwd=$_POST['rpwd'];

    require_once 'config.php';

    $emptyInput=emptyInputSignup($fname,$lname,$number,$email,$pwd);
    $invalidUfname=invalidUfname($fname);
    $invalidUlname=invalidUlname($lname);
    $invalidUno=invalidUno($number);
    $invalidUemail=invalidUemail($email);
    $pwdMatch=pwdMatch($pwd,$rpwd);
    $uidExists=uidExists($conn,$username,$email);


    if($emptyInput != false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if($invalidUfname != false){
        header("Location:../signup.php?error=invalidUfname");
        exit();
    }
    if($invalidUlname != false){
        header("Location:../signup.php?error=invalidUlname");
        exit();
    }
    if($invalidUno != false){
        header("Location:../signup.php?error=$invalidUno");
        exit();
    }
    
    if($invalidUemail != false){
        header("Location:../signup.php?error=email taken");
        exit();
    }
    if($pwdMatch != false){
        header("Location:../signup.php?error=password don't match");
        exit();
    }
    LoginUser($email,$pwd);
}
else{
    header('Location:..'/login.php);
    exit();
}
