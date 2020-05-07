<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$user=$_SESSION["User_id"];
$old=$_POST["Password"];
$new=$_POST["New"];
if(isset($old))
{
    $sql="select * from user_master where User_id='$user' AND Password='$old'";
    $r=mysql_query($sql,$con);
    if(mysql_num_rows($r)==1)
    {
        $row=mysql_fetch_array($r);
        if($row["Password"]=="$old")
        {
            $mit="UPDATE `user_master` SET Password='$new' WHERE User_id='$user'";
            $result=mysql_query($mit,$con);
            echo "<script>alert('Password is successfully updated.');document.location='Profile.php';</script>";
        }
        else
        {
            echo "<script>alert('You have entered Wrong current password.Please Enter right password');document.location='Password_change.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('You have entered Wrong current password.Please Enter right password');document.location='Password_change.php';</script>";
    }
}