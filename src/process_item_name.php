<?php

require_once 'db_connection.php';
require_once 'functions.php';

$columns = array('item_id', 'item_name');

$result = get_all_data($conn,$columns, 'items');

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value= ' . $row['item_id'] . '>' . $row['item_name'] . '</option>';
    }
}