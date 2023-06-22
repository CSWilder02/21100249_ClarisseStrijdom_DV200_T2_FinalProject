<?php
include 'db.php';

$id = $_POST["id"];
$name_surname = $_POST["name_surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_number = $_POST["phone_number"];
$rank = $_POST["rank"];
$profile_img = $_POST["profile_img"];

$sql = "UPDATE receptionists SET name_surname = '$name_surname', age = '$age', gender = '$gender', email = '$email', password = '$password', phone_number = '$phone_number', rank = '$rank', profile_img = '$profile_img' WHERE id = '$id'";

$conn->query($sql);
$conn->close();
header("location: receprofile.php");
?>
