<?php
include('../config/alert.message.php');
require_once('../config/db.connect.php');

if (!isset($_POST['update'])) {
    header('Location:../patientsarea');

}elseif (strlen($_POST['fname']) < 2 || strlen($_POST['lname']) < 2) {
    //checks if first name or last name is less than 2 chars
    $_SESSION['error'] = 'Please enter a valid name';
    header('Location:../patientsarea');
}

//COLLECT DATA FROM FORM
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$user_id = $_SESSION['id'];

$sql = "UPDATE users SET firstname='$first_name',lastname='$last_name' WHERE id='$user_id'";
if(mysqli_query($db_connect,$sql)){
    $_SESSION['success'] = 'Your records have been updated';
    header('Location:../care/update-patient-record');
}Mypassword123!