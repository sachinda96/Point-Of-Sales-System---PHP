<?php
$customerID=$_GET["id"];

$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"SELECT * from customer WHERE id='$customerID'");
    if (mysqli_num_rows($result)>0){
        $rowData=mysqli_fetch_row($result);
        echo $rowData[1];
    }else{
        echo "failed to load customer";
    }
    mysqli_free_result($result);
}
mysqli_close($connection);