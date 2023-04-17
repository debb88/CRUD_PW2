<?php
session_start();
require_once './config/dbcon.php';
require_once './functions/cleaner.php';
$username = $password = "";
$emailErr = $passwordErr = "";
$isValid = 1;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username'])) {
    $emailErr = "Mohon isi username";
    $isValid = 0;
  } else {
    $username = cleaner($_POST['username']);
  }
  if (empty($_POST['password'])) {
    $passwordErr = "Mohon isi password";
    $isValid = 0;
  } else {
    $password = cleaner($_POST['password']);
  }

  if ($isValid == 1) {
    //Proses Login
    $queryLogin = $conn->prepare("SELECT username , email, password FROM user WHERE username = ?");
    $queryLogin->bind_param("s", $username);
    $queryLogin->execute();
    $resLogin = $queryLogin->get_result();
    $numResLogin = $resLogin->num_rows;
    if ($numResLogin > 0) {
      $rowResLogin = $resLogin->fetch_assoc();
      $verifPass = password_verify($password, $rowResLogin['password']);
      if ($verifPass) {
        $_SESSION['id_user'] = $rowResLogin['id'];
        $_SESSION['username'] = $rowResLogin['username'];
        $_SESSION['email'] = $rowResLogin['email'];
        header("Location: ./index.php?page=home");
        $queryLogin->close();
      } else {
        echo "<script>
                alert('Cridenial anda salah');
                </script>";
      }
    } elseif ($numResLogin = 0) {
      $queryLogin = $conn->prepare("SELECT username , password FROM admin WHERE username = ?");
      $queryLogin->bind_param("s", $username);
      $queryLogin->execute();
      $resLogin = $queryLogin->get_result();
      $numResLogin = $resLogin->num_rows;
      $rowResLogin = $resLogin->fetch_assoc();
      $verifPass = password_verify($password, $rowResLogin['password']);
      if ($verifPass) {
        $_SESSION['id'] = $rowResLogin['id'];
        $_SESSION['username'] = $rowResLogin['username'];
        header("Location: ./index.php?page=admin");
        $queryLogin->close();
      } else {
        echo "<script>
                alert('Cridenial anda salah');
                </script>";
      }
    }
  } else {
    echo "<script>
            alert('Cridenial anda salah');
            </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include './framework/header.php'; ?>
  <link rel="stylesheet" href="./css/login.css">

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <!-- header -->

  <?php include './components/navbar.php'; ?>

  <!-- content -->

  <div class="c">
    <h1 class="text-center">Log In</h1>
    <form name="login" onsubmit="return validate()" method="post">
      <label>Email</label><br>
      <input type="email" name="name"><br>
      <label>Password</label><br>
      <input type="password" name="wordpass"><br>
      <button type="submit" value="submit">Log in</button>
    </form>
    <p class="create">Don't have account? Create in <a href="create.php">here</a>.</p>
  </div>

  <!-- footer -->

  <footer>

    <?php include './components/footer.php'; ?>

  </footer>

</body>

</html>