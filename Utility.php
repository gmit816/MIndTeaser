<?php
    $con=mysql_connect("localhost","root","");
    if(!$con)
    {
        echo "Not Connected";
    }
    mysql_select_db("mindteaser",$con);
    $First_name=$_POST['First_name'];
    $Last_name=$_POST['Last_name'];
    $Email_ID=$_POST['Email_ID'];
    $Password=$_POST['Password'];
    $sql="INSERT INTO `user_master`(`First_name`, `Last_name`, `Email_ID`, `Password`) VALUES ('$First_name','$Last_name','$Email_ID','$Password')";
    $r=mysql_query($sql,$con);
    if($r){
        echo "<script>alert('Welcome to MindTeaser! Please proceed for Log In.');document.location='index.php';</script>";
    }
    else{
        echo"<script>alert('You are alreay Regisered! Please proceed for Log In.');document.location='index.php';</script>";
    }
    mysql_close($con);
?>