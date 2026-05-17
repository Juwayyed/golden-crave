<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>

<?php


if (isset($_SESSION['adminname'])) {
  header("location: " . ADMINURL . "");
}

if (isset($_POST['submit'])) {
  if (empty($_POST['email']) or empty($_POST['password'])) {
    echo "<script>alert('Complete Required Information!');</script>";
  } else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = $connection->query("SELECT * FROM admins WHERE email='$email'");
    $login->execute();

    $fetch = $login->fetch(PDO::FETCH_ASSOC);

    if ($login->rowCount() > 0) {
      if (password_verify($password, $fetch['password'])) {
        //Start Session
        $_SESSION['adminname'] = $fetch['adminname'];
        $_SESSION['email'] = $fetch['email'];
        $_SESSION['user_id'] = $fetch['id'];
        header("location: " . ADMINURL . "");
      } else {
        echo "<script>alert('Email or password is wrong!');</script>";
      }
    } else {
      echo "<script>alert('Complete Required Information!');</script>";
    }
  }
}
?>

<div class="container mt-5">
  <div class="row justify-content-center">

    <div class="col-md-6 col-lg-4">

      <div class="card shadow">
        <div class="card-body p-4">

          <h3 class="card-title text-center mb-4">Login</h3>

          <form method="POST" action="login-admins.php">

            <div class="mb-3">
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email">
            </div>

            <div class="mb-3">
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password">
            </div>

            <button
              type="submit"
              name="submit"
              class="btn btn-primary w-100">
              Login
            </button>

          </form>

        </div>
      </div>

    </div>

  </div>
</div>

<?php require "../layouts/footer.php"; ?>