<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$selectmit = "SELECT * FROM `quiz_master` WHERE Quiz_id='{$_POST["Quiz_id"]}' AND Quiz_owner='{$_SESSION["User_id"]}'";
if(mysql_num_rows(mysql_query($selectmit)) == 1){
    echo "<script>alert('You can not play quizzes created by you.');document.location='Quiz_play.php';</script>";
}
else{
$_SESSION["Quiz_id"]=$_POST['Quiz_id'];
header("location: Quiz_play.php");
}
mysql_close($con);
?>