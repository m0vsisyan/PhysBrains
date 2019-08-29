<?php
session_start();

$db = mysqli_connect("localhost", "root", "17movsisyan03");

mysqli_select_db($db, 'userregistration');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql_u = "SELECT * FROM usertable WHERE username = '$username'";
$sql_e = "SELECT * FROM usertable WHERE email = '$email'";

$result_u = mysqli_query($db, $sql_u);
$result_e = mysqli_query($db, $sql_e);

if (mysqli_num_rows($result_u) > 0) {
    echo "Տվյալ անունը զբաղեցված է !";
} else if (mysqli_num_rows($result_e) > 0) {
    echo "Տվյալ էլեկտրոնային հասցեն զբաղցված է !";
} else {
    $reg = "INSERT INTO usertable(username, password, email) VALUES ('$username', '$password', '$email')";
    mysqli_query($db, $reg);
    echo "Registration Successful";
}
?>