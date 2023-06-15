<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $patient_id = $_POST["patient_id"];
   $receptionist_id = $_POST["receptionist_id"];
   $doctor_id = $_POST["doctor_id"];
   $room_id = $_POST["room_id"];
   $date = $_POST["date"];

   $sql = "INSERT INTO appointments (patient_id, receptionist_id, doctor_id, room_id, date) VALUES ('$patient_id', '$receptionist_id', '$doctor_id', '$room_id', '$date')";

   if ($conn->query($sql) === TRUE) {
      header("Location: index.php");
      exit;
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}

$conn->close();
?>

