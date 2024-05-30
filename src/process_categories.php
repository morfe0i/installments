<?php

require_once 'db_connection.php';
require_once 'functions.php';

$columns = array('category_id', 'category_name');

$result = get_all_data($conn,$columns, 'categories');

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value= ' . $row['category_id'] . '>' . $row['category_name'] . '</option>';
    }
}