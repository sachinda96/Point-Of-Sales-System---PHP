<?php
/**
 * Created by IntelliJ IDEA.
 * User: Amila Harshana
 * Date: 12/2/2017
 * Time: 11:10 PM
 */
$id=$_POST["Customer-id"];
$name=$_POST["Customer-name"];
$address=$_POST["Customer-Address"];

$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO Customer VALUE ('$id','$name','$address')");
    if ($result){
        echo "<script>window.location.replace(\"manage-customers.php?title=Manage Customers\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}