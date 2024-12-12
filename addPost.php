<?php
$host = 'localhost';
$db = 'sustainable_tomorrow';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userName = $_POST['userName'] ?? '';
$postContent = $_POST['postContent'] ?? '';

if ($userName && $postContent) {
    $stmt = $conn->prepare("INSERT INTO forum (userName, content, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param('ss', $userName, $postContent);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
} else {
    echo 'Missing input fields.';
}

$conn->close();
?>
