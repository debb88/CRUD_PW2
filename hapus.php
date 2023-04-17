<?php
require_once './config/dbcon.php';
if (isset($_GET['id'])) {
    $comicID = $_GET['id'];
    $queryDeleteProduct = $conn->prepare("DELETE FROM komik WHERE id = ?");
    $queryDeleteProduct->bind_param("i", $comicID);
    if ($queryDeleteProduct->execute()) {
        header('Location: ./index.php?page=dashboard');
    }
}
?>