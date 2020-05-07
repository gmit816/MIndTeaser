<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$_SESSION["Quiz_id"]=$_POST['Quiz_id'];
header("location: AQuiz_play.php");
mysql_close($con);
?>