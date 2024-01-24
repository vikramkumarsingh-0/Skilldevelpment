// profile.php
require_once('session.php');

start_session();

if (is_logged_in()) {
    $user_id = get_session_data('user_id');
    // Retrieve user information and display profile
} else {
    header('Location: login.php'); // Redirect to login
}
