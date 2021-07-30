<?php
require_once("connection.php");

if(isset($_POST['update']) )
{
    $UserID = $_GET['ID'];
    $UserName = $_POST['Name'];
    $UserEmail = $_POST['Email'];
    $UserAge = $_POST['Age'];
$query = "update registrationform set User_Name ='".$UserName."',User_Email ='".$UserEmail."',User_Age ='".$UserAge."' where UserID='".$UserID."'";
$result = mysqli_query($con, $query);

if($result)
    {
        header("location:updated.php");
    }
    else{
        echo'Please Check Your Query'; 
    }
}

    
else
{
    header("location:index.php");
}
