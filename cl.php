<!DOCTYPE html>
<html lang="en">

<head>

<?php include './framework/header.php';?>

    <!-- sorting -->

    <script type="text/javascript">
      function sortUnorderedList(ul, sortDescending) {
        if (typeof ul == "string") ul = document.getElementById(ul);

        var lis = ul.getElementsByTagName("LI");
        var vals = [];

        for (var i = 0, l = lis.length; i < l; i++) vals.push(lis[i].innerHTML);

        vals.sort();

        if (sortDescending) vals.reverse();

        for (var i = 0, l = lis.length; i < l; i++) lis[i].innerHTML = vals[i];
      }

      window.onload = function () {
        var desc = false;
        document.getElementById("test").onclick = function () {
          sortUnorderedList("list", desc);
          desc = !desc;
          return false;
        };
      };
    </script>

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

    <div class="padding">
      <div class="text-center">
        <input type="button" class="btn btn-outline-light" id="test" value="Sort List (click again to reverse)" />
        <ul id="list" style="margin-top: 30px;">

          <li>
            <p class="display-5" style="margin-top: 30px;">A</p>
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
            </div>
          </li>

          <li>
            <p class="display-5" style="margin-top: 30px;">B</p>
            <hr />

            <!-- per baris -->

            <div class="row g-4">

              <!-- per kolom -->

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
            </div>
          </li>

          <li>
            <p class="display-5" style="margin-top: 30px;">C</p>
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

          <li>
            <p class="display-5" style="margin-top: 30px;">J</p>
            <hr />

            <!-- per baris -->

            <div class="row g-4">

              <!-- per kolom -->

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
            </div>
          </li>

          <li>
            <p class="display-5" style="margin-top: 30px;">M</p>
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

          <li>
            <p class="display-5" style="margin-top: 30px;">O</p>
            <hr />

            <!-- per baris -->

            <div class="row g-4 row-cols-lg-6">

              <!-- per kolom -->

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
            </div>
          </li>


          <li>
            <p class="display-5" style="margin-top: 30px;">S</p>
            <hr />

            <!-- per baris -->

            <div class="row g-4">

              <!-- per kolom -->

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

        </ul>
      </div>
    </div>  

    <!-- footer -->

    <?php include './components/footer.php';?>

  </body>
</html>
