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
            <li class="nav-item" >
                <a href="../inventory_dashboard/inventory.php" class="nav-link "><i class="fa-solid fa-boxes-stacked me-1"></i>Inventory</a>
            </li>
            <li class="nav-item" style="  background-color: rgba(255, 145, 0, 0.979); color: black;">
                <a href="../inventory_dashboard/sales.php" class="nav-link "><i class="fa-solid fa-dollar-sign me-1"></i>Sales</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/invoice.php" class="nav-link "><i class="fa-solid fa-file-invoice me-1"></i>Invoice</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/ordering.php" class="nav-link "><i class="fa-solid fa-file-invoice me-1"></i>Ordering</a>
            </li>
        </ul>
    </div>
</div>

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
            <?php
            $con = mysqli_connect("localhost", "root");
            if (!$con) {
                echo ("Can't connect!");
            }
            mysqli_select_db($con, "inventory_system");
            $sql = "SELECT ProductName FROM product WHERE ProductID > 0";
            $query = mysqli_query($con, $sql);
            $result = mysqli_query($con, "SELECT * FROM sales");
            echo "<table border = '1' width = '1200' cellspacing = '0' style = 'font-size: 1.5vw'>";
            echo "<tr bgcolor = 'lightgray'>";
            echo "<th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Sales ID </th>";
            echo "<th> Product Name </th>";
            echo "<th> Total Defect</th>";
            echo "<th> Total Sold </th>";
            echo "<th> Total Revenue </th>";
            echo "<th> Sales Date </th>";
            echo "</tr>";
            while ($row2 = mysqli_fetch_array($result)) {
                $row = mysqli_fetch_array($query);
                $temp1 = $row2['SalesID'];
                $temp2 = $row['ProductName'];
                $temp3 = $row2['TotalDefect'];
                $temp4 = $row2['TotalSold'];
                $temp5 = $row2['TotalRevenue'];
                $temp6 = $row2['SalesDate'];
                
                echo "<tr>";
                echo "<td> $temp1 </td>";
                echo "<td> $temp2 </td>";
                echo "<td> $temp3 </td>";
                echo "<td> $temp4 </td>";
                echo "<td> $temp5 </td>";
                echo "<td> $temp6 </td>";
                echo "</tr>";
            }
            mysqli_close($con);
            echo "</table>";
            ?>
        </table>
    </div>
</div>

<?php
include '../includes/footerdash.php';
