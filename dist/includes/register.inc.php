<?php

if(isset($_POST['signup-submit'])){
    require "dbh.inc.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $passwordRepeat = $_POST['confirmPassword'];
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
       header("Location: ../register.php?error=invaliduid");
       exit();
    }
    else if ($password != $passwordRepeat){
        header("Location: ../register.php?error=passwordnotmatch");
        exit();
    }
    else if (strlen(strval($username)) < 8){
        header("Location: ../register.php?error=uidtooshort");
        exit();
    }
    else if (strlen(strval($password)) < 8){
        header("Location: ../register.php?error=weakpass");
        exit();
    }
    else{
        #If user or email taken, hash pass, insert info to database safely using prepared statement
        #direct to login screen with success 
        #Future implementation: Email verification (vkey, etc), captcha, terms and condition
    }
}