<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './framework/header.php';
  require_once './config/dbcon.php';
  ?>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <!-- header -->

  <?php include './components/navbar.php'; ?>

  <!-- content -->


  <div class="bgimg">
    <hr style="height: 400px" />
  </div>
  <div class="padding d-flex flex-wrap">
    <img src="img/pp.jpeg" width="200px" class="img-thumbnail text-center mx-auto d-block" alt="Debora Meiliana"
      style="position: absolute; margin-top: -200px" />

    <div class="marginabout">
      <h1>Debora Meiliana</h1>
      <hr>
      <p>NIM : 412021002<br>Jurusan : Informatika<br>Email : debora.412021002@civitas.ukrida.ac.id</p>
    </div>
  </div>
  <div style="margin-left: 5%; margin-right: 5%;">
    <hr>
    <h5>"Don't compare yourself with anyone in this world… if you do so, you are insulting yourself."</h5>
    <p style="opacity: 50%;">- Bill Gates</p>
    <div class="text-center mb-4">

      <?php
      if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
          echo "Data berhasil di input.";
        } else if ($pesan == "update") {
          echo "Data berhasil di update.";
        } else if ($pesan == "hapus") {
          echo "Data berhasil di hapus.";
        }
      }
      ?>


      <br />
      <a class="tombol" href="edit.php">+ Tambah Data Baru</a>

      <table class="table table-bordered table-dark table-hover table-striped table-responsive text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">IDUploader</th>
            <th scope="col">Options</th>
          </tr>

          <?php

          $num = 1;
          $queryData = $conn->query("SELECT judul,
                                        author,
                                        idUploader
                                        FROM komik");
          while ($data = $queryData->fetch_assoc()) {
            ?>
            <tr>
              <th scope="row">
                <?= $num ?>
              </th>
              <td>
                <?= $data['judul'] ?>
              </td>
              <td>
                <?= $data['author'] ?>
              </td>
              <td>
                <?= $data['idUploader'] ?>
              </td>
              <td><a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
              </td>
              <?php
              $num++;
          }
          ?>
        </thead>
      </table>
    </div>
  </div>
  </div>

  <!-- footer -->

  <?php include './components/footer.php'; ?>

</body>

</html>