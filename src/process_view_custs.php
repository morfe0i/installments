<?php

require_once 'db_connection.php';
require_once 'functions.php';

$columns = array("customer_id", "fname", "lname", "phone_number");

$result = get_all_data($conn,$columns, 'customers');

if ($result-> num_rows > 0) {
    while ($row = $result ->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['customer_id'] . "</td>";
        echo "<td>" . $row['fname'], ' ' , $row['lname'] . "</td>";
        echo "<td>" . $row['phone_number'] . "</td>";
        echo "<td>";

        echo "<form action=\"../../src/process_action.php\" method=\"post\">";
        echo "<input type=\"hidden\" name=\"id\" value=\"" . $row['customer_id'] . "\">";
        echo "<input type=\"hidden\" name=\"name\" value=\"customer-profile\">";
        echo "<button type=\"submit\" class=\"btn btn-outline-secondary\">بروفايل العميل</button>";
        echo "</form>";

        echo "<form action=\"../../src/process_action.php\" method=\"post\">";
        echo "<input type=\"hidden\" name=\"id\" value=\"" . $row['customer_id'] . "\">";
        echo "<input type=\"hidden\" name=\"name\" value=\"delete-customer\">";
        echo "<button type=\"submit\" class=\"btn btn-danger\">حذف العميل</button>";
        echo "</form>";

        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan=\"4\">لا توجد بيانات</td></tr>";
}

$conn->close();