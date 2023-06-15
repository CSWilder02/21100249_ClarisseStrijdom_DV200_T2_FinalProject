<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM doctors WHERE id = $id";

$conn->query($sql);
$conn->close();
header("location: doctors.php");
?>
