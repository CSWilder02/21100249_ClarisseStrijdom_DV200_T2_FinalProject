<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $name_surname = $_POST["name_surname"];
   $age = $_POST["age"];
   $gender = $_POST["gender"];
   $email = $_POST["email"];

   $phone_number = $_POST["phone_number"];
   $medical_aid_number = $_POST["medical_aid_number"];

   $sql = "INSERT INTO patients (name_surname, age, gender, email, phone_number, medical_aid_number) VALUES ('$name_surname', '$age', '$gender', '$email', '$phone_number', '$medical_aid_number')";

   if ($conn->query($sql) === TRUE) {
      header("Location: patients.php");
      exit;
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}

$conn->close();
?>