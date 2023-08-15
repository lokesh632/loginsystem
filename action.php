<?php
include("class_function/class_crud.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $table1 = "detail";
    $var = "(`user_name`,`user_email`,`user_pass`,`user_address`,`user_phone`)
            VALUES ('$name', '$email', '$Password', '$address', '$phone')";

    $result = $obj->insertfunction($table1, $var);

    if ($result) {
        echo "Successfully completed";
    } else {
        echo "There is a problem";
    }
}
?>
