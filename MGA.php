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

    <div class="padding">
      <div class="d-flex flex-wrap">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLJAaHfJZG1Dg908b9QR-C4zw-6j--RUN7ien0ZI1BrPtO_usvj0XCjDszFKD9k8bNP68&usqp=CAU"
          class="img-thumbnail"
          alt="Martial God Asura"
          style="margin-right: 35px; width: 200px; height: 300px; margin-bottom: 20px;"
        />
        <div>
          <h1>MARTIAL GOD ASURA</h1>
          <p>Author : 修罗武神 <br>Released : 2020 <br>Status : Ongoing <br>Country : <a href="china.php">China</a><br>Genre : <a href="action.php">Action</a>,
            <a href="romance.php">Romance</a><br>Rating : 8.01 / 10</p>
        </div>
      </div>
      <hr />
      <h4 style="opacity: 70%">Sinopsis</h4>
          <p style="text-align: justify">
            Suatu malam fenomena misterius yang tidak dapat dijelaskan terjadi
            di sembilan provinsi. Lima tahun kemudian Chu Feng, murid luar biasa
            dari sekolah Azure Dragon, membangunkan salah satu dari sembilan
            binatang petir misterius. Dan menemukan telur yang tersegel di dalam
            dirinya.
          </p>
      <div id="navbar-example2" class="navbar bg-dark px-3 mb-3">
        <a class="navbar-brand text-white" style="text-decoration: none"
          >Chapter Martial God Asura</a
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

    <?php include './components/footer.php';?>

  </body>
</html>
