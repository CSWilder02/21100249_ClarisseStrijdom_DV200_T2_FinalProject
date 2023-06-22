<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["id"];
    $name_surname = $_POST["name_surname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone_number = $_POST["phone_number"];
    $rank = $_POST["rank"];
    $profile_img = $_POST["profile_img"];

   $sql = "INSERT INTO receptionists (name_surname, age, gender, email, password, phone_number, rank, profile_img) VALUES ('$name_surname', '$age', '$gender', '$email', '$password', '$phone_number', '$rank', '$profile_img')";

   if ($conn->query($sql) === TRUE) {
      header("Location: receprofile.php");
      exit;
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}

$conn->close();
?>