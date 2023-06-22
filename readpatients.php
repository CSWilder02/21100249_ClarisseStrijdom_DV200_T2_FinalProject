<?php
error_reporting(0);
include 'db.php';

$sql = "SELECT * FROM patients";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    if ($row['id'] == $_GET['id']) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<form class="form-inline m-2" action="updatepatient.php" method="POST">';
        echo '<div class="form-group">';
        echo '<label for="patient">Patient ID:</label>';
        echo '<input type="text" class="form-control" name="name_surname" value="' . $row['name_surname'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="age" value="' . $row['age'] . '">';
        echo '</div>';
        echo '<div class="form-group2">';
        echo '<label for="date">Date:</label>';
        echo '<input type="text" class="form-control" name="gender" value="' . $row['gender'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="text" class="form-control" name="email" value="' . $row['email'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="phone_number" value="' . $row['phone_number'] . '">';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date">Date:</label>';
        echo '<input type="number" class="form-control" name="medical_aid_number" value="' . $row['medical_aid_number'] . '">';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Save</button>';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="card" style="margin-top: 50px; margin-left: 40px; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2); padding: 20px">';
        echo '<div class="card-body">';
        echo '<img src="Images/' .$row["profile_img"]. '" style="width:100px;  height: 100px; border-radius: 50%; margin-left: 150px">';
        echo '<p class="card-text" style="border-top: 1px solid #09456B; padding-top: 30px; margin-top: 30px">Name & Surname: ' . $row['name_surname'] . '</p>';
        echo '<p class="card-text">Age: ' . $row['age'] . '</p>';
        echo '<p class="card-text">Gender: ' . $row['gender'] . '</p>';
        echo '<p class="card-text">Email: ' . $row['email'] . '</p>';
        echo '<p class="card-text">Phone Number: ' . $row['phone_number'] . '</p>';
        echo '<p class="card-text">Medical Aid Number: ' . $row['medical_aid_number'] . '</p>';
        echo '<a class="btn btn-primary" style="background-color: #0B466C; margin-top: 30px; margin-right:20px; width: 300px; padding-top: 10px; padding-bottom: 10px;" href="patients.php?id=' . $row['id'] . '">Update</a>';
        echo '<a class="btn btn-danger" style="width: 90px; margin-top: 30px; background-color: rgb(97, 0, 0);" href="deletepatient.php?id=' . $row['id'] . '"><img style="width: 25px" src="Images\recycle-bin (1).png" alt=""></a>';
        echo '</div>';
        echo '</div>';
    }
}

$conn->close();
?>

