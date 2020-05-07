<?php
require ("PHPMailer/PHPMailerAutoload.php");
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Something went Wrong. Please Check your network connection.";
}
mysql_select_db("mindteaser",$con);

$Email_ID=$_POST['Email_ID'];

$select = "SELECT * FROM `user_master` WHERE Email_ID='$Email_ID'";

$r=mysql_query($select,$con);
if(mysql_num_rows($r)==1){

    $row=mysql_fetch_array($r);
    $rmail=$row['Email_ID'];
    $subject="Forget Password!";
    $message="Your Current Password is "."'".$row['Password']."' !";

    $mail = new PHPMailer();

    $mail->IsSMTP();

    $mail->SMTPDebug= 0;

    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;

    $mail->Username = "gmit816@gmail.com";
    $mail->Password = "mjg30061998";
    $mail->From = "gmit816@gmail.com";
    $mail->FromName = "Mit Gandhi";
    $mail->AddAddress($rmail);

    $mail->WordWrap = 128;
    $mail->IsHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if(!$mail->Send())
    {
        echo "<script>alert('Something Went Wrong during sending Mail. Please Try Again. $mail->ErrorInfo;');document.location='FPassword.php';</script>";
    }
    else{
        echo "<script>alert('Password is successfully Recovered, Please check Your registered Email Id.');document.location='LogIn.php';</script>";
    }
}
else{
    echo "<script>alert('Wrong Email_Id or Contact Number. Please Try Again. $mail->ErrorInfo;');document.location='FPassword.php';</script>";
}