<?php

// Start the session immediately

session_start();

include "connection.php";

if (isset($_POST['click'])) {
 // Sanitize and validate inputs (code omitted for brevity)

 // Use a prepared statement
 $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND status = 'active'");
 $stmt->bind_param("s", $email);
 $stmt->execute();
 $res = $stmt->get_result();

 if ($res->num_rows > 0) {
   $row = $res->fetch_assoc();

   // Verify password
   if (password_verify($pass, $row['password'])) {
     // Set session variables
     $_SESSION['username'] = $row['name'];

     // Set cookies if remember me is checked
     if (isset($_POST['remember'])) {
       setcookie("Emailcookie", $email, time() + 60 * 60 * 24 * 7); // Set cookies for 7 days
       setcookie("Passwordcookie", $row['password'], time() + 60 * 60 * 24 * 7);
     }

     // Redirect to index.php
     header("location:index.php"); // Redirect to index.php in the same directory
     exit; // Prevent further code execution
   } else {
     echo "Invalid password";
   }
 } else {
   echo "Error";
 }
} else {
 // If form is not submitted, redirect to index.php unconditionally
 header("location:index.php");
 exit;
}
?>
 <?php 
 include 'links.php';
 include '../layout/header.php' 
 ?>  


<main>
<!-- inner banner -->
<div  id="home">
    <div class="container py-xl-5 py-lg-3">
       
        <?php include('message.php'); ?>
        <div class="modal-body my-5 pt-4">
            <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Login Now</h3>
            <form action="login.php" method="post">
                <div class="form-group" style="text-decoration-color: black;">
                    <label class="col-form-label"><span style="color: black; font-weight: bold; " >Email</span></label>
                    <input type="text" class="form-control" placeholder="Enter email" name="fmail" value="
                    <?php if (isset($_COOKIE['Emailcookie'])){ echo $_COOKIE['Emailcookie'];} ?>" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label"><span style="color: black; font-weight: bold;" >Password</span></label>
                    <input type="password" class="form-control" placeholder="*****" name="fpass" value="
                    <?php if (isset($_COOKIE['Passwordcookie'])) 
                    {
                       echo $_COOKIE['Passwordcookie'];
                    } ?>" required>
                </div>
                <button type="submit" name="click" class="btn button-style-w3">Login</button>
                <div class="row sub-w3l mt-3 mb-5">
                    <div class="col-sm-6 sub-w3layouts_hub">
                        <input type="checkbox" id="brand1" value="" name="remember">
                        <label for="brand1" class="text-li text-style-w3ls">Remember me?</label>
                    </div>
                    <div class="col-sm-6 forgot-w3l text-sm-right">
                        <a href="forget.php" class="text-li text-style-w3ls">Forgot Password?</a>
                    </div>
                </div>
                <p class="text-center dont-do text-style-w3ls text-li">Don't have an account?
                    <a href="register.php" class="font-weight-bold text-li">
                        Register Now</a>
                </p>
            </form>
        </div>
     
    </div>
</div> 
</main>
<?php 
@include '../layout/footer.php'; 
?>















