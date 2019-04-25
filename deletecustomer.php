<?php
$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['custId'] as $value) {
        $query = "delete from customer where id='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"manage-customers.php?title=Manage Customers\");</script>";
        } else {
            header("Location: deletecustomer.php");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);