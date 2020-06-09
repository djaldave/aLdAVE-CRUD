<?php
function insert_data($data){
    global $db;
    $sql = "INSERT INTO info ";
    $sql .="(name, address, birthdate, salary) ";
    $sql .= "VALUES (";
    $sql.="'". db_escape($db, $data['Name'])."',";
    $sql.="'". db_escape($db, $data['Address'])."',";
    $sql.="'". db_escape($db, $data['Birthday'])."',";
    $sql.="". db_escape($db, $data['Salary'])."";
    $sql .= ")";
    $result =mysqli_query($db, $sql);
    if($result) {
        return true;
    } else {
        // INSERT failed

        echo '<h4 style="color: #fff; text-align: center;" class="p-3"> 
                    <span class="text-warning"> Query Error [Unsuccessfully Submit]</span>: '.'please try again'. '</h4>                     
                     <a  class="btn m-3 btn-secondary btn-outline-warning mt-3 w-25" href="create.php" >&laquo; Back</a>';
        db_disconnect($db);
        exit;
    }

}
function display() {
    global $db;

    $sql = "SELECT * FROM info ";
    $sql .= "ORDER BY id ASC";
//    echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
function find_data_by_id($id) {
    global $db;
    $sql = "SELECT * FROM info ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
}

function update_data($data) {
    global $db;
    $sql = "UPDATE info SET ";
    $sql .= "name='" . db_escape($db, $data['Name']) . "', ";
    $sql .= "address='" . db_escape($db, $data['Address']) . "', ";
    $sql .= "birthdate='" . db_escape($db, $data['Birthday']) . "', ";
    $sql .= "salary=" . db_escape($db, $data['Salary']) . " ";
    $sql .= "WHERE id='" . db_escape($db, $data['id']) . "' ";
    $sql .= "LIMIT 1";
    echo $sql;
    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
        return true;
    } else {
        // UPDATE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }

}
function delete_subject($id) {
    global $db;

    $sql = "DELETE FROM info ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
        return true;
    } else {
        // DELETE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}