<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>



<div class="container p-3 ">
<div class="row col-md-6   border mx-auto ">
<div class="justify-content-between m-1">



           
            <label for="StoreNo">Store No:</label>
            <input type="text" id="StoreNo" class="border-0" value="S0001">
            <br>
            <label for="Terminal">Terminal:</label>
            <input type="text" id="Terminal" class="border-0" value="P0002">
            <br>
            <label for="Date">Date:</label>
            <input type="text" id="Date" class="border-0" value="16-02-23">
            <br>
            <label for="Staff">Staff:</label>
            <input type="text" id="Staff" class="border-0" value="Hunter">
            <p>---------------------------------------------------</p>
            <p style="font-size:60px;text-align:center;">Z-REPORT</p>
            <p>---------------------------------------------------</p>
            <table>
               <tr> 
             <td ><label for="Cash">Cash:</label></td>
             <td ><input type="text" id="Cash" class="border-0" size="3" value="1,132.13"></td>
            </tr>
            <tr> 
            <td ><label for="Total">Total:</label></td>
            <td ><input type="text" id="Total" class="border-0" size="3" value="1,132.13"></td>
            </tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p><td ></tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p><td ></tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p><td ></tr>
            <tr> 
            <td ><label for="GrossSales">Gross Sales:</label></td>
            <td ><input type="text" id="GrossSales" class="border-0" size="3" value="1,132.63"></td>
            </tr>
            <tr>
            <td ><label for="Discount">Discount:</label></td>
            <td ><input type="text" id="Discount" class="border-0" size="3" value="-2.50"></td>
            </tr>
            <tr>
            <td><label for="Rounding">Rounding:</label></td>
            <td ><input type="text" id="Rounding" class="border-0" size="3" value="0.00"></td>
            </tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p><td ></tr>
            <tr>
            <td ><label for="TotalNetSales">Total Net Sales:</label></td>
            <td ><input type="text" id="TotalNetSales" class="border-0" size="3" value="1,132.63"></td>
            </tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p></tr>
            <tr>
            <td ><label for="NoofPayingCustomers">No. of Paying Customers:</label></td>
            <td ><input type="text" id="NoofPayingCustomers" class="border-0" size="3" value="17"></td>
            </tr>
            <tr>
            <td><label for="NoofTranactions">No. of Transaction:</label></td>
            <td ><input type="text" id="NoofTranactions" class="border-0" size="3" value="17"></td>
            </tr>
            <tr>
            <td ><label for="ItemSold">Item Sold:</label></td>
            <td ><input type="text" id="ItemSold" class="border-0" size="3" value="37"></td>
            </tr>
            <tr>
            <td><label for="NoofRefunds">No. of Refunds:</label></td>
            <td ><input type="text" id="NoofRefunds" class="border-0" size="3" value="2"></td>
            </tr>
            <tr>
            <td><label for="NoofSuspended">No. of Suspended:</label></td>
            <td ><input type="text" id="NoofSuspended" class="border-0" size="3" value="1"></td>
            </tr>
            <tr>
            <td><label for="NoofVoided">No. of Voided:</label></td>
            <td ><input type="text" id="NoofVoided" class="border-0" size="3" value="1"></td>
            </tr>
            <tr>
            <td><label for="NoofTraining">No. of Training:</label></td>
            <td ><input type="text" id="NoofTraining" class="border-0" size="3" value="1"></td>
            </tr>
            <tr>
            <td><label for="NoofOpenDrawer">No. of Open Drawer:</label></td>
            <td ><input type="text" id="NoofOpenDrawer" class="border-0" size="3" value="21"></td>
            </tr>
            <tr>
            <td><label for="NoofLogins">No. of Logins:</label></td>
            <td ><input type="text" id="NoofLogins" class="border-0" size="3" value="0"></td>
            </tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p></td></tr>
            <tr>
            <td><label for="ZReportId">Z-Report ID:</label></td>
            <td ><input type="text" id="ZReportId" class="border-0" size="3" value="T000001"></td>
            </tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p></td></tr>
            <tr>
            <td><label for="AccumulatedNetSales">Accumulated Net Sales:</label></td>
            <td ><input type="text" id="AccumulatedNetSales" class="border-0" size="3" value="1,132.13"></td>
            </tr>
            <tr><th colspan="2"><p>---------------------------------------------------</p></td></tr>
            </table>
            </div> 
    </div>
</div>


<?php
include '../includes/footerdash.php';
