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

    <div class="padding">
      <div class="d-flex flex-wrap">
        <img
          src="https://i.pinimg.com/736x/a0/9b/2e/a09b2eca90d800a22c62d50fbeb8ea48.jpg"
          class="img-thumbnail"
          alt="Jujutsu Kaisen"
          style="margin-right: 35px; width: 200px; height: 300px; margin-bottom: 20px;"
        />
        <div>
          <h1>JUJUTSU KAISEN</h1>
          <p>Author : Gege Akutami <br>Released : 05 Maret 2018 <br>Status : Ongoing <br>Country : <a href="japan.php">Japan</a><br>Genre : <a href="action.php">Action</a><br>Rating : 8.01 / 10</p>
        </div>
      </div>
      <hr />
      <h4 style="opacity: 70%">Sinopsis</h4>
          <p style="text-align: justify;">
            Yuuji adalah seorang jenius di jalur dan lapangan. Tapi dia memiliki
            minat nol, dia senang sebagai clam di Klub Penelitian Ilmu Ghaib.
            Meskipun Dia di Klub hanya untuk Iseng, Hal-hal menjadi serius
            ketika semangat nyata muncul di sekolah! Hidup akan menjadi sangat
            aneh Di SMA Negeri Sugisawa #3 !
          </p>
      <div id="navbar-example2" class="navbar bg-dark px-3 mb-3">
        <a class="navbar-brand text-white" style="text-decoration: none"
          >Chapter Jujutsu Kaisen</a
        >
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">ch awal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">ch akhir</a>
          </li>
        </ul>
      </div>
      <div
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true"
        class="scrollspy-example bg-dark p-3 rounded-2"
        tabindex="0"
        style="overflow: auto; height: 300px"
      >
        <p id="scrollspyHeading2"><a href="">Chapter 20</a></p>
        <p><a href="">Chapter 19</a></p>
        <p><a href="">Chapter 18</a></p>
        <p><a href="">Chapter 17</a></p>
        <p><a href="">Chapter 16</a></p>
        <p><a href="">Chapter 15</a></p>
        <p><a href="">Chapter 14</a></p>
        <p><a href="">Chapter 13</a></p>
        <p><a href="">Chapter 12</a></p>
        <p><a href="">Chapter 11</a></p>
        <p><a href="">Chapter 10</a></p>
        <p><a href="">Chapter 9</a></p>
        <p><a href="">Chapter 8</a></p>
        <p><a href="">Chapter 7</a></p>
        <p><a href="">Chapter 6</a></p>
        <p><a href="">Chapter 5</a></p>
        <p><a href="">Chapter 4</a></p>
        <p><a href="">Chapter 3</a></p>
        <p><a href="">Chapter 2</a></p>
        <p id="scrollspyHeading1"><a href="">Chapter 1</a></p>
      </div>
    </div>

    <!-- footer -->

    <?php include 'footer.php';?>

  </body>
</html>
