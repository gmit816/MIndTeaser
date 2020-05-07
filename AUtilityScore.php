<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$Quiz_id=$_SESSION["Quiz_id"];
$User_id=$_SESSION["User_id"];
//$Answer=$_SESSION["Answer"];
//$Option=$_SESSION[""]
//if()
$score=0;
$c = $_POST['question_count'];
for($i=1; $i<$c; $i++){
    $key = "Question".$i;
    $answer = $_POST[$key];
    if($answer==$_SESSION["Answer".$i]){
        $score=$score+4;
    }
}
$sql="INSERT INTO `quiz_played`(`Quiz_id`, `User_id`, `Score`) VALUES ('$Quiz_id','$User_id','$score')";
$r=mysql_query($sql,$con);
if($r){
    unset($_SESSION["Quiz_id"]);
    echo "<script>alert('Congratulations! You have scored $score.');document.location='ADashboard.php';</script>";
}else{
    echo"<script>alert('Something Went Wrong.Please Try again');document.location='AQuiz_play.php';</script>";
}