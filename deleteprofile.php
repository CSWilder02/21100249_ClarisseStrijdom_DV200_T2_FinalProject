<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM receptionists WHERE id = $id";

$conn->query($sql);
$conn->close();
header("location: receprofile.php");
?>
