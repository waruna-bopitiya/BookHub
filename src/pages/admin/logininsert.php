<?php
if(isset($_POST["submit"])){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    require_once 'config.php';

    if(emptyInputLogin($email,$pwd)!=false){
        exit();
    }
    LoginUser($email,$pwd);
}
else{
    header('Location:..'/login.php);
    exit();
}
