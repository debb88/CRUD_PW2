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

    <!-- style -->
    <style>
      body {
        background: url("https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_toystory_16x9_8461039f.jpeg")
          center fixed;
        background-size: cover;
      }
    </style>

    <!-- header -->

    <?php include 'navbar.php';?>

    <!-- content -->

    <div class="padding">
      <div class="bor padbor">
        <p class="display-6 text-center" style="margin-top: 200ps">
          Contact Us
        </p>
        <p>
          Email
          <a href="https://mail.google.com/" style="text-decoration: none">
            <i class="fa-regular fa-envelope icons"></i>
          </a>
          <br><a href="https://mail.google.com/">debora.412021002@civitas.ukrida.ac.id</a>
        </p>
        <p>
          Facebook
          <a href="https://www.facebook.com/" style="text-decoration: none">
            <i class="fa-brands fa-facebook-f icons"></i>
          </a>
          <br><a href="https://www.facebook.com/meily.meily.1238292/">debora.meiliana@yahoo.com</a>
        </p>
        <p>
          Youtube
          <a href="https://www.youtube.com/" style="text-decoration: none">
            <i class="fa-brands fa-youtube icons"></i>
          </a>
          <br><a href="https://www.youtube.com/channel/UCye2Dz1ecJjIuRFvqlyj0Cw">Debora Meiliana</a>
        </p>
        <p>
          Discord<a
            href="https://www.discord.com/"
            style="text-decoration: none">
            <i class="fa-brands fa-discord icons"></i>
          </a>
          <br><a href="https://discord.com/channels/@me">Debby#8290</a>
        </p>
        <p>
          Twitter<a
            href="https://www.twitter.com/"
            style="text-decoration: none">
            <i class="fa-brands fa-twitter icons"></i>
          </a>
          <br><a href="https://www.twitter.com/">Debora Meiliana</a>
        </p>
        <p>
          Instagram<a
            href="https://www.instagram.com/"
            style="text-decoration: none"
          >
            <i class="fa-brands fa-instagram icons"></i>
          </a>
          <br><a href="https://www.instagram.com/debora.meiliana/">debora.meiliana</a>
        </p>
      </div>
      <br /><br />
      <div class="bor">
        <div class="padbor">
          <p class="display-6 text-center">Feedback</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Subject</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
              >Description</label
            >
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>
          <button class="btn btn-outline-light" type="submit">Submit</button>
        </div>
      </div>
      <br />
    </div>

    <!-- footer -->

    <?php include 'footer.php';?>

  </body>
</html>
