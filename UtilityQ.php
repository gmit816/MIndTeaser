<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$Quiz_name=$_POST['Quiz_name'];
$Quiz_owner=$_SESSION['User_id'];
$sql="INSERT INTO `quiz_master`(`Quiz_name`, `Quiz_owner`) VALUES ('$Quiz_name','$Quiz_owner')";
$r=mysql_query($sql,$con);
if($r){
    echo "<script>alert('Quiz successfully created!');document.location='Quiz_Dashboard.php';</script>";
}
else{
    echo"<script>alert('Something went wrong.Please try again.');document.location='Quiz_create.php';</script>";
}
$sql="select * from quiz_master where Quiz_name='$Quiz_name' and Quiz_owner='$Quiz_owner'";
$r=mysql_query($sql,$con);
if(mysql_num_rows($r)==1) {
    $row = mysql_fetch_array($r);
    $_SESSION["Quiz_id"] = $row["Quiz_id"];
}
mysql_close($con);
?>