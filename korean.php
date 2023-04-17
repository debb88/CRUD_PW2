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

    <div class="padding text-center">
      <li>
        <p class="display-5">Korean</p>
        <hr />

        <!-- per baris -->

        <div class="row g-4">
          <!-- per kolom -->

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
                <img
                    src="https://luminousscans.com/wp-content/uploads/2021/05/chroCover02.png"
                    class="card-img-top"
                    alt="Chronicles of Heavenly"
                    width="250px"
                    height="250px"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Chronicles of Heavenly</h5>
                    <p class="card-text">Il-Hwang, Gom-Guk</p>
                    <p class="card-text">Action, Drama</p>
                    <a href="CoH.php" class="btn btn-outline-light" style="margin-top: 3px;"
                      >Baca</a
                    >
              </div>
            </div>
          </div>
        </div>
      </li>
    </div>

    <!-- footer -->

    <?php include './components/footer.php';?>

  </body>
</html>
