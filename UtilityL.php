<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$Email_ID=$_POST['Email_ID'];
$Password=$_POST['Password'];
if(isset($Email_ID) && isset($Password))
{
    $sql="select * from user_master where Email_ID='$Email_ID' and Password='$Password'";
    $r=mysql_query($sql,$con);
    if(mysql_num_rows($r)==1)
    {
        $row=mysql_fetch_array($r);
        session_start();
        $_SESSION["User_id"]= $row["User_id"];
        $_SESSION["First_name"] = $row["First_name"];
        $_SESSION["Email_ID"] = $row["Email_ID"];
        if($row["Email_ID"]=="admin@mindteaser.com" and $row["Password"]=="admin123")
        {
        header("location: ADashboard.php");
        }
        else
        {
            header("location: Dashboard.php");
        }
    }
    else
    {
        echo "<script>alert('Wrong Email_ID or Password.Please try Again');document.location='LogIn.php';</script>";
    }
}