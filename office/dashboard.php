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
    <title>MediApp Office | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar-office.php'; ?>

    <div class="container pt-4">
        <form action="">
            <input type="text" class="form-control py-3" 
            style="border-radius: 50px;"
            placeholder="card number">
        </form>

        <div class="row pt-3">
            <?php
            include('modules/new-patients.php');  
            include('modules/new-payments.php');  
            include('modules/new-results.php');  
            include('modules/new-enquiries.php');  
            ?>
        </div>
    </div>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>