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
    <link rel="icon" href="img/logowebc-modified.png" />
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

    <div class="padding text-center">
      <li>
        <p class="display-5">Romance</p>
        <hr />

        <!-- per baris -->

        <div class="row g-4">
          <!-- per kolom -->

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLJAaHfJZG1Dg908b9QR-C4zw-6j--RUN7ien0ZI1BrPtO_usvj0XCjDszFKD9k8bNP68&usqp=CAU"
                    class="card-img-top"
                    alt="Martial God Asura"
                    width="250px"
                    height="250px"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Martial God Asura</h5>
                    <p class="card-text">修罗武神</p>
                    <p class="card-text">Action, Romance</p>
                    <a href="MGA.php" class="btn btn-outline-light" style="margin-top: 25px;"
                      >Baca</a
                    >
              </div>
            </div>
          </div>
        </div>
      </li>
    </div>

    <!-- footer -->

    <?php include 'footer.php';?>

  </body>
</html>
