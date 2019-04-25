<?php
$id=$_POST["Customer-id"];
$name=$_POST["Customer-name"];
$address=$_POST["Customer-Address"];

$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else {

    $result = mysqli_query($connection, "UPDATE Customer SET name='$name', address='$address' WHERE id='$id'");

    if ($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(\"manage-customers.php?title=Manage Customers\");</script>";
    }else{
        echo "Failed to update the customer", "<br>", mysqli_error($connection);
    }

    mysqli_close($connection);
}