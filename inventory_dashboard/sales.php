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
            $result = mysqli_query($con, "SELECT * FROM sales");
            echo "<table border = '1' width = '1200' cellspacing = '0' style = 'font-size: 1.5vw'>";
            echo "<tr bgcolor = 'lightgray'>";
            echo "<th> Sales ID </th>";
            echo "<th> Product ID </th>";
            echo "<th> Total Defect</th>";
            echo "<th> Total Sold </th>";
            echo "<th> Total Revenue </th>";
            echo "<th> Sales Date </th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                $temp1 = $row['SalesID'];
                $temp2 = $row['ProductID'];
                $temp3 = $row['TotalDefect'];
                $temp4 = $row['TotalSold'];
                $temp5 = $row['TotalRevenue'];
                $temp6 = $row['SalesDate'];
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
