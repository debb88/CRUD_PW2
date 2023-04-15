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
        <p class="display-5">Japan</p>
        <hr />

        <!-- per baris -->

        <div class="row g-4">
          <!-- per kolom -->

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
                <img
                    src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1492824935l/13494466._SX318_.jpg"
                    class="card-img-top"
                    alt="Another"
                    width="250px"
                    height="250px"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Another</h5>
                    <p class="card-text">Yukito Ayatsuji</p>
                    <p class="card-text">Horror, School Life</p>
                    <a href="another.php" class="btn btn-outline-light" style="margin-top: 25px;"
                      >Baca</a
                    >
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
                <img
                src="https://comicvine.gamespot.com/a/uploads/scale_small/6/67663/7304828-24.jpg"
                class="card-img-top"
                alt="Black Clover"
                width="250px"
                height="250px"
              />
              <div class="card-body">
                <h5 class="card-title">Black Clover</h5>
                <p class="card-text">Yuki Tabata</p>
                <p class="card-text">Action, Comedy</p>
                <a href="blackclover.php" class="btn btn-outline-light" style="margin-top: 50px;"
                  >Baca</a
                >
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
                <img
                src="https://i.pinimg.com/736x/a0/9b/2e/a09b2eca90d800a22c62d50fbeb8ea48.jpg"
                class="card-img-top"
                alt="Jujutsu Kaisen"
                width="250px"
                height="250px"
              />
              <div class="card-body">
                <h5 class="card-title">Jujutsu Kaisen</h5>
                <p class="card-text">Gege Akutami</p>
                <p class="card-text">Action</p>
                <a href="jujutsu.php" class="btn btn-outline-light" style="margin-top: 50px;"
                  >Baca</a
                >
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
              <img
                src="https://cdn.idntimes.com/content-images/duniaku/post/20210827/one-piece-volume-100-full-2eb511e3078b0093a49192696b05e64e.jpg"
                class="card-img-top"
                alt="One Piece"
                width="250px"
                height="250px"
              />
              <div class="card-body">
                <h5 class="card-title">One Piece</h5>
                <p class="card-text">Eiichiro Oda</p>
                <p class="card-text">Action</p>
                <a href="onepiece.php" class="btn btn-outline-light" style="margin-top: 50px;"
                  >Baca</a
                >
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
              <img
                src="https://upload.wikimedia.org/wikipedia/id/c/c3/OnePunchMan_manga_cover.png"
                class="card-img-top"
                alt="One Punch Man"
                width="250px"
                height="250px"
              />
              <div class="card-body">
                <h5 class="card-title">One Punch Man</h5>
                <p class="card-text">One, Yūsuke Murata</p>
                <p class="card-text">Action, Comedy</p>
                <a href="opm.php" class="btn btn-outline-light"
                  >Baca</a
                >
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px;">
              <img
                src="https://i1.wp.com/halcyonrealms.com/blogpics/slamdunknew09.jpg?resize=500%2C780"
                class="card-img-top"
                alt="Slam Dunk"
                width="250px"
                height="250px"
              />
              <div class="card-body">
                <h5 class="card-title">Slam Dunk</h5>
                <p class="card-text">Takehiko Inoue</p>
                <p class="card-text">Sport, Comedy, School Life</p>
                <a href="slamdunk.php" class="btn btn-outline-light" style="margin-top: 25px;"
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
