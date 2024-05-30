<?php 


function delete_data($conn, $table_name, $id_column ,$id){
    if ($table_name == 'customers' ) {
        $delete = "DELETE FROM orders WHERE customer_id = ?";
        $stmt = $conn->prepare($delete);
        $stmt->bind_param('i', $id);
        $stmt->execute();
    } else if ($table_name == 'items'){
        $delete = "DELETE FROM orders WHERE customer_id = ?";
        $stmt = $conn->prepare($delete);
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }
    $delete = "DELETE FROM $table_name WHERE $id_column = ?";
    $stmt = $conn->prepare($delete);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function insert_data($conn , $table_name , $column_names, $values){
    $values_placeholders = implode(',', array_fill(0, count($values), '?'));
    $insert = "INSERT INTO $table_name (" . $column_names . ") VALUES (" . $values_placeholders . ")";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param(str_repeat('s', count($values)), ...$values);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function get_all_data($conn, $columns, $table_name) {
    $columns_str = implode(',', $columns);
    $select = "SELECT $columns_str FROM $table_name";
    $result = $conn->query($select);
    return $result;
}

function get_data($conn, $table_name, $id_col_name, $id_value) {
    $select = "SELECT * FROM $table_name WHERE $id_col_name = $id_value";
    $result = $conn->query($select);
    return $result;
}

function get_data_where($conn, $table_name, $where_stmt) {
    $select = "SELECT * FROM $table_name WHERE $where_stmt";
    $result = $conn->query($select);
    return $result;
}

function update_data($conn, $table_name, $col_name, $col_value, $id_name, $id_value) {
    $update = "UPDATE $table_name SET $col_name = ? WHERE $id_name = ?";
    $stmt = $conn->prepare($update);
    

    if (is_int($col_value)) {
        $param_type = 'i';
    } elseif (is_float($col_value)) {
        $param_type = 'd';
    } else {
        $param_type = 's';
    }

    $stmt->bind_param($param_type . 'i', $col_value, $id_value);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
