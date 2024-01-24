<?php
// function createDatabaseAndTable($dbHost, $dbUser, $dbPass, $dbName, $tableName, $createDbQuery, $createTableQuery) {
// // Database credentials
// $dbHost = "localhost";
// $dbUser = "root";
// $dbPass = "";

// // Database and table names
// $dbName = "skilldevelopment";
// $tableName = "users";

// // SQL queries to create database and table
// $createDbQuery = "CREATE DATABASE IF NOT EXISTS $dbName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
// $createTableQuery = "CREATE TABLE IF NOT EXISTS $dbName.$tableName (
//   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//   // Add your table columns here, example:
//   name VARCHAR(255) NOT NULL,
//   email VARCHAR(255) NOT NULL UNIQUE,
//   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// // Connect to MySQL
// try {
//   $conn = new mysqli($dbHost, $dbUser, $dbPass);
//   if ($conn->connect_error) {
//     throw new Exception("Connection failed: " . $conn->connect_error);
//   }

//   // Create database
//   $conn->query($createDbQuery);
//   if ($conn->errno) {
//     throw new Exception("Error creating database: " . $conn->error);
//   }

//   // Select created database
//   $conn->select_db($dbName);

//   // Create table
//   $conn->query($createTableQuery);
//   if ($conn->errno) {
//     throw new Exception("Error creating table: " . $conn->error);
//   }

//   echo "Database and table created successfully!";
// } catch (Exception $e) {
//   echo "Error: " . $e->getMessage();
// } finally {
//   // Close connection
//   $conn->close();
// }
// }
?>


<?php

// Database connection information
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "skilldevelperdb";
$table_name = "users";

// Connect to MySQL
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to check if table exists
$sql = "SHOW TABLES LIKE '$table_name'";
$result = $conn->query($sql);

// If the table exists
if ($result->num_rows > 0) {
    //table exists
} 

?>













