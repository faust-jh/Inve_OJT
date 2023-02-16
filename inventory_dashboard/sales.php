<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>

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
