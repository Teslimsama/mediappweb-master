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
    <title>Update Profile | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>
<body>
    <?php include 'navbar.care.php'; ?>

    <div class="container py-4">
        <div class="card px-3 py-2" style="width:36rem;margin:0 auto">
            
            <?php echo ErrorMessage(); echo SuccessMessage();?>

            <h1>Update Your Profile</h1>

            <form action="../app/update-patient.app.php" method="POST">
                <div class="mb-2">
                    <label>First name</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $rows['firstname'] ?>">
                </div>
                <div class="mb-2">
                    <label>Last name</label>
                    <input type="text" name="lname" class="form-control" value="<?php echo $rows['lastname'] ?>">
                </div>
                <div class="mb-2">
                    <label>Phone number</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Create password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Confirm password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Contact address</label>
                    <textarea name="contact_add" class="form-control"></textarea>
                </div>
                <div class="row mb-2">
                    <span>Gender</span>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Male" name="gender" id="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Female" name="gender" id="female">
                            <label class="form-check-label" for="femal">Female</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <label>Date of birth</label>
                            <input type="date" name="dob" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="update">Update records</button>
            </form>
        </div>
    </div>
<script src="../assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="../assets/fontawesome/js/fontawesome.min.js"></script>
</body>
</html>