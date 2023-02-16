<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
?>
<div class="offcanvas offcanvas-start box-shadow-2" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header ">
        <button type="button" class="btn-close text-reset sidebar-close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <a href="" class="nav-link text-light m-0 p-0 text-center"><i class="fa-regular fa-circle  fa-3x"></i>
        <h3>Client Name</h3>
    </a>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <hr class="text-light m-0">
            <li class="nav-item ">
                <a href="../inventory_dashboard/index.php" class="nav-link "><i class="fa-solid fa-chart-line"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/inventory.php" class="nav-link "><i class="fa-solid fa-boxes-stacked me-1"></i>Inventory</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/sales.php" class="nav-link "><i class="fa-solid fa-dollar-sign me-1"></i>Sales</a>
            </li>
            <li class="nav-item"  style="  background-color: rgba(255, 145, 0, 0.979); color: black;">
                <a href="../inventory_dashboard/invoice.php" class="nav-link "><i class="fa-solid fa-file-invoice me-1"></i>Invoice</a>
            </li>
        </ul>
    </div>
</div>
<div class="container p-3 ">
    <div class="row col-md-8 border mx-auto ">
        <h2 class="text-center py-5 text-uppercase">Payment Receipt</h2>
        <div class="justify-content-between m-5">
            <label for="CompanyName">Company Name:</label>
            <input type="text" id="CompanyName" class="border-0" value="Chonggos Inc.">

            <label for="PaymentDate" class="">Payment Date:</label>
            <input type="text" id="PaymentDate" class="border-0" value="12-07-21">
            <br>

            <label for="PhoneNo">Phone No.</label>
            <input type="text" id="PhoneNo" class="border-0" value="Chonggos Inc.">

            <label for="ReceiptNo">Receipt No.</label>
            <input type="text" id="ReceiptNo" class="border-0 margin-link" value="Chonggos Inc.">
            <br>

            <label for="EmailAdd">Email Address:</label>
            <input type="text" id="EmailAdd" class="border-0" value="Chonggos Inc.">
        </div>
    </div>
</div>

<?php
include '../includes/footerdash.php';
