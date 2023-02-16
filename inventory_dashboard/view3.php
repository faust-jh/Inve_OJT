<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>





<div class="container p-2">
  <div class="row col-md-12 m-auto">
    <h4>Dress</h4>

    <div class="text-end p-2">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Add New Product</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Product </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="px-3">
                <div class="row my-2">
                  <label for="" class="text-start"><b>Product Name</b></label>
                  <input type="text" class="form-control" name="" placeholder="Enter Product Name">
                </div>
                <div class="row my-2">
                  <label for="" class="text-start"><b>Select Color</b></label>
                  <select class="form-select" aria-label="Default select example">
                    <option value="1">Blue</option>
                    <option value="2">Red</option>
                    <option value="3">Green</option>
                  </select>
                </div>
                <div class="row my-2">
                  <label for="" class="text-start"><b>Select Size</b></label>
                  <select class="form-select" aria-label="Default select example">
                    <option value="1">Small</option>
                    <option value="2">Medium</option>
                    <option value="3">Large</option>
                  </select>
                </div>
                <div class="row my-2">
                  <label for="" class="text-start"><b>Select Brand</b></label>
                  <select class="form-select" aria-label="Default select example">
                    <option value="1">Blue Corner</option>
                    <option value="2">Bench</option>
                    <option value="3">Lacoste</option>
                  </select>
                </div>
                <div class="row my-2">
                  <label for="" class="text-start"><b>Select Photo</b></label>
                  <input class="form-control" type="file" id="formFile">
                  </select>
                </div>



                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
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
      <td style="width: 100px;">D-0001</td>
      <td style="width:85px"><img src="image/cocktail.jpeg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Dress</label></div>
          <div class="col"><label><span class="text-muted">Size: </span>Medium</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Cocktail</label></div>
          <div class="col"><label><span class="text-muted">Color: </span>Pink</label></div>
        </div>
      </td>
      <td style="width:200px">
        <label><span class="text-muted">Stocks: </span>500</label><br>
        <label><span class="text-muted">Sold: </span>150</label>
      </td>
      <td style="width: 100px;"> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

      <tr>
      <td style="width: 100px;">D-0002</td>
      <td style="width:85px"><img src="image/coocktail2.jpeg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Dress </label></div>
          <div class="col"><label><span class="text-muted">Size: </span>Small</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Cocktail</label></div>
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
      <td style="width: 100px;">D-0003</td>
      <td style="width:85px"><img src="image/formal.jpeg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Dress</label></div>
          <div class="col"><label><span class="text-muted">Size: </span>medium</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Formal</label></div>
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
      <td style="width: 100px;">D-0004</td>
      <td style="width:85px"><img src="image/formal2.jpg" style="width: 85px;height:50px" alt="" srcset=""></td>
      <td class="d-flex flex-column">
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Name: </span>Dress</label></div>
          <div class="col"><label><span class="text-muted">Size: </span>Small</label></div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end"><label><span class="text-muted">Type: </span>Formal</label></div>
          <div class="col"><label><span class="text-muted">Color: </span>Yellow</label></div>
        </div>
      </td>
      <td style="width:200px">
        <label><span class="text-muted">Stocks: </span> 400</label><br>
        <label><span class="text-muted">Sold: </span>150</label>
      </td>
      <td style="width: 100px;"> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

    </tr>


    <!-- <tr>
      <td>D-0012</td>
      <td>Dress-012</td>
      <td>Formal</td>
      <td>XL</td>
      <td>Navy Blue</td>
      <td>350</td>
      <td>100</td>
      <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>

    </tr> -->
  </tbody>


  </tbody>

</table>

<?php
include '../includes/footerdash.php';
