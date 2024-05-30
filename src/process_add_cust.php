<?php

require_once 'db_connection.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['customer_fname'];
    $lname = $_POST['customer_lname'];
    $phone_number = $_POST['customer_phone'];
    $city = $_POST['customer_city'];
    $gender = $_POST['customer_gender'];
}

$values = array($fname, $lname, $phone_number, $city, $gender);

$is_successful = insert_data($conn, 'customers', 'fname, lname , phone_number, gender,city', $values);

if ($is_successful) {
    header("Location: ../public/success.php");
} else {
    header("Location: ../public/error.php");
}

$conn -> close();