<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>
<div class="container p-2">
  <div class="row col-md-12 m-auto">


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
                  <label for="recipient-name" class="col-form-label">Enter Product Name:</label>
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
</div>


<table id="example" class="display border" style="width:100%">
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
      <td>D-0001</td>
      <td>Dress-01</td>
      <td>Cocktail</td>
      <td> Large</td>
      <td>Black</td>
      <td>300</td>
      <td>50</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0002</td>
      <td>Dress-02</td>
      <td>Cocktail</td>
      <td>Medium</td>
      <td>White</td>
      <td>350</td>
      <td>100</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0003</td>
      <td>Dress-03</td>
      <td>Cocktail</td>
      <td>XL</td>
      <td>Blue</td>
      <td>400</td>
      <td>120</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0004</td>
      <td>Dress-04</td>
      <td>Cocktail</td>
      <td>Large</td>
      <td>Green</td>
      <td>500</td>
      <td>200</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-00005</td>
      <td>Dress-05</td>
      <td>Cocktail</td>
      <td>Small</td>
      <td>Yellow</td>
      <td>600</td>
      <td>560</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0006</td>
      <td>Dress-06</td>
      <td>Cocktail</td>
      <td>Medium</td>
      <td>Maroon</td>
      <td>300</td>
      <td>50</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0007</td>
      <td>Dress-07</td>
      <td>Formal</td>
      <td>Large</td>
      <td>Purple</td>
      <td>350</td>
      <td>100</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0008</td>
      <td>Dress-08</td>
      <td>Formal</td>
      <td>Small</td>
      <td>Orange</td>
      <td>400</td>
      <td>120</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0009</td>
      <td>Dress-09</td>
      <td>Formal</td>
      <td>Medium</td>
      <td>Brown</td>
      <td>500</td>
      <td>200</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0010</td>
      <td>Dress-010</td>
      <td>Formal</td>
      <td>Medium</td>
      <td>Gray</td>
      <td>600</td>
      <td>560</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0011</td>
      <td>Dress-011</td>
      <td>Formal</td>
      <td>Large</td>
      <td>Pink</td>
      <td>300</td>
      <td>50</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>D-0012</td>
      <td>Dress-012</td>
      <td>Formal</td>
      <td>XL</td>
      <td>Navy Blue</td>
      <td>350</td>
      <td>100</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>
  </tbody>
</table>

<?php
include '../includes/footerdash.php';
