<?php

require_once 'db_connection.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST["item_name"];
    $item_price = $_POST["item_price"];
    $category_id = $_POST["category"];

    // image upload
    $dir = '../assets/img/';
    $filename = $_FILES['item_image']['name'];
    $destination = $dir . $filename;
    move_uploaded_file($_FILES['item_image']['tmp_name'], $destination);

}

$columns = array('item_name', 'item_price', 'category_id', 'image_path');
$values = array($item_name, $item_price, $category_id, $filename);

$is_successful = insert_data($conn, 'items', implode(',', $columns), $values);

if ($is_successful) {
    header("Location: ../public/success.php");
} else {
    header("Location: ../public/error.php");
}

$conn -> close();