<?php
include "header.php";
?>
<?php
$connection=mysqli_connect("localhost", "root","mysql", "crud", "3306");
if (!$connection){
    echo mysqi_connect_error();
}else{
    $resultset1 = mysqli_query($connection, "select id from customer");
    $resultset2 = mysqli_query($connection, "select code from item");
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
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            Order ID
        </div>
        <div class="col-sm-9">
            <input name="txtOID" id="txtOID" class="form-control" placeholder="O001">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            Order Date
        </div>
        <div class="col-sm-9">
            <input id="orderDate" name="orderDate" class="form-control" type="date">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            Customer ID
        </div>
        <div class="col-sm-9">
            <select class="form-control" name='custID' id="combo">
                <?php
                while ($rowData = mysqli_fetch_row($resultset1)) {
                    echo "<option id='cmbCustomer' value='$rowData[0]'>$rowData[0]</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            Customer Name
        </div>
        <div class="col-sm-9">
            <input id="custName" name="txtName" class="form-control" value="" readonly>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-2">
    Item Code
    <select id="cmbItem1" class="form-control">
    <?php
    while ($rowData1 = mysqli_fetch_row($resultset2)) {
        echo "<option id='cmbItem' value='$rowData1[0]'>$rowData1[0]</option>";
    }
    mysqli_free_result($resultset2);
    mysqli_close($connection);
}
?>
    </select>
    </div>
    <div class="col-sm-3">
        Description
        <input id="description" name="" class="form-control" readonly>
    </div>
    <div class="col-sm-2">
        Unit Price
        <input id="price" name="" class="form-control" readonly>
    </div>
    <div class="col-sm-2">
        QTY On Hand
        <input id="qtyOnHand" name="" class="form-control" readonly>
    </div>
    <div class="col-sm-3">
        QTY Ordered
        <input id="qtyOrdered" class="form-control ">
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">
            <button type="button" class="btn bg-blue-active" style="border-color: black" id="btnAdd">ADD TO TABLE</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-active" id="tableN">
                <thead style="background-color: #001F3F;color: white">
                <tr>
                    <th>Item ID</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>QTY</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1">
            Total
        </div>
        <div class="col-sm-2">
            <input id="finalTotal" name="total" class="form-control">
        </div>
        <div class="col-sm-5">
        </div>
        <div class="col-sm-1">
            <button type="button" id="btnPlaceOrder" class="btn bg-gray-active">PLACE ORDER</button>
        </div>
        <div class="col-sm-1"></div>
    </div>
    </div>
    </section>
<?php
include "footer.php";
?>