<?php
require_once("connection.php");
$query = "select * from registrationform";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Insert_Update-Delete</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 m=auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Registration Form</h3>

                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="post">
                            <input type="text" class="form-control mb-2" placeholder="Enter User Name" name="Name">
                            <input type="email" class="form-control mb-2" placeholder="Enter User Email" name="Email">
                            <input type="text" class="form-control mb-2 " placeholder="Enter User Age" name="Age">
                            <button class="btn btn-primary" name="insert">Insert</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col m=auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>

                            <td> User ID</td>
                            <td> User Name</td>
                            <td> User Mail</td>
                            <td> User Age</td>
                            <td> Update</td>
                            <td> Delete</td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $UserID = $row['UserID'];
                            $UserName = $row['User_Name'];
                            $UserEmail = $row['User_Email'];
                            $UserAge = $row['User_Age'];

                        ?>
                            <tr>
                                <td><?php echo $UserID ?></td>
                                <td><?php echo $UserName ?></td>
                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserAge ?></td>
                                <td><a href="update.php?GetID=<?php echo $UserID?>">Update</a></td>
                                <td><a href="delete.php?Del=<?php echo $UserID?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>