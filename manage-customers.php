
<?php
include "header.php";
?>
<?php

$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");
if (!$connection){
    echo mysqi_connect_error();
}else{
    $resultset = mysqli_query($connection, "select * from customer");
?>
    <section class="content-header">
        <h1>
            <?=$title?>
            <small>Main details</small>
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
                    <button type="submit" class="btn btn-primary" id="btnNewCustomer">New Customer</button>&nbsp;
                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Delete Customer</button>
                </div>
                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Customer Address</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($rowData = mysqli_fetch_row($resultset)) {
                                echo "<tr>
                            <td><input type=\"checkbox\" value=$rowData[0] name=\"custId[]\"></td>
                            <td class='custId'>$rowData[0]</td>
                            <td class='custName'>$rowData[1]</td>
                            <td class='custAddress'>$rowData[2]</td>
                            <td><a class='btnPencil' href='updatecustomer.php ? custID=$rowData[0] & name=$rowData[1] & address=$rowData[2] & title=Manage Customers'><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a></td>
                    </tr>
                    ";
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
