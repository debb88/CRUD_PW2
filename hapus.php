<?php
require_once './config/dbcon.php';
if (isset($_GET['id'])) {
    $comicID = $_GET['id'];
    $queryDeleteComic = $conn->prepare("DELETE FROM komik WHERE id = ?");
    $queryDeleteComic->bind_param("i", $comicID);
    if ($queryDeleteComic->execute()) {
        header('Location: ./home.php?page=admin');
    }
}
?>