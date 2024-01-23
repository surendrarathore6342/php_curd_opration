<?php
include 'config.php';

$name = $_POST['name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile_number'];

$sql = "INSERT INTO users (name, last_name, email, mobile_number) VALUES ('$name', '$lastname', '$email', '$mobile')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>