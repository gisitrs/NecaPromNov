<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>User Dashboard</title>
    <style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
  font-family: 'Open Sans', sans-serif;
 }
 .table-wrapper {
  width: 100%;
  margin: 30px auto;
        background: #fff;
        padding: 20px; 
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
  height: 30px;
  font-weight: bold;
  font-size: 12px;
  text-shadow: none;
  min-width: 100px;
  border-radius: 50px;
  line-height: 13px;
    }
 .table-title .add-new i {
  margin-right: 4px;
 }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
  cursor: pointer;
        display: inline-block;
        margin: 0 5px;
  min-width: 24px;
    }   
 table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
 table.table td a.add i {
        font-size: 24px;
     margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
 table.table .form-control.error {
  border-color: #f50000;
 }
 table.table td .add {
  display: none;
 }
</style>
<script type="text/javascript">
   // Delete row on delete button click
   $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
      $(".add-new").removeAttr("disabled");
      var id = $(this).attr("id");
      var string = id;
      $.post("ajax_delete.php", { string: string}, function(data) {
      $("#displaymessage").html(data);
      });
    });

    // update rec row on edit button click
 $(document).on("click", ".update", function(){
  var id = $(this).attr("id");
  var string = id;
        var txtname = $("#txtname").val();
  var txtdepartment = $("#txtdepartment").val();
  var txtphone = $("#txtphone").val();
  $.post("ajax_update.php", { string: string,txtname: txtname, txtdepartment: txtdepartment, txtphone: txtphone}, function(data) {
   $("#displaymessage").html(data);
  });
    });
    
 // Edit row on edit button click
 $(document).on("click", ".edit", function(){  
        $(this).parents("tr").find("td:not(:last-child)").each(function(i){
   if (i=='0'){
    var idname = 'txtname';
   }else if (i=='1'){
    var idname = 'txtdepartment';
   }else if (i=='2'){
    var idname = 'txtphone';
   }else{} 
   $(this).html('<input type="text" name="updaterec" id="' + idname + '" class="form-control" value="' + $(this).text() + '">');
  });  
  $(this).parents("tr").find(".add, .edit").toggle();
  $(".add-new").attr("disabled", "disabled");
  $(this).parents("tr").find(".add").removeClass("add").addClass("update");
    });

</script>
</head>
<body>
    <div  style="position:absolute; top: 0; right:0;">
        <a href="logout.php" class="btn btn-warning" >Logout</a>
    </div>
    <div class="container col-lg-12">
        <p><h1>Detalji o nekretninama</h1><div id="displaymessage"></div></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> Tabelarne vrednosti</h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Dodaj novu</button>
                    </div>
                </div>
            </div>
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ref</th>
                        <th>Naziv</th>
                        <th>Cena</th>
                        <th>Adresa</th>
                        <th>Opis</th>
                        <th>Beleška za agenta</th>
                    </tr>
                </thead>
                <tbody>
               <?php 
                  //include"dbcon.php"; 
                  require_once "database.php";
                  $query_pag_data = "SELECT * FROM marinkom_jos1.vw_getallrepinformationsforedit ORDER BY ref DESC";
                  $result_pag_data = mysqli_query($conn, $query_pag_data);
                  while($row = mysqli_fetch_assoc($result_pag_data)) {
                      $property_id=$row['id']; 
                      $property_ref=$row['ref']; 
                      $property_name=$row['pro_name'];
                      $property_price=$row['price']; 
                      $property_address=$row['address']; 
                      $smalldesc=$row['pro_small_desc']; 
                      $metadesc=$row['metadesc']; 
                ?>
                    <tr>
                        <td><?php echo $property_ref; ?></td>
                        <td><?php echo $property_name; ?></td>
                        <td><?php echo $property_price; ?></td>
                        <td><?php echo $property_address; ?></td>
                        <td><?php echo $smalldesc; ?></td>
                        <td><?php echo $metadesc; ?></td>
                        <td>
       <a class="add" title="Add" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-user-plus"></i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-pencil"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>   
          <?php } ?>     
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>