$(document).ready(function() {
       $("#example").DataTable({
        "ajax": {
            "url" : "http://localhost/inventory/inventory-system/app/sales.php",
            "type" : "GET",
            "dataSrc": 'data'
        },
        "columns" : [
            {"data" : "SalesID"},
            {"data" : "ProductName"},
            {"data" : "TotalSold"},
            {"data" : "TotalDefect"},
            {"data" : "TotalRevenue"},
            {"data" : "SalesDate"},
        ],
        "processing" : true
       });
    });
