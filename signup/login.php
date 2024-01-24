<?php
 

include 'links.php';
include '../layout/header.php';
include 'login_process.php'; // Include login logic


if (isset($_SESSION['message'])) { // Check for session message
    echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']); // Clear the message after displaying
}
?>

<main>

    <div class="container py-xl-5 py-lg-3">
        <?php include('message.php'); ?>
        <div class="modal-body my-5 pt-4">
            <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Login Now</h3>
            <form action="login.php" method="post">
                <div class="form-group" style="text-decoration-color: black;">
                    <label class="col-form-label"><span style="color: black; font-weight: bold;">Email</span></label>
                    <input type="email" class="form-control" placeholder="Enter email" name="fmail" value="<?php if (isset($_COOKIE['Emailcookie'])) { echo $_COOKIE['Emailcookie']; } ?>" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label"><span style="color: black; font-weight: bold;">Password</span></label>
                    <input type="password" class="form-control" placeholder="*****" name="fpass" required>
                </div>
                <button type="submit" name="click" class="btn button-style-w3">Login</button>
                </form>
        </div>
        </div>

</main>
<?php @include '../layout/footer.php'; ?>
