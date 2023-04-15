<!DOCTYPE html>
<html lang="en">

<head>

<?php include './framework/header.php';?>
<link rel="stylesheet" href="./css/login.css">

</head>

  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- header -->

    <?php include './components/navbar.php';?>

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
      
    <?php include './components/footer.php';?>

  </footer>

  </body>
</html>
