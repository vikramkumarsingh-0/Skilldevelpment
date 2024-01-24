<!DOCTYPE html>
<html>
  <head>
    <?php @include "links.php";?>
  </head>
<body>
<main class="container">
<form action="product_uploader_process.php" method="post" enctype="multipart/form-data">
  
  <!-- Select product Category from given option  -->
  <!-- Product Category: <input type="text" name="prod_cat"><br> -->

  Product Category:<select  name="prod_cat" type="text">
    <option value="">Select an option</option>
    <option value="agriculture">Agriculture</option>
    <option value="scientific agriculture">Advance Agri</option>
  </select><br>

  Product Type: <input type="text" name="prod_type"><br>
  Product Sub Category: <input type="text" name="prod_sub_cat"><br>
  Product Status: <input type="text" name="prod_status"><br>
  Product Name: <input type="text" name="prod_name"><br>
  Product Level: <input type="text" name="prod_level"><br>
  Product Description: <input type="text" name="prod_desc"><br>
  Product Detailed Description: <input type="text" name="prod_desc_detail"><br>
  Product Image: <input type="file" name="prod_img"><br>
  <input type="submit">
</form>
</main>
</body>
</html>
