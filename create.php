<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="img/logowebc-modified.png" />
    <script src="validation.js"></script>
    <script
      src="https://kit.fontawesome.com/4cd8de584e.js"
      crossorigin="anonymous"
    ></script>
    <title>WebComic</title>
  </head>

  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- header -->

    <?php include 'navbar.php';?>

    <!-- content -->

    <div class="c">
      <h1 class="text-center">Create</h1>
      <form name="login" class="was-validated g-3" onsubmit="return validate()" method="post">
      <label>Email</label><br>
      <input type="email" name="name"><br>
      <label>Password</label><br>
      <input type="password" name="wordpass"><br>
      <div class="form-check cb">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          <p>Agree</p>
        </label>
      </div>
      <p class="term">*for terms and conditions</p>
      <button type="submit" value="submit">Create</button>
    </form>
    <p class="create">Have account? Sign in <a href="login.php">here</a>.</p>
    </div>

    <!-- footer -->

    <footer><?php include 'footer.php';?></footer>

  </body>
</html>
