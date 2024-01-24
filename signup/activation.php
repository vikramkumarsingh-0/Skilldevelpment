<?php
session_start();

// Include connection file with correct relative path
include '../signup/connection.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE users SET status='active' WHERE token=?");
    $stmt->bind_param("s", $token);

    if ($stmt->execute()) {
        $_SESSION['message'] = 'Account Activated';
        // Specify complete path to login.php
        header("location: ../signup/login.php");
    } else {
        // Redirect to a specific error page or provide more informative feedback
        header("location: ../signup/error.php");
    }
} else {
    // Handle missing token scenario accordingly
    // Consider redirecting to a specific error page or providing a message
    header("location: ../signup/register.php");
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

