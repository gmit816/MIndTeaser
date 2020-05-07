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
    $_SESSION["Quiz_id"]=$Quiz;
    header("location: AQuiz_view.php");
}
else
{
    unset($_SESSION["Quiz_id"]);
    echo"<script>alert('No such Quiz is there.Please try again to view another quizzes.');document.location='AQuiz_view.php';</script>";
}
mysql_close($con);
?>