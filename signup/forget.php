<?php

// Define base URL for absolute paths
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . '/skilldevelopment';
?>
<?php include 'links.php'; ?><main>

    <?php
    session_start();

    include "connection.php";
    if (isset($_POST['click'])) {

        $email = $_POST['fmail'];
        $sql = "select * from users where email='{$email}'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {

            $row = mysqli_fetch_assoc($res);

            $username = $row['name'];
            $token = $row['token'];

            $to = $email;
            $subject = "Password Reset.";
            $body = "Hello $username, click here to reset your password http://localhost/skilldevelopment/signup/reset.php?token=$token";
            $from = "FROM:vicky310singh@gmail.com";

            if (mail($to, $subject, $body, $from)) {
                $_SESSION['message'] = "mail Send successfully.";

                header("location: '$base_url''ogin.php'");
            } else {
                echo "email not send";
            }
        } else {
            echo "Email is not in our database";
        }
    }
    ?>






    <!-- inner banner -->
    <div id="home">
        <div class="container py-xl-5 py-lg-3">
            <div class="modal-body my-5 pt-4">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Enter registered e-mail </h3>
                <form action="login.php" method="post">
                    <div class="form-group" style="text-decoration-color: black;">
                        <label class="col-form-label"><span style="color: black; font-weight: bold; ">Email</span></label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="fmail" required>
                    </div>

                    <button type="submit" name="click" class="btn button-style-w3">Submit</button>
                </form>
            </div>

        </div>
    </div>
</main>