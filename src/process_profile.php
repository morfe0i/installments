<?php

$id = $_GET['id'];

require_once 'db_connection.php';
require_once 'functions.php';


$customer_data = array_values(get_data($conn, 'customers', 'customer_id', $id)->fetch_assoc());

$orders_array = get_data($conn, 'orders', 'customer_id', $id);