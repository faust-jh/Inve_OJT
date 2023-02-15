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
              <form  id="createitem" name="createitem" method="POST" action="CRUD/additem.php" autocomplete="off">
                <div class="mb-3 text-start" >
                  <label for="itemname" class="col-form-label">Enter Item Name:</label>
                  <input type="text" class="form-control" id="itemname" name="itemname"> 
                </div>
              
                <div class="mb-3 text-start">
                  <label for="categoryname" class="col-form-label">Enter Category:</label>
                  <input type="text" class="form-control" id="categoryname" name="categoryname">
                  <br>
                  <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> <label for="Add Category +"></label></button>
                  
                  <div class="mb-3 text-start">
                    <label for="valuename" class="col-form-label">Enter Value:</label>
                    <input type="text" class="form-control" id="valuename" name="valuename">
                    <br>
                    <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="liveAlertBtn">Save</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
              </form>
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
</div>

<script>
  const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

  const alert = (message, type) => {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
      `<div class="alert alert-${type} alert-dismissible" role="alert">`,
      `   <div>${message}</div>`,
      '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
      '</div>'
    ].join('')

    alertPlaceholder.append(wrapper)
  }

  const alertTrigger = document.getElementById('liveAlertBtn')
  if (alertTrigger) {
    alertTrigger.addEventListener('click', () => {
      alert('Successfully Added!', 'success')
    })
  }
</script>

<?php
include '../includes/footerdash.php';