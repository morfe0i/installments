<?php 

require_once 'db_connection.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $order_id = $_POST["order-id"];
    $cust_id = $_POST["cust-id"];
    $inst_paid = (int) $_POST["inst-paid"];
    $name = $_POST["name"];
}


$actions = array('customer-profile','delete-customer', 'edit-item', 'delete-item','record-installment', 'delete-order');

switch ($name) {
    case $actions[0]:
        header("Location: ../public/customers/customer_profile.php?id=$id");
        break;

    case $actions[1]:
        if (delete_data($conn, 'customers', 'customer_id', $id)) {
            header("Location: ../public/customers/view_customers.php");
        } else {
            header("Location: ../public/error.php");
        }
        break;

    case $actions[2]:
        # code...
        break;

    case $actions[3]:
        if (delete_data($conn, 'items', 'item_id', $id)) {
            header("Location: ../public/items/edit_items.php");
        } else {
            header("Location: ../public/error.php");
        }
        break;

    case $actions[4]:
        if (update_data($conn, 'orders','installments_paid', (((int) $inst_paid) + 1), 'order_id', $order_id)) {
            update_data($conn, 'orders','last_payment_date', date('Y-m-d') ,'order_id', $order_id);
            header("Location: ../public/customers/customer_profile.php?id=$cust_id");
        } else {
            header("Location: ../public/error.php");
        }
        break;

    case $actions[5]:
        if (delete_data($conn, 'orders', 'order_id', $order_id)) {
            header("Location: ../public/customers/customer_profile.php?id=$cust_id");
        } else {
            header("Location: ../public/error.php");
        }
        break;

    default:
        header("Location: ../public/error.php");
        break;
}