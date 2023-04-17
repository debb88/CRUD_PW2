<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="img/logowebc-modified.png" />
  <script src="https://kit.fontawesome.com/4cd8de584e.js" crossorigin="anonymous"></script>
  <title>WebComic</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <!-- header -->

  <?php include './components/navbar.php'; ?>

  <!-- logic -->

  <?php
  require_once './config/dbcon.php';
  require_once './functions/cleaner.php';
  include './framework/header.php';

  //initialize all variable
  $email = $username = $password = "";
  $regex = '/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
  $passHash = "";
  $emailErr = $usernameErr = $passwordErr = "";
  $isValid = 1;

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['signUp'])) {

      // Validasi Email
      if (empty($_POST['email'])) {
        $emailErr = 'Mohon isi field Email';
        $isValid = 0;
      } else {
        $email = cleaner($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Format email belum sesuai";
          $isValid = 0;
        } else {
          // TODO 1: Check if email is exist or not
          $queryCheckEmail = $conn->prepare("SELECT email FROM user WHERE email = ?");
          $queryCheckEmail->bind_param("s", $email);
          $queryCheckEmail->execute();
          $resCheckEmail = $queryCheckEmail->get_result();
          $resCheckEmail = $resCheckEmail->num_rows;
          if ($resCheckEmail > 0) {
            $isValid = 0;
            $emailErr = "Sorry email already in use";
            $conn->close();
          }
        }
      }

      // Validasi Username
      if (empty($_POST['username'])) {
        $usernameErr = "Mohon isi field username";
        $isValid = 0;
    } else {
        $username = cleaner($_POST['username']);
        if (strlen($username) < 5) {
            $usernameErr = "Panjang username harus lebih dari 5 karakter";
            $isValid = 0;
        }
    }

      // Validasi Password 
      if (empty($_POST['password'])) {
        $passwordErr = "Mohon isi field password";
        $isValid = 0;
      } else {
        $password = cleaner($_POST['password']);
        if (!preg_match($regex, $password)) {
          $passwordErr = "Password paling tidak memiliki 8 huruf, 1 huruf besar dan 1 digit angka";
          $isValid = 0;
        }
      }

      // Bila Valid 
      if ($isValid == 1) {
        $passHash = password_hash($password, PASSWORD_BCRYPT);
        // TODO 2 : Insert to database
        $queryRegister = $conn->prepare("INSERT INTO user(email, username, password) VALUES (?,?,?)");
        $queryRegister->bind_param("sss", $email, $username, $passHash);
      }
    }
  }

  ?>

  <!-- content -->

  <div class="c">
    <h1 class="text-center">Create</h1>
    <form method="POST">
      <label>Email</label><br>
      <input type="email" name="email" id="email" value="<?= $email ?>">
      <small class="text-danger" id="emailError"><?= $emailErr ?></small>
      <br>
      <label>Username</label><br>
      <input type="text" name="username" id="username" value="<?= $username ?>">
      <small class="text-danger" id="usernameError"><?= $usernameErr ?></small>
      <br>
      <label>Password</label><br>
      <input type="password" name="password" id="password" value="<?= $password ?>">
      <small class="text-danger" id="passwordError"><?= $passwordErr ?></small>
      <br>
      <div class="form-check cb">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          <p>Agree</p>
        </label>
      </div>
      <p class="term">*for terms and conditions</p>
      <button type="submit" value="submit" id="btn-kirim" name="signUp">Create</button>
    </form>
    <p class="create">Have account? Sign in <a href="login.php">here</a>.</p>
  </div>

  <?php
    if ($queryRegister->execute()) {
    ?>

        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Registrasi berhasil silahkan login'
            }).then(function() {
                document.location.href = './index.php';
            })
        </script>;
    <?php
        $conn->close();
    }

    ?>

  <!-- footer -->

  <footer>
    <?php include './components/footer.php'; ?>
  </footer>

</body>

</html>