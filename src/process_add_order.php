<?php

require_once 'db_connection.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $item_id =  $_POST["item_id"];
    $instsllment_number = $_POST["instsllment_number"];
    $quantity = $_POST["quantity"];
}


$item_data = get_data($conn, 'items', 'item_id', $item_id)->fetch_assoc();

$columns = array('item_id','customer_id', 'start_date', 'installment_price', 'installments_number', 'installments_paid', 'order_quantity');
$installment_price = (((float) $item_data['item_price']) * $quantity);
$values = array( $item_id , $id , date('Y-m-d') ,$installment_price , (int) $instsllment_number , 0 , (int) $quantity);

$is_successful = insert_data($conn, 'orders', implode(',', $columns), $values);

if ($is_successful) {
    header("Location: ../public/success.php");
} else {
    header("Location: ../public/error.php");
}