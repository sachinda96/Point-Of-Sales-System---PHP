<?php
/**
 * Created by IntelliJ IDEA.
 * User: Amila Harshana
 * Date: 12/3/2017
 * Time: 8:09 PM
 */

session_start();

$user = $_POST['username'];
$password = $_POST['password'];


$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $resultSet= mysqli_query($connection, "select * from users WHERE name='$user' AND password='$password'");
    $count= mysqli_num_rows($resultSet);
    if ($count!=0){
        $_SESSION['old'] = 'true';
        echo "<script>
        window.location.replace('index1.php');
        </script>";
    }else{
        echo "<script>
        window.location.replace('index.php');
        </script>";
    }
}