<?php
 
 // Define base URL for absolute paths
 $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/skilldevelopment';
 ?>
<?php
session_start();

session_destroy();

header("location:$base_url/index.php");
?>

<!-- // logout.php
require_once('session.php');

start_session();
destroy_session();
header('Location: login.php'); // Redirect to login
 -->