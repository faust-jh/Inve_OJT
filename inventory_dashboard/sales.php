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
            <li class="nav-item">
                <a href="../inventory_dashboard/index.php" class="nav-link "><i class="fa-solid fa-chart-line"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/inventory.php" class="nav-link "><i class="fa-solid fa-boxes-stacked me-1"></i>Inventory</a>
            </li>
            <li class="nav-item"  style="  background-color: rgba(255, 145, 0, 0.979); color: black;">
                <a href="../inventory_dashboard/sales.php" class="nav-link "><i class="fa-solid fa-dollar-sign me-1"></i>Sales</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/invoice.php" class="nav-link "><i class="fa-solid fa-file-invoice me-1"></i>Invoice</a>
            </li>
        </ul>
    </div>
</div>
<div class="container p-2">
    <div class="row col-md-12 m-auto">
        <table id="example" class="display border" style="width:100%">
            <thead>
                <tr>
                    <th>Sales ID</th>
                    <th>Total Number Sold</th>
                    <th>Total Revenue</th>
                    <th>Product ID</th>
                    <th>Product Variable ID</th>
                    <th>Product SubVariable ID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>006</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>007</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>008</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>009</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
                <tr>
                    <td>010</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                    <td>input</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>Sales ID</th>
                    <th>Total Number Sold</th>
                    <th>Total Revenue</th>
                    <th>Product ID</th>
                    <th>Product Variable ID</th>
                    <th>Product SubVariable ID</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php
include '../includes/footerdash.php';
