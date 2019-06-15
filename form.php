<?php
$servername = "demo.phpmyadmin.net";
$username = "root";
$password = "";
$dbname = "registrationform";
try {
    $conn = mysqli_connect($servername , $username , $password , $dbname);
    echo("successful in connection");
}   catch (MySQLi_Sql_Exception $ex) {
    echo("error in connection");
}
if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $register_query = "INSERT INTO `form`(`uname`, `password`, `email`) VALUES ($uname,$password,$email)";
    try {
        $register_result = mysqli_query($conn , $register_query);
        if ($register_result) {
            if(mysqli_affacted_rows($conn)> 0) {
                echo("registration successful");
            } else {
                echo("error in registration");
            }
        }
    } catch (Exception $ex) {
        echo("error".$ex->getMessage());
    }
}
?>