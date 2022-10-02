<?php
include_once '../config/db.connect.php';
include '../config/alert.message.php';

$user_id = $_SESSION['id'];

//get user's record
$sql = "SELECT * FROM users WHERE id=?;";
$stmt = mysqli_stmt_init($db_connect);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,'i',$user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$rows = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>
<body>
    <?php include 'navbar.care.php'; ?>

    <div class="container pt-4">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="alert alert-primary">
                    <span class="text-center d-block" style="font-size:80px"><i class="fa-solid fa-user"></i></span>
                    <h3 class="text-center"><?php echo $_SESSION['first_name'] . ' ' .  $_SESSION['last_name']; ?></h3>
                    <p class="text-center"><?php echo $_SESSION['email']; ?></p>
                    <a href="update-patient-record.php" class="btn btn-primary w-100">Update Profile</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-9 col-lg-9">
                <div class="alert alert-secondary">
                    <div class="alert alert-light">
                        <div class="row">
                            <div class="col-3">
                                <h6>Bio data</h6>
                            </div>
                            <div class="col-9">
                                <p>Full name: <?php echo $rows['firstname'] . ' ' . $rows['lastname']; ?></p>
                                <p>Phone: <?php echo $rows['phone']; ?></p>
                                <p>email: <?php echo $rows['email']; ?></p>
                                <p>Gender: <?php echo $rows['gender']; ?></p>
                                <p>Date of Birth: <?php echo $rows['dob']; ?></p>
                                <p>Address: <?php echo $rows['conaddress']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>