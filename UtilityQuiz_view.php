<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$Quiz=$_POST['Quiz_id'];
$user=$_SESSION['User_id'];
$sql="SELECT * FROM `quiz_master` WHERE Quiz_id='$Quiz'";
$r=mysql_query($sql,$con);
if(mysql_num_rows($r)==1)
{
    $row=mysql_fetch_array($r);
    if($row["Quiz_owner"] == $user)
    {
    $_SESSION["Quiz_id"]=$Quiz;
    header("location: Quiz_view.php");
    }
    else
    {
        echo"<script>alert('You are not authorized to view this quiz.Please try to view quizzes only created by you.');document.location='Quiz_view.php';</script>";
    }
}
else
{
    echo"<script>alert('No such Quiz is there.Please try again to view another quizzes.');document.location='Quiz_view.php';</script>";
}
mysql_close($con);
?>