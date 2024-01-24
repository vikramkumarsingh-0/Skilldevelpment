<?php
 
// Define base URL for absolute paths
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/skilldevelopment';
?>

<?php
// 1. Database connection
include "connection.php";

// 2. Form input handling
if (isset($_POST['click'])) {
    $email = $_POST['fmail']; // Retrieve email from POST data
    $password = $_POST['fpass']; // Retrieve password from POST data

    // Sanitize and validate inputs (important for security)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // ... Add validation for password (e.g., minimum length, complexity) ...

    // Retrieve password from database after validation
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND status = 'active'");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        error_log($row['password']);
        error_log('$password');
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Login successful

            $_SESSION['username'] = $row['name'];

            // Set cookies if remember me is checked
            if (isset($_POST['remember'])) {
                setcookie("Emailcookie", $email, time() + 60 * 60 * 24 * 7);
                setcookie("RememberMe", true, time() + 60 * 60 * 24 * 7);
            }

            // Redirect to index.php
            header("location:$base_url/index.php");
            // exit;
        } else {
            // Invalid password
            header("location:login.php?error=invalidpassword"); // Redirect with error message
            // exit;
        }
    } else {
        // User not found
        header("location:login.php?error=usernotfound"); // Redirect with error message
        session_abort();
        exit;
    }
}
?>
