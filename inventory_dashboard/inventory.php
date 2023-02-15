<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
include '../includes/sidebardash.php';
?>
<div class="container p-2">
  <div class="row col-md-12 m-auto">

    <h4 class="">Inventory</h4>

    <div class="text-end p-1">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Add New Item</button>
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

              </form>
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
