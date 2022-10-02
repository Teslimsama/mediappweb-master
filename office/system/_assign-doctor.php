<?php
include_once '../../config/db.connect.php';
include '../../config/alert.message.php';

if (!isset($_POST['assign-doctor'])) {
    header('Location:../patients');
}

$doctor_id = $_POST['doctor'];
$patient_id = $_POST['patient-id'];
$appt_date = $_POST['appt-date'];

$now = new DateTime();
$timestamp = $now->getTimestamp();

$sql = "INSERT INTO appointments (apptdate,patientid,doctor,timestamp) 
VALUES(?,?,?,?);";

$stmt = mysqli_stmt_init($db_connect);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,'siii',$appt_date,$patient_id,$doctor_id,$timestamp);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['success'] = 'Appointment booked successfuly';
    header("Location:../appointments");
}
else {
    $_SESSION['error'] = 'Failure while performing command';
    header('Location:../patients');
}
