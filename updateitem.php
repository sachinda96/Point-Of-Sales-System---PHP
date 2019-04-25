<?php
$ItemCode = $_GET["code"];
$description = $_GET["desc"];
$UnitPrice = $_GET["price"];
$qty = $_GET["qty"];
?>
<?php
include "header.php";
?>
    <section class="content-header">
        <h1>
            <?=$title?>
            <small>update item</small>
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
        <label>Item Code</label>
        <input type="text" class="form-control" id="txtItemCode" value=<?=$ItemCode?> name="Item-Code" readonly>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" id="txtDescription" value=<?=$description?> name="Description">
    </div>
    <div class="form-group">
        <label>Unit Price</label>
        <input type="text" class="form-control" id="txtUnitPrice" value=<?=$UnitPrice?> name="Unit-Price">
    </div>
    <div class="form-group">
        <label>Qty On Hand</label>
        <input type="text" class="form-control" id="txtQtyOnHand" value=<?=$qty?> name="Qty-On-Hand">
    </div>
    <div>
        <button id="btnupdateI" class="btn btn-primary" type="submit">Update Item</button>
    </div>
    </section>
<?php
include "footer.php";
?>