<?php
include 'db.php';

$id = $_POST["id"];
$name_surname = $_POST["name_surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_number = $_POST["phone_number"];
$specialisation = $_POST["specialisation"];
$room_id = $_POST["room_id"];

$sql = "UPDATE doctors SET name_surname = '$name_surname', age = '$age', gender = '$gender', email = '$email', password = '$password', phone_number = '$phone_number', specialisation = '$specialisation', room_id = '$room_id' WHERE id = '$id'";

$conn->query($sql);
$conn->close();
header("location: doctors.php");
?>
