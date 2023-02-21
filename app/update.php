<?php
$con = mysqli_connect("localhost", "root");
if (!$con) {
    echo ("Can't connect!");
}
mysqli_select_db($con, "inventory_system");

if ($_POST['action'] == 'edit') {
    $data = array(
        ':ItemName'  => $_POST['ItemName'],
    );
    $query = "
 UPDATE item 
 SET ItemName = :ItemName, 
 WHERE ItemID = :ItemID
 ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if ($_POST['action'] == 'delete') {
    $query = "
 DELETE FROM item 
 WHERE ItemID = '" . $_POST["ItemID"] . "'
 ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}
