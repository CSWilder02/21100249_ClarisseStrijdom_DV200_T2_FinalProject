<?php
include 'db.php';

$id = $_POST["id"];
$patient_id = $_POST["patient_id"];
$receptionist_id = $_POST["receptionist_id"];
$doctor_id = $_POST["doctor_id"];
$room_id = $_POST["room_id"];
$date = $_POST["date"];

$sql = "UPDATE appointments SET patient_id = '$patient_id', receptionist_id = '$receptionist_id', doctor_id = '$doctor_id', room_id = '$room_id', date = '$date' WHERE id = '$id'";

$conn->query($sql);
$conn->close();
header("location: index.php");
?>
