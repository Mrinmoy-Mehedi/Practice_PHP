<?php
require_once("connection.php");
$UserID = $_GET['GetID'];
$query = "select * from registrationform where UserID='" . $UserID . "'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $UserID = $row['UserID'];
    $UserName = $row['User_Name'];
    $UserEmail = $row['User_Email'];
    $UserAge = $row['User_Age'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Update Information</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 m=auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Update Registration Form</h3>

                    </div>
                    <div class="card-body">
                        <form action="edit.php?ID=<?php echo $UserID?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="Enter User Name"  name="Name" value="<?php echo $UserName?>">
                            <input type="email" class="form-control mb-2" placeholder="Enter User Email" name="Email" value="<?php echo $UserEmail?>">
                            <input type="text" class="form-control mb-2 " placeholder="Enter User Age" name="Age" value="<?php echo $UserAge ?>">
                            <button class="btn btn-primary ms-4" name="update">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>