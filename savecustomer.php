<?php
include "header.php";
?>
<section class="content-header">
    <h1>
        <?=$title?>
        <small>new customer</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index1.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$title?></li>
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
<div class="form-group">
    <label>Customer ID</label>
    <input type="text" class="form-control" id="txtCustomerID" placeholder="Enter Customer ID" name="Customer-id">
</div>
<div class="form-group">
    <label>Customer Name</label>
    <input type="text" class="form-control" id="txtCustomerName" placeholder="Enter Customer Name" name="Customer-name">
</div>
<div class="form-group">
    <label>Customer Address</label>
    <input type="text" class="form-control" id="txtCustomerAddress" placeholder="Enter Customer Address" name="Customer-Address">
</div>
<div>
    <button id="btnsave" class="btn btn-primary" type="submit">Save Customer</button>
</div>
</section>
<?php
include "footer.php";
?>
