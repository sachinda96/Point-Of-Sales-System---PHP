<?php
$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['itemId'] as $value) {
        $query = "delete from item where code='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"manage-items.php?title=Manage Items\");</script>";
        } else {
            header("Location: deleteitem.php");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);