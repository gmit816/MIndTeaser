<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$m=$_SESSION['Quiz_id'];
$delete="DELETE FROM `quiz_master` WHERE Quiz_id='$m'";
$del="DELETE FROM `quiz_played` WHERE Quiz_id='$m'";
$d="DELETE FROM `question_master` WHERE Quiz_id='$m'";
$res=mysql_query($del,$con);
$result=mysql_query($d,$con);
$r=mysql_query($delete,$con);
unset($_SESSION['Quiz_id']);
echo "<script>alert('All data of Quiz deleted');document.location='Quiz_view.php';</script>";
