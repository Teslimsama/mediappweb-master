<?php
include_once '../../config/db.connect.php';
include '../../config/alert.message.php';

if (!isset($_GET['id'])) {
    header('Location:../patients');
}

$user_id = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$user_id'";

if (mysqli_query($db_connect,$sql)) {
    $_SESSION['success'] = 'Patient record was deleted successfuly';
    header('Location:../patients');
}
else {
    $_SESSION['error'] = 'Failure while performing command';
    header('Location:../patients');
}
