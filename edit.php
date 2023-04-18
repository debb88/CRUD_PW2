<?php
require_once '.config/dbcon.php';
require_once '.functions/cleaner.php';
$comicName = $comicAuthor = $IDUploader = " ";
$comicNameErr = $comicAuthorErr = $IDUploaderErr = $pictureErr = " ";
$isValid = 1;
$save_dir = ' uploads/';
$picture = " ";
$comicID = " ";
if (isset($_GET['id'])) {
    $comicID = $_GET['id'];
    $queryGetData = $conn->prepare("SELECT * FROM komik WHERE id = ?");
    $queryGetData->bind_param("i", $comicID);
    $queryGetData->execute();
    $resGetData = $queryGetData->get_result();
    $rowGetData = $resGetData->fetch_assoc();
    $numrow = $resGetData->num_rows;

    if ($numrow > 0) {
        $comicName = $rowGetData['judul'];
        $comicAuthor = $rowGetData['author'];
        $IDUploader = $rowGetData['idUploader'];
        $picture = $rowGetData['picture'];
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ((isset($_GET['id']) && is_uploaded_file($_FILES['picture']['tmp_name'])) || !isset($_GET['id'])) {

        $rand_name = md5(uniqid(mt_rand(), true));

        $org_name = $save_dir . basename($_FILES["picture"]["judul"]);

        $file_type = strtolower(pathinfo($org_name, PATHINFO_EXTENSION));

        $rand_name .= "." . $file_type;

        $target_file = $save_dir . $rand_name;
    }
    if (isset($_POST['submit'])) {

        // Validation
        if (empty($_POST['comicName'])) {
            $isValid = 0;
            $productErr = "Mohon isi field nama komik";
        } else {
            $comicName = cleaner($_POST['comicName']);
        }

        if (empty($_POST['comicAuthor'])) {
            $isValid = 0;
            $productErr = "Mohon isi field nama author";
        } else {
            $comicName = cleaner($_POST['comicAuthor']);
        }

        if (empty($_POST['IDUploader'])) {
            $isValid = 0;
            $productErr = "Mohon isi ID Uploader";
        } else {
            $comicName = cleaner($_POST['IDUploader']);
        }
    }

    //File Validation
    if (!isset($_GET['id'])) {
        if (!is_uploaded_file($_FILES['picture']['tmp_name'])) {
            $isValid = 0;
            $pictureErr = "Mohon upload gambar komik";
        } else {
            if (getimagesize($_FILES['picture']['tmp_name']) === false) {
                $isValid = 0;
                $pictureErr = "File tidak dalam bentuk image";
            }
        }
    } else if (isset($_GET['id']) && is_uploaded_file($_FILES['picture']['tmp_name'])) {
        if (getimagesize($_FILES['picture']['tmp_name']) === false) {
            $isValid = 0;
            $pictureErr = "File tidak dalam bentuk image";
        }
    }
    //Insert Data
    if ($isValid == 1 && !isset($_GET['id'])) {
        $queryInsert = $conn->prepare("INSERT INTO komik(judul,author,idUploader,picture) VALUES (?, ?, ?, ?, ?)");
        $queryInsert->bind_param("siiis", $comicName, $comicAuthor, $IDUploader, $picture);
        if ($queryInsert->execute()) {
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
                header("Location: home.php?page=admin");
            }
        }
    } else if ($isValid && isset($_GET['id'])) {
        // Gambar Diganti (UPDATE)
        if (!is_uploaded_file($_FILES['picture']['tmp_name'])) {
            $queryUpdate = $conn->prepare("UPDATE komik SET judul = ?, author = ?, idUploader = ? WHERE id = ?");
            $queryUpdate->bind_param("ssii", $comicName, $comicAuthor, $IDUploader, $comicID);
            if ($queryUpdate->execute()) {
                header("Location: home.php?page=admin");
            }
        } else {
            $queryUpdate = $conn->prepare("UPDATE komik SET judul = ?, author = ?, idUploader = ?, picture = ? WHERE id = ?");
            $queryUpdate->bind_param("siiisi", $comicName, $comicAuthor, $IDUploader, $picture, $comicID);
            if ($queryUpdate->execute()) {
                if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file)) {
                    unlink("./" . $file_dir);
                    header("Location: home.php?page=admin");
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_GET['id'])) {
    $head = "Edit Product";
} else {
    $head = "Add Product";
}

include './framework/bootstrap.php';
?>

<body class="back-color">
    <?php
    include './components/navbar.php';
    ?>
    <div class="container mt-5 pt-4">
        <h1 class="fw-bold text-center">
            <?= $head ?>
        </h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="comicName">Comic Name</label>
                <input type="text" name="comicName" id="comicName" class="form-control form-control-lg"
                    value="<?= $comicName ?>" />
                <small class="text-danger ml-5" id="ComicNameError">
                    <?= $comicNameErr ?>
                </small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="Author">Author Name</label>
                <select class="form-select form-select-lg" name="Author">
                    <?php
                    $queryBrand = $conn->prepare("SELECT author FROM komik");
                    $queryBrand->execute();
                    $resBrand = $queryBrand->get_result();
                    while ($data = $resBrand->fetch_assoc()) {
                        if ($data['id'] === $brand) {
                            ?>
                            <option value="<?= $data['id'] ?>" selected><?= $data['author'] ?></option>
                            <?php
                        } else {
                            ?>
                            <option value="<?= $data['id'] ?>"><?= $data['author'] ?></option>
                            <?php
                        }
                    }
                    $conn->close();
                    ?>
                </select>
                <small class="text-danger ml-5" id="AuthorError">
                    <?= $comicAuthorErr ?>
                </small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="releaseYear">ID Uploader</label>
                <input type="number" name="IdUploader" id="idUploader" class="form-control form-control-lg"
                    value="<?= $releaseYear ?>" />
                <small class="text-danger ml-5" id="IdUploaderError">
                    <?= $IDUploaderErr ?>
                </small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="productImage">Comic Image</label>
                <input type="file" name="picture" id="picture" class="form-control form-control-lg" />
                <small class="text-danger ml-5" id="pictureError">
                    <?= $pictureErr ?>
                </small>
            </div>
            <img class="prev-img" id="prev-img" src="<?= $picture ?>">
            <div class="form-outline form-dark mb-4 text-center">
                <input type="submit" name="submit" class="btn btn-outline-success px-5 py-2" />
            </div>
        </form>
    </div>
</body>

</html>

<script>
    $(document).ready(function () {
        $('#pciture').on('change', function () {
            const file = document.getElementById("picture").files[0];
            const image = URL.createObjectURL(file);
            $('#prev-img').attr('src', image);
        })
    })
</script>
<style>
    .back-color {
        background-color: #EEEEEE;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .prev-img {
        width: 200px;
        height: 200px;
    }
</style>