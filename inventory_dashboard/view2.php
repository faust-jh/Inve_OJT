<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>
<div class="container p-2">
  <div class="row col-md-12 m-auto">

<<<<<<< HEAD
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
        <form>
        <div class="mb-3 text-start">
            <label for="recipient-name" class="col-form-label">Enter Product Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
         <div class="row text-start"> 
            
         <label for="recipient-name" >Select Color:</label>
          <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Blue </option>
  <option value="2">Red</option>
  <option value="3">Green</option>
  <option value="4">Yellow</option>
</select>
</div>

<div class="row text-start">
     <label for="recipient-name" >Select Size</label>
<select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Small </option>
  <option value="2">Medium</option>
  <option value="3">Large</option>
  <option value="4">XL</option>
</select>

</div>

<div class="row text-start">
 <label for="recipient-name" >Select Brand:</label>
<select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1">Bench</option>
  <option value="2">Penshoppe</option>
  <option value="3">Blue Corner</option>
  <option value="4">Nike</option>
</select>

</div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
=======
    <div class="text-end p-2">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Add New Product</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Item </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
>>>>>>> 25fcfb38b98e50486f6d4e64d3943cc0df1dfe91
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

<<<<<<< HEAD
        <tbody>
            <tr>
                <td>S-0001</td>
                <td>Short-01</td>
                <td>Nike</td>
                <td>Small </td>
                <td>Brown</td>
                <td>500</td>
                <td>200</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
           
            </tr>  

            <tr>
                <td>S-0002</td>
                <td>Short-02</td>
                <td>Nike</td>
                <td>Small </td>
                <td>Mustard</td>
                <td>300</td>
                <td>120</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
          
            </tr>  

            <tr>
                <td>S-0003</td>
                <td>Short-03</td>
                <td>Nike</td>
                <td>Medium</td>
                <td>Blue</td>
                <td>400</td>
                <td>120</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
        
            </tr>   

            <tr>
                <td>S-0004</td>
                <td>Short-04</td>
                <td>Nike</td>
                <td>Large</td>
                <td>Green</td>
                <td>500</td>
                <td>200</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
          
            </tr>

            <tr>
                <td>S-0005</td>
                <td>Short-05</td>
                <td>Nike</td>
                <td>XL</td>
                <td>Yellow</td>
                <td>600</td>
                <td>560</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
         
            </tr>

            <tr>
                <td>S-0006</td>
                <td>Short-06</td>
                <td>Nike</td>
                <td>Medium</td>
                <td>Maroon</td>
                <td>300</td>
                <td>50</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
          
            </tr>

            <tr>
                <td>S-0007</td>
                <td>Short-07</td>
                <td>Adidas</td>
                <td>Large</td>
                <td>Purple</td>
                <td>350</td>
                <td>100</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
         
            </tr>

            <tr>
                <td>S-0008</td>
                <td>Short-08</td>
                <td>Adidas</td>
                <td>Small</td>
                <td>Orange</td>
                <td>400</td>
                <td>120</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
         
            </tr>
             
            <tr>
                <td>S-0009</td>
                <td>Short-09</td>
                <td>Adidas</td>
                <td>Medium</td>
                <td>Brown</td>
                <td>500</td>
                <td>200</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
          
            </tr>

            <tr>
                <td>S-0010</td>
                <td>Short-010</td>
                <td>Adidas</td>
                <td>Medium</td>
                <td>Gray</td>
                <td>600</td>
                <td>560</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
          
            </tr> 

            <tr>
                <td>S-0011</td>
                <td>Short-011</td>
                <td>Adidas</td>
                <td>Large</td>
                <td>Pink</td>
                <td>300</td>
                <td>50</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
           
            </tr>

            <tr>
                <td>S-0012</td>
                <td>Short-012</td>
                <td>Adidas</td>
                <td>XL</td>
                <td>Navy Blue</td>
                <td>350</td>
                <td>100</td>
                <td> <button type="button" class="btn bg-primary text-white btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>   
           
            </tr>  
        </tbody>        
    </table>
=======
  <tbody>
    <tr>
      <td>S-0001</td>
      <td>Short-01</td>
      <td>Nike</td>
      <td>Small </td>
      <td>Brown</td>
      <td>500</td>
      <td>200</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0002</td>
      <td>Short-02</td>
      <td>Nike</td>
      <td>Small </td>
      <td>Mustard</td>
      <td>300</td>
      <td>120</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0003</td>
      <td>Short-03</td>
      <td>Nike</td>
      <td>Medium</td>
      <td>Blue</td>
      <td>400</td>
      <td>120</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0004</td>
      <td>Short-04</td>
      <td>Nike</td>
      <td>Large</td>
      <td>Green</td>
      <td>500</td>
      <td>200</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0005</td>
      <td>Short-05</td>
      <td>Nike</td>
      <td>XL</td>
      <td>Yellow</td>
      <td>600</td>
      <td>560</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0006</td>
      <td>Short-06</td>
      <td>Nike</td>
      <td>Medium</td>
      <td>Maroon</td>
      <td>300</td>
      <td>50</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0007</td>
      <td>Short-07</td>
      <td>Adidas</td>
      <td>Large</td>
      <td>Purple</td>
      <td>350</td>
      <td>100</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0008</td>
      <td>Short-08</td>
      <td>Adidas</td>
      <td>Small</td>
      <td>Orange</td>
      <td>400</td>
      <td>120</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0009</td>
      <td>Short-09</td>
      <td>Adidas</td>
      <td>Medium</td>
      <td>Brown</td>
      <td>500</td>
      <td>200</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0010</td>
      <td>Short-010</td>
      <td>Adidas</td>
      <td>Medium</td>
      <td>Gray</td>
      <td>600</td>
      <td>560</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0011</td>
      <td>Short-011</td>
      <td>Adidas</td>
      <td>Large</td>
      <td>Pink</td>
      <td>300</td>
      <td>50</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>

    <tr>
      <td>S-0012</td>
      <td>Short-012</td>
      <td>Adidas</td>
      <td>XL</td>
      <td>Navy Blue</td>
      <td>350</td>
      <td>100</td>
      <td> <button class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp; &nbsp;<button class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></button></td>
    </tr>
  </tbody>
</table>
>>>>>>> 25fcfb38b98e50486f6d4e64d3943cc0df1dfe91

<?php
include '../includes/footerdash.php';
