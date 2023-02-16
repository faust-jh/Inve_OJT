<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>
<div class="container p-2">
  <div class="row col-md-12 m-auto">
<h4>Short</h4>

<div class="text-end p-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Add New Product</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addprod" name="addprod" method="POST" action="addproduct.php" autocomplete="off">
            <div class="mb-3 text-start">
                <label for="recipient-name" class="col-form-label">Enter Product Name:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="row text-start"> 
                
                <label for="recipient-name">
                    <?php
                        echo $count;
                    ?>
                </label>

                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Blue </option>
                    <option value="2">Red</option>
                    <option value="3">Green</option>
                    <option value="4">Yellow</option>
                </select>
            </div>

            <div class="modal-footer">
                <input type="submit" value="Save" id="saveprod" name="saveprod" class="btn btn-primary">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
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
      <th>Photo</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>Manage</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td style="width: 100px;">S-0001</td>
      <td style="width:85px"><img src="image/short.jpg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Short</label></div>
          <div class="col"><label><span class="text-muted">Size: </span>Medium</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Adidas</label></div>
          <div class="col"><label><span class="text-muted">Color: </span>Pink</label></div>
        </div>
      </td>
      <td style="width:200px">
        <label><span class="text-muted">Stocks: </span>500</label><br>
        <label><span class="text-muted">Sold: </span>150</label>
      </td>
      <td style="width: 100px;"> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

      <tr>
      <td style="width: 100px;">S-0002</td>
      <td style="width:85px"><img src="image/short2.jpg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Short </label></div>
          <div class="col"><label><span class="text-muted">Size: </span>Small</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Adidas</label></div>
          <div class="col"><label><span class="text-muted">Color: </span>Red</label></div>
        </div>
      </td>
      <td style="width:200px">
        <label><span class="text-muted">Stocks: </span>300</label><br>
        <label><span class="text-muted">Sold: </span>200</label>
      </td>
      <td style="width: 100px;"> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

    </tr>




      <tr>
      <td style="width: 100px;">S-0003</td>
      <td style="width:85px"><img src="image/navyblue.jpeg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Short</label></div>
          <div class="col"><label><span class="text-muted">Size: </span>medium</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Nike</label></div>
          <div class="col"><label><span class="text-muted">Color: </span>Navy Blue</label></div>
        </div>
      </td>
      <td style="width:200px">
        <label><span class="text-muted">Stocks: </span>650</label><br>
        <label><span class="text-muted">Sold: </span>400</label>
      </td>
      <td style="width: 100px;"> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

    </tr>





    <tr>
      <td style="width: 100px;">S-0004</td>
      <td style="width:85px"><img src="image/short3.jpg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Short</label></div>
          <div class="col"><label><span class="text-muted">Size: </span>Small</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Nike</label></div>
          <div class="col"><label><span class="text-muted">Color: </span>Yellow</label></div>
        </div>
      </td>
      <td style="width:200px">
        <label><span class="text-muted">Stocks: </span> 400</label><br>
        <label><span class="text-muted">Sold: </span>150</label>
      </td>
      <td style="width: 100px;"> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

    </tr>

     
     
       
           
        </tbody>        
    </table>


<?php
include '../includes/footerdash.php';
