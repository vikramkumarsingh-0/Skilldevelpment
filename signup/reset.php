<?php
session_start();
include 'connection.php';
if (isset($_POST['update'])) {
  if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $pass = $_POST['fpass'];
    $cpass = $_POST['fcpass'];
    // $passwd=password_hash($pass,PASSWORD_DEFAULT);
    if ($pass === $cpass) {
      $sql = "update users set password='$pass' where token='$token'";
      $res = mysqli_query($conn, $sql);
      if ($res) {
        $_SESSION['message'] = "your password is reset successfully.";
        header('location:login.php');
      } else {
        header('location:reset.php');
      }
    } else {
      echo "password is not same";
    }
  }
}
?>



  <main>
    <div class="container py-3">
      <div class="row">
        <div class="col-7">
          <form action="" method="POST">
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="fpass" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Re-enter Password</label>
              <input type="password" class="form-control" name="fcpass" placeholder="Password">
            </div><br>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
          </form>
        </div>
      </div>
    </div>
  </main>