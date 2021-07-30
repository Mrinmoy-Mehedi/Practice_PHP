<?php
require_once("connection.php");

if(isset($_GET['Del']) )
{
    $UserID = $_GET['Del'];
$query = "delete from registrationform where UserID='".$UserID."'";
$result = mysqli_query($con, $query);
if($result)
{
        header("location:index.php");
    }
    else{
        echo'Please Check Your Query'; 
    }

}



else
{
    header("location:index.php");
}
    


?>