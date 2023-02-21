$(document).ready(function(){

 var dataTable = $('#example').DataTable({
  "processing" : true,
  "ajax" : {
   url:"http://localhost/inventory/inventory-system/app/fetchitem.php",
   type:"POST"
  }
 });

 $('#example').on('draw.dt', function(){
  $('#example').Tabledit({
   url:'../app/update.php',
   dataType:'json',
   columns:{
    identifier : [0, 'id'],
    editable:[[1, 'ItemName']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    if(data.action == 'delete')
    {
     $('#' + data.id).remove();
     $('#example').DataTable().ajax.reload();
    }
   }
  });
 });
}); 