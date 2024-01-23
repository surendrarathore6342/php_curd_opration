<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_number'];

    $sql = "UPDATE users SET name='$name', last_name='$last_name', email='$email', mobile_number='$mobile_no' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: update.php?id=$id");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>