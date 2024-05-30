<?php

require_once 'db_connection.php';
require_once 'functions.php';

$columns = array('item_id','item_name', 'item_price', 'category_id', 'image_path');
$result = get_all_data($conn, $columns, 'items');


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['item_id'] . "</td>";
        echo "<td><img src='../../assets/img/". $row['image_path'] ."' width='100' height='100'></td>";
        echo "<td>" . $row['item_name'] . "</td>";
        echo "<td>" . $row['item_price'] . " د.ع</td>";

        $category_result = get_data($conn, 'categories' , 'category_id', $row['category_id']);
        if ($category_result->num_rows > 0) {
            while ($row = $category_result->fetch_assoc()){
                echo "<td>" . $row['category_name'] . "</td>";
            }
        }
        echo "</tr>";
    }
}  else {
    echo "<tr><td colspan=\"4\">لا توجد بيانات</td></tr>";
}

$conn->close();