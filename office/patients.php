<?php
include_once '../config/db.connect.php';
include '../config/alert.message.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar-office.php'; ?>

    <div class="container pt-1">
        <?php echo ErrorMessage(); echo SuccessMessage();?>

        <h2>All registered patients</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Card Number</td>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Gender</td>
                    <td>Date of Birth</td>
                    <td>Settings</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM users WHERE acctype='patient' ORDER BY id DESC LIMIT 20";
                $sql_result = mysqli_query($db_connect,$sql);
                while($rows = mysqli_fetch_assoc($sql_result)){
                ?>
                <tr>
                    <td><?php echo $rows['card_no']; ?></td>
                    <td><?php echo $rows['lastname']; ?></td>
                    <td><?php echo $rows['firstname']; ?></td>
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['dob']; ?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="patient-details?id=<?php echo $rows['id']; ?>">Details</a></li>
                                <li><a class="dropdown-item" href="system/delete.patient.php?id=<?php echo $rows['id']; ?>">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>