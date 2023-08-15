<?php
include("class_function/class_crud.php");

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $table = "detail";
    $var = "user_email='$username' AND user_pass='$password'";
    $result = $obj->selectfun($table, $var);

    if (mysqli_num_rows($result) > 0) {
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid credentials";
    }
}
?>
