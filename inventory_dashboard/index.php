<?php

include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>

<div class="container">
    <div class="row">

        <h4 class="p-3">Dashboard</h4>

        <div class="card-main p-0 m-0 col-md-3 mx-auto text-light">
            <div class="p-2 card-main-low">
                <div class="">
                    <p class="lead text-start my-1 m-3">Low Stock Products </p>
                    <p class="text-end"><span class="display-6">17</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-cube fa-3x"></i></p>
                    <hr>
                </div>
            </div>

            <div class=" bg-last text-center">
                <a href="inventory.php" class=" text-decoration-none text-light ">More Info<i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>

        <!-- another card -->

        <div class="card-main p-0 m-0 col-md-3 mx-auto text-light">
            <div class="p-2 card-main-middle">
                <div class="">
                    <p class="lead text-start my-1 m-3">All Products </p>
                    <p class="text-end"><span class="display-6">17</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-cube fa-3x"></i></p>
                    <hr>
                </div>
            </div>

            <div class=" bg-middle text-center">
                <a href="inventory.php" class=" text-decoration-none text-light ">More Info<i class="fa-solid fa-circle-arrow-right me-1"></i></a>
            </div>
        </div>

        <!-- another card -->

        <div class="card-main p-0 m-0 col-md-3 mx-auto text-light">
            <div class="p-2 card-main-last">
                <div class="">
                    <p class="lead text-start my-1 m-3">Weekly Sold Products </p>
                    <p class="text-end"><span class="display-6">17</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-cube fa-3x "></i></p>
                    <hr>
                </div>
            </div>

            <div class=" bg-end text-center">
                <a href="inventory.php" class="text-decoration-none  text-light">More Info<i class="fa-solid fa-circle-arrow-right me-1"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Table -->

<div class="container p-5">
    <div class="row  justify-content-between m-0">
        <!-- First Table -->
        <div class="col-md-4 m-auto ">
            <table class="table table-striped ">
                <thead class="bg-dark text-light p-0">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Top Selling Product</th>
                        <th scope="col">Total Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>T-Shirt / Round Neck</td>
                        <td>30 %</td>
                    </tr>
                    <tr>
                        <th class="bg-dark text-light" scope="row">2</th>
                        <td class="bg-dark text-light">T-Shirt / V Neck</td>
                        <td class="bg-dark text-light ">30 %</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Shorts</td>
                        <td>25 %</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- Another Table -->

        <div class="col-md-4  m-auto">
            <table class="table table-striped">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Top Selling Product</th>
                        <th scope="col">Total Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Dress</td>
                        <td>15 %</td>
                    <tr>
                        <th class="bg-dark text-light" scope="row">2</th>
                        <td class="bg-dark text-light">Product</td>
                        <td class="bg-dark text-light">%</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Product</td>
                        <td>%</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include '../includes/footer.php';
