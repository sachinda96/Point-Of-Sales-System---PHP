<?php
/**
 * Created by IntelliJ IDEA.
 * User: Amila Harshana
 * Date: 12/3/2017
 * Time: 8:35 PM
 */
$name=$_POST["username"];
$password=$_POST["password"];

$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO users VALUE ('$name','$password')");
    if ($result){
        echo "<script>window.location.replace(\"index.php\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}