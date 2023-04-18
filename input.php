<?php
if ($isValid == 1 && !isset($_GET['id'])) {
    $queryInsert = $conn->prepare("INSERT INTO products(product_name, brand_id, release_year, price, product_image) VALUES (?, ?, ?, ?, ?)");
    $queryInsert->bind_param("siiis", $productName, $brand, $releaseYear, $price, $target_file);
    if ($queryInsert->execute()) {
        if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file)) {
            header("Location: index.php?page=dashboard");
        }
    }
}
?>