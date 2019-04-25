<?php
include "header.php";
?>
<section class="content-header">
    <h1>
        <?=$title?>
        <small>new item</small>
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
    <input type="text" class="form-control" id="txtItemCode" placeholder="Enter Item Code" name="Item-Code">
</div>
<div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" id="txtDescription" placeholder="Enter Description" name="Description">
</div>
<div class="form-group">
    <label>Unit Price</label>
    <input type="text" class="form-control" id="txtUnitPrice" placeholder="Enter Unit Price" name="Unit-Price">
</div>
<div class="form-group">
    <label>Qty On Hand</label>
    <input type="text" class="form-control" id="txtQtyOnHand" placeholder="Enter Qty On Hand" name="Qty-On-Hand">
</div>
<div>
    <button id="btnsaveI" class="btn btn-primary" type="submit">Save Item</button>
</div>
</section>
<?php
include "footer.php";
?>