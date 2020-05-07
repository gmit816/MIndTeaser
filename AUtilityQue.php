<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$Question=$_POST['Question'];
$Option1=$_POST['Option1'];
$Option2=$_POST['Option2'];
$Option3=$_POST['Option3'];
$Option4=$_POST['Option4'];
$Answer=$_POST['Answer'];
$Quiz_id=$_SESSION['Quiz_id'];
$sql="INSERT INTO `question_master`(`Question`, `Option1`, `Option2`, `Option3`,`Option4`,`Answer`,`Quiz_id`) VALUES ('$Question','$Option1','$Option2','$Option3','$Option4','$Answer','$Quiz_id')";
if(isset($_POST['save']))
{
    $r=mysql_query($sql,$con);
    if($r){
        unset($_SESSION["Quiz_id"]);
        echo "<script>alert('Your quiz has been saved.Please spread your Quiz id.');document.location='AQuiz_create.php';</script>";
    }
    else{
        echo"<script>alert('There is something wrong.Please try again.');document.location='AQuestion_create.php';</script>";
    }
}
elseif(isset($_POST['new']))
{
    $r=mysql_query($sql,$con);
    if($r){
        echo "<script>alert('Question successfully added in quiz!');document.location='AQuestion_create.php';</script>";
    }
    else{
        echo"<script>alert('There is something wrong.Please try again.');document.location='AQuestion_create.php';</script>";
    }
}
mysql_close($con);
?>