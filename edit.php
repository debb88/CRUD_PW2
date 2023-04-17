<?php
require_once './config/dbcon.php';
require_once './functions/cleaner.php';
$comicName = $comicAuthor = $idUploader = " ";
$comicNameErr = $comicAuthorErr = $idUploaderErr = $idComicErr = $pictureComicErr = " ";
$isValid = 1;
$save_comic = 'uploads/';
$comicID = " ";
$pictureComic = " ";
if (isset($_GET['id'])) {
    $comicID = $_GET['id'];
    $queryGetData = $conn->prepare("SELECT * FROM komik WHERE id = ?");
    $queryGetData->bind_param("i", $comicID);
    $queryGetData->execute();
    $resGetData = $queryGetData->get_result();
    $rowGetData = $resGetData->fetch_assoc();
    $numRow = $resGetData->num_rows;
    if ($numRow > 0) {
        $comicName = $rowGetData['judul'];
        $comicAuthor = $rowGetData['author'];
        $idUploader = $rowGetData['idUploader'];
        $pictureComic = $rowGetData['picture'];
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ((isset($_GET['id']) && is_uploaded_file($_FILES['picture']['tmp_name'])) || !isset($_GET['id'])) {

        $rand_name = md5(uniqid(mt_rand(), true));

        $org_name = $save_comic . basename($_FILES["picture"]["name"]);

        $file_type = strtolower(pathinfo($org_name, PATHINFO_EXTENSION));

        $rand_name .= "." . $file_type;

        $target_file = $save_comic . $rand_name;
    }

    if (isset($_POST['submit'])) {

        //Nama Comic
        if (empty($_POST['judul'])) {
            $isValid = 0;
            $comicNameErr = "Mohon isi field nama comic";
        } else {
            $comicName = cleaner($_POST['judul']);
        }

        //Nama Author
        if (empty($_POST['author'])) {
            $isValid = 0;
            $comicAuthorErr = "Mohon isi nama author";
        } else {
            $comicAuthor = cleaner($_POST['author']);
        }

        //ID Uploader
        if (empty($_POST['idUploader'])) {
            $isValid = 0;
            $idUploaderErr = "Mohon mengisi Uploader ID";
        } else {
            $idUploader = cleaner($_POST['idUploader']);
        }

        // File Validation 
        if (!isset($_GET['id'])) {
            if (!is_uploaded_file($_FILES['picture']['tmp_name'])) {
                $isValid = 0;
                $pictureComicErr = "Mohon upload gambar comic";
            } else {
                if (getimagesize($_FILES['picture']['tmp_name']) === false) {
                    $isValid = 0;
                    $pictureComicErr = "File tidak dalam bentuk image";
                }
            }
        } else if (isset($_GET['id']) && is_uploaded_file($_FILES['picture']['tmp_name'])) {
            if (getimagesize($_FILES['picture']['tmp_name']) === false) {
                $isValid = 0;
                $pictureComicErr = "File tidak dalam bentuk image";
            }
        }
        if ($isValid == 1 && !isset($_GET['id'])) {
            $queryInsert = $conn->prepare("INSERT INTO komik(id, judul, author, idUploader, picture) VALUES (?, ?, ?, ?, ?)");
            $queryInsert->bind_param("ssis", $comicName, $comicAuthor, $idUploader, $target_file);
            if ($queryInsert->execute()) {
                if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file)) {
                    header("Location: index.php?page=admin");
                }
            }
        }
        //Update
        else if ($isValid && isset($_GET['id'])) {
            // gambar masih tetap
            if (!is_uploaded_file($_FILES['picture']['tmp_name'])) {
                $queryUpdate = $conn->prepare("UPDATE komik SET judul = ?, author= ?, idUploader= ? WHERE id = ?");
                $queryUpdate->bind_param("ssii", $comicName, $comicAuthor, $idUploader, $comicID);
                if ($queryUpdate->execute()) {
                    header("Location: index.php?page=admin");
                }
            } else {
                $queryUpdate = $conn->prepare("UPDATE komik SET judul = ?, author= ?, idUploader= ?, picture = ? WHERE id = ?");
                $queryUpdate->bind_param("ssisi", $comicName, $comicAuthor, $idUploader, $target_file, $comicID);
                if ($queryUpdate->execute()) {
                    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
                        unlink("./" . $file_dir);
                        header("Location: index.php?page=admin");
                    }
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

include './css/style.php';
include './css/login.php';
include './css/create.php';
include './framework/header.php';
include './functions/cleaner.php';
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
                <label class="form-label" for="judul">Comic Name</label>
                <input type="text" name="productName" id="productName" class="form-control form-control-lg"
                    value="<?= $productName ?>" />
                <small class="text-danger ml-5" id="productError">
                    <?= $productErr ?>
                </small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="author">Author Name</label>
                <select class="form-select form-select-lg" name="brand">
                    <?php
                    $queryAuthor = $conn->prepare("SELECT author FROM komik");
                    $queryAuthor->execute();
                    $resAuthor = $queryAuthor->get_result();
                    while ($data = $resAuthor->fetch_assoc()) {
                        if ($data['id'] === $comicAuthor) {
                            ?>
                            <option value="<?= $data['id'] ?>" selected><?= $data['description'] ?></option>
                            <?php
                        } else {
                            ?>
                            <option value="<?= $data['id'] ?>"><?= $data['description'] ?></option>
                            <?php
                        }
                    }
                    $conn->close();
                    ?>
                </select>
            </div>
        </form>
    </div>
</body>

</html>

<script>
    $(document).ready(function () {
        $('#productImage').on('change', function () {
            const file = document.getElementById("productImage").files[0];
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