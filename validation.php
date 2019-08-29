<?php
session_start();

$db = mysqli_connect("localhost", "root", "17movsisyan03");

mysqli_select_db($db, 'userregistration');

$username = $_POST['username'];
$password = $_POST['password'];

$sql_up = "SELECT * FROM usertable WHERE username = '$username' && password = '$password'";

$result = mysqli_query($db, $sql_up);

if (mysqli_num_rows($result) > 0) {
    header('location: index.php');
} else {
    header('location: login.php');
}
?>