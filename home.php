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

    <!-- slidershow -->

    <div class="padding text-center">
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel"
        style="margin-bottom: 50px"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
              <a href="onepiece.php"><img src="img/OnePiece.png" class="d-block w-100" alt="One Piece" width="1200px"/></a>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <a href="jujutsu.php"><img src="img/jujutsu.png" class="d-block w-100" alt="Jujutsu Kaisen"/></a>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <a href="opm.php"><img src="img/OnePunchMan.png" class="d-block w-100" alt="One Punch Man" /></a>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- table -->

      <table
        class="table table-bordered table-dark table-hover table-striped table-responsive text-center"
      >
        <thead>
          <tr>
            <th scope="col">Rank</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genre</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><a href="onepiece.php">One Piece</a></td>
            <td>Eiichiro Oda</td>
            <td><a href="action.php">Action</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><a href="jujutsu.php">Jujutsu Kaisen</a></td>
            <td>Gege Akutami</td>
            <td><a href="action.php">Action</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><a href="opm.php">One Punch Man</a></td>
            <td>One, Yūsuke Murata</td>
            <td>
              <a href="action.php">Action</a>, <a href="comedy.php">Comedy</a>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td><a href="blackclover.php">Black Clover</a></td>
            <td>Yuki Tabata</td>
            <td>
              <a href="action.php">Action</a>, <a href="comedy.php">Comedy</a>
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td><a href="slamdunk.php">Slam Dunk</a></td>
            <td>Takehiko Inoue</td>
            <td>
              <a href="sport.php">Sport</a>, <a href="comedy.php">Comedy</a>,
              <a href="schoollife.php">School Life</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- content -->

    <div class="padding text-center" style="margin-top: 0px;">
      <li>
        <p class="display-6">Latest Updated</p>
        <hr style="margin-bottom: 30px" />

        <!-- per baris -->

        <div class="row g-4">
          

          <!-- per kolom -->

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="another.php"
                  class="btn btn-outline-light"
                  style="margin-top: 25px"
                  >Baca</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="blackclover.php"
                  class="btn btn-outline-light"
                  style="margin-top: 50px"
                  >Baca</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="jujutsu.php"
                  class="btn btn-outline-light"
                  style="margin-top: 50px"
                  >Baca</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="onepiece.php"
                  class="btn btn-outline-light"
                  style="margin-top: 50px"
                  >Baca</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a href="opm.php" class="btn btn-outline-light">Baca</a>
              </div>
            </div>
          </div>
        

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="slamdunk.php"
                  class="btn btn-outline-light"
                  style="margin-top: 25px"
                  >Baca</a
                >
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="CoH.php"
                  class="btn btn-outline-light"
                  style="margin-top: 3px"
                  >Baca</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-dark" style="width: 10rem; height: 500px">
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
                <a
                  href="MGA.php"
                  class="btn btn-outline-light"
                  style="margin-top: 25px"
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
