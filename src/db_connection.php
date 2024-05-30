<?php

$servername = 'localhost';
$username = 'root';
$password = '123456789';
$dbname = 'installments';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die('Error connecting to database');
}