<?php

include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>
<div class="container p-2">
<div class="row col-md-12 m-auto p-2">

<div class="text-end p-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Add New Product</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3 text-start">
            <label for="recipient-name" class="col-form-label">Enter Item Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

           <div class="mb-3 text-start">
            <label for="recipient-name" class="col-form-label">Enter Categories:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3 text-start">
            <label for="recipient-name" class="col-form-label">Enter Value:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
            <div class="text-center p-2">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Add Categories</button>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
            </div>
            </div>
  </div>
</div>
</div>
</div>
</div>

<table id="example" class="display border " style="width:100%">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Product Size</th>
                <th>Product Color</th>
                <th>Item Quantity</th>
                <th>Item Sold</th>
                <th>Manage</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>T-0001</td>
                <td>Tshirt-01</td>
                <td>Round Neck</td>
                <td>Small</td>
                <td>Black</td>
                <td>300</td>
                <td>50</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0002</td>
                <td>Tshirt-02</td>
                <td>Round Neck</td>
                <td>Medium</td>
                <td>White</td>
                <td>350</td>
                <td>100</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0003</td>
                <td>Tshirt-03</td>
                <td>Round Neck</td>
                <td>XL</td>
                <td>Blue</td>
                <td>400</td>
                <td>120</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0004</td>
                <td>Tshirt-04</td>
                <td>Round Neck</td>
                <td>Small</td>
                <td>Green</td>
                <td>500</td>
                <td>200</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0005</td>
                <td>Tshirt-05</td>
                <td>Round Neck</td>
                <td>Medium </td>
                <td>Yellow</td>
                <td>300</td>
                <td>50</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0006</td>
                <td>Tshirt-06</td>
                <td>Round Neck</td>
                <td>XL </td>
                <td>Gray</td>
                <td>350</td>
                <td>100</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0007</td>
                <td>Tshirt-07</td>
                <td>Round Neck</td>
                <td>Mediun </td>
                <td>Kaki</td>
                <td>400</td>
                <td>120</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr> 
               
            <tr>
                <td>T-0008</td>
                <td>Tshirt-08</td>
                <td>Round Neck</td>
                <td>Large</td>
                <td> Orange</td>
                <td>500</td>
                <td>200</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0009</td>
                <td>Tshirt-09</td>
                <td>Round Neck</td>
                <td>Large</td>
                <td> Purple</td>
                <td>300</td>
                <td>50</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0010</td>
                <td>Tshirt-010</td>
                <td>Round Neck</td>
                <td>Medium </td>
                <td>Pink</td>
                <td>350</td>
                <td>100</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0011</td>
                <td>Tshirt-011</td>
                <td>Round Neck</td>
                <td>LArge </td>
                <td>Navy Blue</td>
                <td>400</td>
                <td>120</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-0012</td>
                <td>Tshirt-012</td>
                <td>Round Neck</td>
                <td>Small </td>
                <td>Brown</td>
                <td>500</td>
                <td>200</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>  
       
            <tr>
                <td>T-00001</td>
                <td>Tshirt-01</td>
                <td>V Neck</td>
                <td>Large </td>
                <td>Black></td>
                <td>300</td>
                <td>50</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-00002</td>
                <td>Tshirt-02</td>
                <td>V Neck</td>
                <td>Medium </td>
                <td> White</td>
                <td>350</td>
                <td>100</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-00003</td>
                <td>Tshirt-03</td>
                <td>V Neck</td>
                <td>Medium </td>
                <td>Blue</td>
                <td>400</td>
                <td>120</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>
           
            <tr>
                <td>T-00004</td>
                <td>Tshirt-04</td>
                <td>V Neck</td>
                <td>Small </td>
                <td> Green</td>
                <td>500</td>
                <td>200</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>    
             </tr>

            <tr>
                <td>T-00005</td>
                <td>Tshirt-05</td>
                <td>V Neck</td>
                <td>Small </td>
                <td> Yellow</td>
                <td>600</td>
                <td>560</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr> 
           
            <tr>
                <td>T-00006</td>
                <td>Tshirt-06</td>
                <td>V Neck</td>
                <td>Medium </td>
                <td> Maroon</td>
                <td>300</td>
                <td>50</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>

            <tr>
                <td>T-00007</td>
                <td>Tshirt-07</td>
                <td>V Neck</td>
                <td>Large </td>
                <td> Purple</td>
                <td>350</td>
                <td>100</td>
               
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td> 
            </tr>

            <tr>
                <td>T-00008</td>
                <td>Tshirt-08</td>
                <td>V Neck</td>
                <td>XL</td>
                <td>Orange</td>
                <td>400</td>
                <td>120</td>
                <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
            </tr>
        </tbody>    
</table>

<?php
include '../includes/footerdash.php'; 