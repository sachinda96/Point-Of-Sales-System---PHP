<?php
$itemID=$_GET["id"];

$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"SELECT * from item WHERE code='$itemID'");
    if (mysqli_num_rows($result) > 0){

        $rowData = mysqli_fetch_assoc($result);

        $json = json_encode($rowData);

        echo $json;

    }else{

        echo "Invalid item Id";
    }
    mysqli_free_result($result);
}
mysqli_close($connection);