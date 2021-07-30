<?php
require_once("connection.php");
if(isset($_POST['insert']) )
{
if(empty($_POST['Name']) || empty($_POST['Email']) || empty($_POST['Age']))
{
    echo 'Please Fill in the Blanks';
}
else{
    $UserName = $_POST['Name'];
    $UserEmail = $_POST['Email'];
    $UserAge = $_POST['Age'];

    $query ="Insert into registrationform (User_Name,User_Email,User_Age) values('$UserName','$UserEmail','$UserAge')";
    $result = mysqli_query($con,$query);

    if($result)
    {
        header("location:view.php");
    }
    else{
        echo'Please Check Your Query';
    }
}
}
else
{
    header("location:index.php");
}
