<?php
include "header.php";
?>
<?php

$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");
if (!$connection){
    echo mysqi_connect_error();
}else{
    $resultset = mysqli_query($connection, "select * from item");
?>
    <section class="content-header">
        <h1>
            <?=$title?>
            <small>Main Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?=$title?></li>
        </ol>
    </section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-body">
                <div class="box-header with-border">
                    <button type="submit" class="btn btn-primary" id="btnNewItem">New Item</button>&nbsp;
                    <button type="button" id="btnDeleteItem" class="btn btn-danger">Delete</button>
                </div>
                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Item ID</th>
                                <th>Description</th>
                                <th>Unit Price</th>
                                <th>QTY On Hand</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($rowData = mysqli_fetch_row($resultset)) {
                                echo "<tr>
                            <td><input type=\"checkbox\" value=$rowData[0] name=\"itemId[]\"></td>
                            <td class='itemId'>$rowData[0]</td>
                            <td class='description'>$rowData[1]</td>
                            <td class='qtyOnHand'>$rowData[2]</td>
                            <td class='unitPrice'>$rowData[3]</td>
                            <td><a class='btnPencil' href='updateitem.php ? code=$rowData[0] & desc=$rowData[1] & price=$rowData[2] & qty=$rowData[3] & title=Manage Items'><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a></td>
                    </tr> ";
                            }

                            mysqli_free_result($resultset);

                            mysqli_close($connection);
                            }

                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
</section>
<?php
include "footer.php";
?>
