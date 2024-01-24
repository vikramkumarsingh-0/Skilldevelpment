<?php
function remove_spaces() {
    $file_path = 'C:\xampp\htdocs\skilldevelopment\layout\home.php'; // Replace with your file path

// Read the file into a string
$file_content = file_get_contents($file_path);

// Remove spaces from the string
$content_without_spaces = str_replace(' ', '', $file_content);

// Write the string back to the file
file_put_contents($file_path, $content_without_spaces);}
?>