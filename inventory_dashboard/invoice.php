<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>

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
