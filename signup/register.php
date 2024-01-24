<?php @include 'links.php'; ?>
<?php @include '../layout/header.php'; ?>



<!-- new registration with msg -->


<?php

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer\src\SMTP.php';
require '../PHPMailer\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Start the session
// session_start();

include 'connection.php';

if (isset($_POST['click'])) {
    // Sanitize and validate inputs (important for security)
    $name = filter_var($_POST['fname']);
    $email = filter_var($_POST['fmail'], FILTER_SANITIZE_EMAIL);
    $mobile = filter_var($_POST['fmobile']);
    $pass = $_POST['fpass'];
    $cpass = $_POST['fcpass'];

    // Sanitize and validate the inputs
    $name = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['fmail']);
    $mobile = mysqli_real_escape_string($conn, $_POST['fmobile']);
    $pass = mysqli_real_escape_string($conn, $_POST['fpass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['fcpass']);


    // Check for existing email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        echo 'Email already exists';
    } else {
        if ($pass === $cpass) {
            // Hash the password
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
            $token = bin2hex(random_bytes(10));

            // Insert user data
            $stmt = $conn->prepare("INSERT INTO users (name, email, mobile, password, token, user_type, status) VALUES (?, ?, ?, ?, ?, 'user', 'inactive')");
            $stmt->bind_param("sssss", $name, $email, $mobile, $hashed_pass, $token);

            if ($stmt->execute()) {
                // Send activation email
                $mail = new PHPMailer(true);
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->isHTML(true);
                $mail->Username = 'vicky310singh@gmail.com';  // Replace with your email address
                $mail->Password = 'pxbd pocp bxrj mwii';  // Replace with your email password
                $mail->SetFrom('vicky310singh@gmail.com');  // Replace with your email address
                $mail->Subject = "Activation mail.";
                $mail->Body = "Hello $name, click here to activate account http://localhost/skilldevelopment/signup/activation.php?token=$token";
                $mail->AddAddress($email);

                if (!$mail->Send()) {
                    echo "Email not sent";
                } else {
                    $_SESSION['message'] = "Check your email to activate your account.";
                    header("location:login.php");
                }
            } else {
                echo "Query failed";
            }
        } else {
            echo "Enter the same password";
        }
    }
}
?>

























<main>
    <!-- inner banner -->
    <div id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- register  -->
            <div class="modal-body mt-md-2 mt-5">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Register Now</h3>
                <form role="form" action="#" method="post">
                    <div class="form-group">
                        <label class="col-form-label  "><span style="color: black; font-weight: bold; ">Username</span></label>
                        <input type="text" class="form-control" placeholder="your name" name="fname" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label "><span style="color: black; font-weight: bold; ">Email</span></label>
                        <input type="email" class="form-control" placeholder="loremipsum@email.com" name="fmail" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label "><span style="color: black; font-weight: bold; ">Mobile no.</span></label>
                        <input type="mobile" class="form-control" placeholder="1236547890" name="fmobile" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label "><span style="color: black; font-weight: bold; ">Password</span></label>
                        <input type="password" class="form-control" placeholder="*****" name="fpass" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label "><span style="color: black; font-weight: bold; ">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="*****" name="fcpass" required="">
                    </div>
                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-li text-style-w3ls">
                                I Accept to the Terms & Conditions</label>
                        </div>
                    </div>
                    <button type="submit" name="click" class="btn button-style-w3">Register</button>
                    <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
            <!-- //register -->
        </div>
    </div>
    <!-- //inner banner -->
</main>
<?php @include '../layout/footer.php'; ?>