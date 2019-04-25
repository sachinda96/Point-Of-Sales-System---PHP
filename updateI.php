<?php
$code=$_POST["Item-Code"];
$desc=$_POST["Description"];
$price=$_POST["Unit-Price"];
$qty=$_POST["Qty-On-Hand"];

$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else {

    $result = mysqli_query($connection, "UPDATE Item SET description='$desc', unitprice='$price', qtyonhand='$qty' WHERE code='$code'");

    if ($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(\"manage-items.php?title=Manage Items\");</script>";
    }else{
        echo "Failed to update the Item", "<br>", mysqli_error($connection);
    }

    mysqli_close($connection);
}