<?php
include_once '../config/db.connect.php';
include '../config/alert.message.php';

if(!isset($_GET['id'])){
    header('Location:patients');
}

$patient_id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$patient_id';";
$sql_result = mysqli_query($db_connect,$sql);
$rows = mysqli_fetch_assoc($sql_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar-office.php'; ?>

    <div class="container pt-4">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                <?php echo ErrorMessage(); echo SuccessMessage();?>
                
                <h3 class="mb-2">Individual Patient Records</h3>
                <div class="alert alert-secondary p-1">
                    <p class="text-secondary fs-5 m-1">Full name</p>
                    <p class="text-dark fs-5 m-1">
                        <?php echo $rows['firstname'] . ' ' . $rows['lastname'];?>
                    </p>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <p class="text-dark fs-5 m-1">
                            <span class="text-secondary fs-5 m-1">Gender</span> <br>
                            <?php echo $rows['gender'];?>
                        </p>
                        <p class="text-dark fs-5 m-1">
                            <span class="text-secondary fs-5 m-1">DoB</span> <br>
                            <?php echo $rows['dob'];?>
                        </p>
                        <p class="text-dark fs-5 m-1">
                            <span class="text-secondary fs-5 m-1">Phone</span> <br>
                            <?php echo $rows['phone'];?>
                        </p>
                        <p class="text-dark fs-5 m-1">
                            <span class="text-secondary fs-5 m-1">Email</span> <br>
                            <?php echo $rows['email'];?>
                        </p>
                    </div>

                    <hr>

                    <p class="text-dark fs-5 m-1">
                        <span class="text-secondary fs-5 m-1">Contact address</span> <br>
                        <?php echo $rows['conaddress'];?>
                    </p>
                    
                    <hr>

                    <p class="text-dark fs-5 m-1">
                        <span class="text-secondary fs-5 m-1">Managing Doctor</span> <br>
                        Doctor Anslem Chuba
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="alert alert-info">
                    <h4 class="text-center">Card No: <br> MA2022180769</h4>
                </div>
                <div class="alert alert-secondary">
                    <h6 class="text-center">Next Appointment: <br> 23/8/2022</h6>
                </div>
                <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#assignDoctorModal">
                        Assign a doctor
                    </a>
                    <?php include('modules/modals/modal-assign-doctor.php') ?>
                    
                   
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Diagnosis</button>
                     
                    <?php include('modules/modals/diagnosis.php') ?>
                    
                    <a href="#" class="btn btn-primary">Test results</a>
                    <a href="#" class="btn btn-info">Appointment history</a>
                    <a href="#" class="btn btn-primary">Payment history</a>
                </div>
            </div>
        </div>
    </div>
    
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>