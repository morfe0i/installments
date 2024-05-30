<?php
require_once 'db_connection.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $fname = $_POST['customer_fname'];
    $lname = $_POST['customer_lname'];
    $phone_number = $_POST['customer_phone'];
    $gender = $_POST['customer_gender'];
    $city = $_POST['customer_city'];
}

$columns = array('fname', 'lname', 'phone_number', 'gender', 'city');
$values = array($fname, $lname , $phone_number, $gender, $city);
$is_successful;


for ($i=0; $i < count($columns); $i++) { 
    $is_successful = update_data($conn, 'customers', $columns[$i], $values[$i], 'customer_id', (int) $id);
}

if ($is_successful) {
    header("Location: ../public/customers/customer_profile.php?id=$id");
} else {
    header("Location: ../public/error.php");
}