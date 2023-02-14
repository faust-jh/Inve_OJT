<?php

include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>
<div class="container p-2">
    <div class="row col-md-12 m-auto">

        <h4 class="">Inventory</h4>

        <div class="text-end p-2">
            <button type="button" class="btn btn-primary" style="width:fit-content ">+Add New Item</button>
        </div>

        <table id="example" class="display border" style="width:100%">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Manage</th>
                </tr>
            </thead>

            <tr>
                <td>T-01</td>
                <td>T-Shirt</td>
                <td> <a href="view1.php" class="btn bg-primary text-white btn-sm"><i class="fa-regular fa-eye"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></a></td>
            </tr>

            <tr>
                <td>S-01</td>
                <td>Short</td>
                <td> <a href="view2.php" class="btn bg-primary text-white btn-sm"><i class="fa-regular fa-eye"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></a></td>
            </tr>

            <tr>
                <td>D-01</td>
                <td>Dress</td>
                <td> <a href="view3.php" class="btn bg-primary text-white btn-sm"><i class="fa-regular fa-eye"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></a></td>
            </tr>

            <tbody>

            </tbody>
        </table>
    </div>
</div>
<?php
include '../includes/footerdash.php';
