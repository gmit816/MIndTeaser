<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "Not Connected";
}
mysql_select_db("mindteaser",$con);
$Email_ID=$_SESSION['Email_ID'];
$Subject=$_POST['Subject'];
$Feedback=$_POST['Feedback'];
$sql="INSERT INTO `feedback_master`(`Email_ID`,`Subject`,`Feedback`) VALUES ('$Email_ID','$Subject','$Feedback')";
$r=mysql_query($sql,$con);
if($r){
    echo "<script>alert('Thanks for contacting us.We will solve your problem soon and let you know by email.');document.location='Dashboard.php';</script>";
}
else{
    echo"<script>alert('There is a problem while contacting us.Please try again.');</script>";
    header("location:Contact.php");

}
mysql_close($con);
?>