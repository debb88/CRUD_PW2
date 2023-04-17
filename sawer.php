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
        background: url("img/WEBcomic.png")
          center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>

    <!-- header -->

    <?php include './components/navbar.php';?>

    <!-- content -->

    <div class="padding">
      <div class="bor">
        <div class="padbor">
          <p class="display-6 text-center">Request</p>
          <form class="was-validated">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Title</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                required
              />
              <div class="invalid-feedback">
                Please enter a title in the textarea.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Author</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                required
              />
              <div class="invalid-feedback">
                Please enter a author in the textarea.
              </div>
            </div>
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label"
                >Country</label
              >
              <select class="form-select" required aria-label="select example">
                <option selected value="">Choose...</option>
                <option value="1">Japan</option>
                <option value="2">Korean</option>
                <option value="3">China</option>
              </select>
              <div class="invalid-feedback">Example invalid select country</div>
            </div>
            <button class="btn btn-outline-light" type="submit">Submit</button>
          </form>
        </div>
      </div>
      <br />
    </div>

    <!-- footer -->

    <?php include 'footer.php';?>

  </body>
</html>
