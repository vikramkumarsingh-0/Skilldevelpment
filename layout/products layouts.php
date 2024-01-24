<?php
@include "connection.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT prod_cat, prod_type, prod_sub_cat, prod_status, prod_name, prod_level, prod_desc, prod_desc_detail, prod_img FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        // Convert the blob into an image
        $imageData = base64_encode($row["prod_img"]);
        $imageSrc = 'data:image/jpeg;base64,' . $imageData;
        echo "<img src='" . $imageSrc . "' alt='" . $row["prod_name"] . "'>";
        echo "<h2>" . $row["prod_name"] . "</h2>";
        echo "<p>" . $row["prod_desc"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No products found";
}
$conn->close();
?>
