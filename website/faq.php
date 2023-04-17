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

    <!-- style -->
    <style>
      body {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgb(60, 60, 60, 0.7)),
        url("img/WEBcomic.png") center fixed;
        background-size: cover;
      }

      li {
        list-style-type: unset;
      }

      p {
        margin-top: 30px;
        font-size: 20px;
      }
    </style>

    <!-- header -->

    <?php include './components/navbar.php';?>

    <!-- content -->

    <div class="padding">
      <div class="text-center display-3"><b>Frequently Asked Questions</b></div>
      <hr>
      <ol>
        <li>
            <p><b>Apa itu WebComic?</b><br>Webcomic merupakan sebuah website untuk membaca komik secara online dan gratis.</p>
        </li>
        <li>
            <p><b>Bagaimana cara mengunduh komik?</b><br>Untuk saat ini Webcomic tidak menyediakan fitur untuk mengunduh, Anda dapat membacanya secara online.</p>
        </li>
        <li>
            <p><b>Apakah Webcomic memperoleh profit?</b><br>Ya, Webcomic menghasilkan profit melalui donasi dari para pembaca yang ikhlas memberinya.</p>
        </li>
      </ol>
    </div>

    <!-- footer -->

    <?php include './components/footer.php';?>

  </body>
</html>
