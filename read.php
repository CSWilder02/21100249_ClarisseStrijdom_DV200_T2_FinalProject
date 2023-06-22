<?php
error_reporting(0);
include 'db.php';

$sql = "SELECT * FROM appointments";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    if ($row['id'] == $_GET['id']) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<div class="form-group">';
        echo '<label for="patient">Patient ID:</label>';
        echo '<input type="text" class="form-control" name="patient_id" value="' . $row['patient_id'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="date" value="' . $row['date'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="doctor_id" value="' . $row['doctor_id'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="receptionist_id" value="' . $row['receptionist_id'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="room_id" value="' . $row['room_id'] . '">';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Save</button>';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="card" style="margin-top: 50px; margin-left: 40px; margin-bottom: 40px; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2); padding: 20px">';
        echo '<div class="card-body">';
        echo '<img src="Images/' .$row["image"]. '" style="width:100px;  height: 100px; border-radius: 50%; margin-left: 150px">';
        echo '<p class="card-text" style="border-top: 1px solid #09456B; padding-top: 30px; margin-top: 30px">Patient ID: ' . $row['patient_id'] . '</p>';
        echo '<p class="card-text">Doctor ID: ' . $row['doctor_id'] . '</p>';
        echo '<p class="card-text">Receptionist ID: ' . $row['receptionist_id'] . '</p>';
        echo '<p class="card-text">Room ID: ' . $row['room_id'] . '</p>';
        echo '<p class="card-text">Date: ' . $row['date'] . '</p>';
        echo '<a class="btn btn-primary" style="background-color: #0B466C; margin-top: 30px; margin-right:20px; width: 300px; padding-top: 10px; padding-bottom: 10px" href="index.php?id=' . $row['id'] . '">Update</a>';
        echo '<a class="btn btn-danger" style="width: 90px; margin-top: 30px; background-color: rgb(97, 0, 0);" href="delete.php?id=' . $row['id'] . '"><img style="width: 25px" src="Images\recycle-bin (1).png" alt=""></a>';
        echo '</div>';
        echo '</div>';
    }
}

$conn->close();
?>

