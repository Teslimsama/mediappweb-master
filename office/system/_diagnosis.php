<?php
include_once '../../config/db.connect.php';
include '../../config/alert.message.php';

if (!isset($_POST['send-message'])) {
    header('Location:../patients');
}

$doctor_id = $_POST['doctor-id'];
$patient_id = $_POST['patient-id'];
$doc_message = $_POST['message'];

$now = new DateTime();
$timestamp = $now->getTimestamp();

$sql = "INSERT INTO diagnosis  (doctorid,diagnosis,patientid,timestamp) 
VALUES(?,?,?,?);";

$stmt = mysqli_stmt_init($db_connect);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,'isii',$doctor_id,$doc_message,$patient_id,$timestamp);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['success'] = 'Appointment booked successfuly';
    header("Location:../diagnosis?id=$patient_id");
}
else {
    $_SESSION['error'] = 'Failure while performing command';
    header('Location:../patients');
}