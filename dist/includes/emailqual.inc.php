<?php

//Import packages
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader

if(isset($_POST['email-submit'])){
    require 'dbh.inc.php';
    $email = $_POST['email'];
    $extension = '@govsacademy.org';
    if(strpos($email, $extension)){
        $sql = "SELECT * FROM users WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../emailqual.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt , "s", $email);
            mysqli_stmt_execute($stmt); 
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                if($email == $row['emailUsers']){
                    header("Location: ../emailqual.php?error=emailexist&email=".$email); 
                    exit();
            }} else {
                    $noreplymail = 'ckrandomemail@gmail.com';
                    $noreplypwd = 'testphpemail';
                    $vkey = md5(time() .$email);
                    $sql = "INSERT INTO users (emailUsers, vkey) VALUES (? , ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../emailqual.php?error=sqlerror");
                        exit();
                    }
                    mysqli_stmt_bind_param($stmt, "ss", $email, $vkey);
                    mysqli_stmt_execute($stmt);
                    require_once('vendor/autoload.php');
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'ssl';
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 465;
                    $mail->isHTML();
                    $mail->Username = $noreplymail;
                    $mail->Password = $noreplypwd;
                    $mail->setFrom('no-reply@govstrade.org', 'Govs Trade');
                    $mail->Subject = 'Verify Your Email Address';
                    $mail->Body = "<p>Thank you for registering your acconunt. In order to proceed, please verify your account <a href='localhost/Govs_Trade/dist/includes/verify.php?vkey=$vkey'>here</a>.</p>\n\n<p><b>Important Notice</b/>:<p>\n\n<p>If you never register for Govs Trade, <b>DO NOT</b> authorize this verification. Instead simply <i>ignore</i> and <i>delete</i> this email</p>\n\n\n <p>Thank you,\n From team Govs Trade</p>";
                    $mail->AddAddress(strval($email));
                    $mail->Send();
                    header("Location: ../emailqual.php?signup=success"); //Finally successfully signed up a new user and adds a row to the database
                    exit();
                
            }
        }

    } else{
        header("Location: ../emailqual.php?qualification=success");
        exit();
    }
} else{
    header("Location: ../emailqual.php");
    exit();
}