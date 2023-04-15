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

    <div class="bgoutlogo">
    <div class="bglogo">
      <hr style="height: 520px" />
    </div>
    </div>
    <div class="padding d-flex flex-wrap">
        <img
          src="img/logowebc.png"
          width="200px"
          class="img-thumbnail text-center mx-auto d-block"
          alt="Logo"
          style="position: absolute; margin-top: -200px"/>
        <div class="marginmore">
            <h1>WebComic</h1>
            <p style="opacity: 70%;">Est. Des 2022</p>
        </div>
    </div>
    <div class="marginmore2">
      <hr>
      <h5><b>Who We Are</b></h5>
      <p>WebComic merupakan sebuah website yang didirikan pada akhir tahun 2022 untuk membaca komik secara online dan gratis (dukung author komik dengan membelinya). 
        Alasan website ini dibangun karena kami melihat adanya peluang dalam industri ini. Komik dapat memenuhi imajinasi setiap pembacanya dan tak pandang umur, 
        mulai dari anak kecil hingga dewasa dapat membaca komik sesuai dengan rate umur masing-masing.</p>
      <h5><b>Careers</b></h5>
      <p>WebComic adalah perusahaan yang akan semakin berkembang dari hari ke hari. Kami membutuhkan orang-orang yang tekun dan 
        merupakan seorang translator dan editor untuk bergabung dengan tim kami, jika Anda berminat silahkan hubungi kami melalui email atau kontak lainnya.</p>
      <h5><b>Contact Us</b></h5>
      <p>Jika Anda memiliki feedback untuk dibagikan, jangan ragu untuk menghubungi kami dengan mengunjungi halaman <a href="contact.php">contact us</a>.</p>
    </div>
    <div class="text-center mb-4">
        <a class="btn btn-outline-light" href="about.php" role="button">Back</a>
    </div>

    <!-- footer -->

    <?php include 'footer.php';?>
  </body>
</html>
