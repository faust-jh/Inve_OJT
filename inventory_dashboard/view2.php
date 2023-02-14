<?php

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
<div class="container p-2">
<div class="row col-md-12 m-auto">

<div class="text-end p-3">
<button type="button" class="btn btn-primary" style="width:fit-content ">+Add New Category</button>
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
    </div>
</div>
<?php
include 'includes/footer.php';


 
