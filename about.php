<!DOCTYPE html>
<html lang="en">

<head>

<?php include './framework/header.php';?>

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

    <div class="bgimg">
      <hr style="height: 400px" />
    </div>
      <div class="padding d-flex flex-wrap">
        <img
          src="img/pp.jpeg"
          width="200px"
          class="img-thumbnail text-center mx-auto d-block"
          alt="Debora Meiliana"
          style="position: absolute; margin-top: -200px"
        />
    
    <div class="marginabout">
      <h1>Debora Meiliana</h1>
      <hr>
      <p>NIM : 412021002<br>Jurusan : Informatika<br>Email : debora.412021002@civitas.ukrida.ac.id</p>
    </div>
    </div>
    <div style="margin-left: 5%; margin-right: 5%;">
      <hr>
      <h5>"Don't compare yourself with anyone in this world… if you do so, you are insulting yourself."</h5>
      <p style="opacity: 50%;">- Bill Gates</p>
      <div class="text-center mb-4">
        <a class="btn btn-outline-light" href="more.php" role="button">More About Company</a>
      </div>
    </div>

    <!-- footer -->

    <?php include './components/footer.php';?>

  </body>
</html>
