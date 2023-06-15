<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name_surname = $_POST["name_surname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_number = $_POST["phone_number"];
$specialisation = $_POST["specialisation"];
$room_id = $_POST["room_id"];

   $sql = "INSERT INTO doctors (name_surname, age, gender, email, password, phone_number, specialisation, room_id) VALUES ('$name_surname', '$age', '$gender', '$email', '$password', '$phone_number', '$specialisation', '$room_id')";

   if ($conn->query($sql) === TRUE) {
      header("Location: doctors.php");
      exit;
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}

$conn->close();
?>