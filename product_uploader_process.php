<?php

// @include "connection.php";
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
   
//     $prod_cat = $_POST['prod_cat'];$prod_type = $_POST['prod_type']; $prod_sub_cat = $_POST['prod_sub_cat'];$prod_status = $_POST['prod_status'];$prod_name = $_POST['prod_name'];$prod_level = $_POST['prod_level'];$prod_desc = $_POST['prod_desc'];$prod_desc_detail = $_POST['prod_desc_detail'];$prod_img = $_FILES['prod_img']['name'];

//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["prod_img"]["name"]);

//     // Select file type
//     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//     // Valid file extensions
//     $extensions_arr = array("jpg","jpeg","png","gif");

//     // Check extension
//     if( in_array($imageFileType,$extensions_arr) ){
//         // Upload file
//         if(move_uploaded_file($_FILES['prod_img']['tmp_name'],$target_file)){
//             // Insert record
//             $query = "INSERT INTO products(prod_cat, prod_type, prod_sub_cat, prod_status, prod_name, prod_level, prod_desc, prod_desc_detail, prod_img) VALUES('$prod_cat', '$prod_type', '$prod_sub_cat', '$prod_status', '$prod_name', '$prod_level', '$prod_desc', '$prod_desc_detail', '$target_file')";
//             mysqli_query($conn,$query);
//         }
//     }

//     $conn->close();

@include "connection.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$prod_cat = $_POST['prod_cat'];
$prod_type = $_POST['prod_type'];
$prod_sub_cat = $_POST['prod_sub_cat'];
$prod_status = $_POST['prod_status'];
$prod_name = $_POST['prod_name'];
$prod_level = $_POST['prod_level'];
$prod_desc = $_POST['prod_desc'];
$prod_desc_detail = $_POST['prod_desc_detail'];

$prod_img = $_FILES['prod_img']['tmp_name'];
$imageData = file_get_contents($prod_img);
$escapedImageData = mysqli_real_escape_string($conn, $imageData);

$stmt = $conn->prepare("INSERT INTO products (prod_cat, prod_type, prod_sub_cat, prod_status, prod_name, prod_level, prod_desc, prod_desc_detail, prod_img) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $prod_cat, $prod_type, $prod_sub_cat, $prod_status, $prod_name, $prod_level, $prod_desc, $prod_desc_detail, $escapedImageData);

if ($stmt->execute()) {
    echo "Product uploaded successfully";
} else {
    echo "Error uploading product: " . $stmt->error;
}

$stmt->close();
$conn->close();

















?> 
