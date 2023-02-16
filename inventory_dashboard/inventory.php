<?php
include '../includes/headerdash.php';
include '../includes/navbardash.php';
?>
<div class="offcanvas offcanvas-start box-shadow-2" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header ">
        <button type="button" class="btn-close text-reset sidebar-close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <a href="" class="nav-link text-light m-0 p-0 text-center"><i class="fa-regular fa-circle  fa-3x"></i>
        <h3>Client Name</h3>
    </a>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <hr class="text-light m-0">
            <li class="nav-item ">
                <a href="../inventory_dashboard/index.php" class="nav-link "><i class="fa-solid fa-chart-line"></i> Dashboard</a>
            </li>
            <li class="nav-item" style="  background-color: rgba(255, 145, 0, 0.979); color: black;">
                <a href="../inventory_dashboard/inventory.php" class="nav-link "><i class="fa-solid fa-boxes-stacked me-1"></i>Inventory</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/sales.php" class="nav-link "><i class="fa-solid fa-dollar-sign me-1"></i>Sales</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/invoice.php" class="nav-link "><i class="fa-solid fa-file-invoice me-1"></i>Invoice</a>
            </li>
            <li class="nav-item">
                <a href="../inventory_dashboard/ordering.php" class="nav-link "><i class="fa-solid fa-file-invoice me-1"></i>Ordering</a>
            </li>
        </ul>
    </div>
</div>

<div class="container mt-3">
  <h4>Inventory</h4>
  <!-- Button trigger modal -->
  <div class="text-end mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      <i class="fas fa-add"></i> Item
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add New Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row my-2">
              <label for=""><b>Item Name</b></label>
              <div class="row d-flex">
                <div class="col-11">
                  <input type="text" class="form-control" name="" placeholder="Enter Item name">
                </div>
                <div class="col-1 d-flex justify-content-end">
                  <button class="btn btn-primary d-block" type="submit"><i class="fash fa-add"></i></button>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <label for=""><b>Category </b></label>
              <div class="row d-flex">
                <div class="col-11">
                  <input type="text" class="form-control" name="" placeholder="Enter Category">
                </div>
                <div class="col-1 d-flex justify-content-end">
                  <button class="btn btn-primary d-block" type="submit"><i class="fash fa-add"></i></button>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <label for=""><b>Values</b></label>
              <div class="row d-flex">
                <div class="col-11">
                  <input type="text" class="form-control" name="" placeholder="Enter Values">
                </div>
                <div class="col-1 d-flex justify-content-end">
                  <button class="btn btn-primary d-block" type="submit"><i class="fash fa-add"></i></button>
                </div>
              </div>
            </div>
            <div class="row my-3 d-flex justify-content-end px-3">
              <div class="col-4 d-flex justify-content-end "><div class="row">
              <button class="btn btn-success "><i class="fash fa-add"></i> Category</button>
              </div></div>
              <div class="col-2 d-flex "><div class="row">
              <button class="btn btn-primary mx-2">View</button>
              </div></div>
            </div>
            <div class="row py-3 d-flex justify-content-center px-3 border-top border-dark border-2">
              <div class="col-4 d-flex justify-content-end "><div class="row">
              <button class="btn btn-primary" type="submit">Save</button>
              </div></div>
              <div class="col-4 d-flex "><div class="row">
              <button class="btn btn-danger mx-2">Cancel</button>
              </div></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container px-5">
<table id="example" class="display border" style="width:100%">
  <thead>
    <tr>
      <th>Item ID</th>
      <th>Item Name</th>
      <th>Manage</th>
    </tr>
  </thead>
  <tbody>

  <tr>
    <td>T-01</td>
    <td>T-Shirt</td>
    <td style="width: 150px;">  <a href="view1.php" class="btn bg-primary text-white btn-sm"><i class="fa-regular fa-eye"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></a></td>
  </tr>
  <tr>
    <td>S-01</td>
    <td>Short</td>
    <td style="width: 150px;">  <a href="view2.php" class="btn bg-primary text-white btn-sm"><i class="fa-regular fa-eye"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></a></td>
  </tr>
  <tr>
    <td>D-01</td>
    <td>Dress</td>
    <td style="width: 150px;">  <a href="view3.php" class="btn bg-primary text-white btn-sm"><i class="fa-regular fa-eye"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-primary text-white btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp; &nbsp;<a href="" class="btn bg-danger text-white btn-sm"><i class="fa-solid fa-trash"></i></a></td>
  </tr>

  
  </tbody>
</table>
</div>
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
