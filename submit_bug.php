<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    $severity = $_POST['severity'];

    $sql = "INSERT INTO bugs (title, description, severity) VALUES ('$title', '$desc', '$severity')";
    if ($conn->query($sql)) {
        echo "<script>alert('Bug submitted successfully');window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
