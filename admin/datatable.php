<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Favicon -->
    <link href="../assets/images/2019/Logo1.png" rel="icon">

    <title>Neca Prom D.O.O.</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
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
    table.table td a.delete a.deleteimages{
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

 table.table td .close {
    display: none;
 }

 i {
   cursor: pointer;
 }
</style>

<script type="text/javascript">
   // Delete row on delete button click
   $(document).on("click", ".delete", function(e){
      var id = $(this).attr("id");
      $('#user_id').val(id);
      $('#deleteusermodal').modal('show');

      /*$(this).parents("tr").remove();
      $(".add-new").removeAttr("disabled");*/
      var id = $(this).attr("id");
      var string = id;
      //alert(string);
      /*$.post("delete_confirm.php", { string: string, 'confirm_delete_btn':true}, function(data) {
      //$("#displaymessage").html(data);
      });*/
      
      /*$.post("ajax_delete.php", { string: string }, function(data) {
           //$("#displaymessage").html(data);
        });*/
    });

    $(document).on("click", "#finalDeleteDataId", function(){
        var id = $('#user_id').val();
        var id1 = $('#'+ id +'').attr("id");
        var string = id1;

        $('#deleteusermodal').modal('hide');
        $.post("ajax_delete.php", { string: string }, function(data) {
           //$("#displaymessage").html(data);
        });
        $('#'+ id +'').parents("tr").remove();
    });

// Delete images for row on delete button click
   $(document).on("click", ".deleteimages", function(){
      var id = $(this).attr("id");
      var string = id;
      $.post("ajax_delete_images.php", { string: string}, function(data) {
      $("#displaymessage").html(data);
      });
    });

    // update rec row on edit button click
 $(document).on("click", ".update", function(){
  var id = $(this).attr("id");
  var proId = id;
  var txtref = $("#txtref").val();
  var txtname = $("#txtname").val();
  var txtprice = $("#txtprice").val();
  var txtSquareFeet = $("#txtSquareFeet").val();
  var txtLandArea = $("#txtLandArea").val();
  var txtaddress = $("#txtaddress").val();
  var txtsmalldescription = $("#txtsmalldescription").val();
  var txtmetadesc = $("#txtmetadesc").val();
  var txtType = $("#txttype").text();
  
  $(this).parents("tr").find(".exit").removeClass("exit").addClass("close");
  $(this).parents("tr").find(".update").removeClass("update").addClass("add");
  $(this).parents("tr").find(".edit, .add").toggle();

  $(this).parents("tr").find("td:not(:last-child)").each(function(i){
    if (i == 1){
       $(this).html('<td style="width:45%;">' +
                       '<h4 id="'+ id + '_pName">'+ txtname +'</h4>' +
                       '<div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Ref#:</b></p>' +
                                '<p id="'+ id + '_pRef" style="display: inline-block; margin-top:10px;">'+ txtref + '</p>' +
                            '</div>' + 
                            '<div>' +
                                '<p style="display: inline-block;"><b>Kvadratura (m2):</b></p>' +
                                '<p id="'+ id + '_pSquareFeet" style="display: inline-block;">' + txtSquareFeet + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Površina placa (ar):</b></p>' +
                                '<p id="'+ id + '_pLandArea" style="display: inline-block;">' + txtLandArea + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Cena:</b></p>' +
                                '<p id="'+ id + '_pPrice" style="display: inline-block;">' + txtprice + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Adresa:</b></p>' +
                                '<p id="'+ id +'_pAddress" style="display: inline-block;">' + txtaddress + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Tip:</b></p>' +
                                '<p id="'+ id +'_pType" style="display: inline-block;">'+ txtType +'</p>' +
                            '</div>' +
                        '</div>' +
                    '</td>' 
                   );
       } 
       else if (i == 2){
        $(this).html('<td style="width:40%;">' +
                         '<div>' +
                              '<p style="display: inline-block;"><b>Opis:</b></p>' +
                              '<p id="' + id + '_pSmalldesc" style="display: inline-block;">'+ txtsmalldescription +'</p>' +
                         '</div>' +
                         '<div>' +
                              '<p style="margin-top:10px; "><b>Beleška agent:</b></p>' +
                              '<p id="'+ id + '_pMetadesc">'+ txtmetadesc +'</p>' +
                         '</div>' +
                     '</td>');
       }
    });

  $.post("ajax_update.php", { proId: proId,txtref: txtref, txtname: txtname, txtprice: txtprice, txtSquareFeet: txtSquareFeet, txtLandArea: txtLandArea, txtaddress:txtaddress, txtsmalldescription:txtsmalldescription, txtmetadesc:txtmetadesc }, function(data) {
      //$("#displaymessage").html(data);
      //location.reload(true);
  });

  });
 
 // Catch Filter button
 $(document).on("click", "#filterDataTableId", function(){
   //var selectedType = $("#typeSelectId option:selected").text();
   var typeId = $("#typeSelectId").val();
   var selectedType = "_" + typeId + "_";

   if (typeId == 0){
       $('*tr[id*=_]:hidden').each(function(index, value) {
	       $("#"+ value.id + "").show();
	   });
   }
   else {
    $('*tr[id*=_]:visible').each(function(index, value) {
		$("#"+ value.id + "").hide();
	});

    $('*tr[id*=' + selectedType + ']:hidden').each(function(index, value) {
	    $("#"+ value.id + "").show();
	});
   }
 });
    
 // Edit row on edit button click
 $(document).on("click", ".edit", function(){  
   var id = $(this).attr("id");

   var refValue = $('#' + id + '_pRef').text();
   var txtNameValue = $('#' + id + '_pName').text();
   var txtPriceValue = $('#' + id + '_pPrice').text();
   var txtSquareFeetValue = $('#' + id + '_pSquareFeet').text();
   var txtLandAreaValue = $('#' + id + '_pLandArea').text();
   var txtAddressValue = $('#' + id + '_pAddress').text();
   var txtType = $('#' + id + '_pType').text();
   var txtSmallDescriptionValue = $('#' + id + '_pSmalldesc').text();
   var txtMetadescValue = $('#' + id + '_pMetadesc').text();
   
   $(this).parents("tr").find("td:not(:last-child)").each(function(i){
       
       if (i == 1){
       $(this).html('<td style="width:45%;">' +
                        '<div>' +
                           '<input type="text" name="updaterec" id="txtname" class="form-control" value="' + txtNameValue + '"></input>' +
                           '<p style="display:none" id="txtname_old">' + txtNameValue + '</p>' + 
                       '<div>'+ 
                       '<div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Ref#:</b></p>' +
                                    '<input type="text" name="updaterec" id="txtref" ' + 
                                        'style="display: inline-block; margin-top:10px; width: 60px;" value="'+ refValue + '"></input>' +
                                 '<p style="display:none" id="txtref_old">' + refValue + '</p>' + 
                             '</div>' +
                             '<div>' +
                                    '<p style="display: inline-block;"><b>Kvadratura (m2):</b></p>' +
                                    '<input type="text" name="updaterec" id="txtSquareFeet" ' + 
                                       'style="display: inline-block; width: 80px;" value="' + txtSquareFeetValue + '"></input>' +
                                    '<p style="display:none" id="txtSquareFeet_old">' + txtSquareFeetValue + '</p>' + 
                            '</div>' +
                            '<div>' +
                                    '<p style="display: inline-block;"><b>Površina placa (ar):</b></p>' +
                                    '<input type="text" name="updaterec" id="txtLandArea" ' + 
                                       'style="display: inline-block; width: 80px;" value="' + txtLandAreaValue + '"></input>' +
                                    '<p style="display:none" id="txtLandArea_old">' + txtLandAreaValue + '</p>' + 
                            '</div>' +
                             '<div>' +
                                    '<p style="display: inline-block;"><b>Cena:</b></p>' +
                                    '<input type="text" name="updaterec" id="txtprice" ' + 
                                       'style="display: inline-block; width: 80px;" value="' + txtPriceValue + '"></input>' +
                                    '<p style="display:none" id="txtprice_old">' + txtPriceValue + '</p>' + 
                            '</div>' +
                            '<div>' +
                                    '<p style="display: inline-block;"><b>Adresa:</b></p>' +
                                    '<input type="text" name="updaterec" id="txtaddress" ' + 
                                      'style="display: inline-block; width: 120px;" value="' + txtAddressValue + '"></input>' +
                                    '<p style="display:none" id="txtaddress_old">' + txtAddressValue + '</p>' + 
                            '</div>' +
                            '<div>' +
                                    '<p style="display: inline-block;"><b>Tip:</b></p>' +
                                    '<p id="txttype" style="display: inline-block;">' + txtType + '</p>' +
                                    '<p style="display:none" id="txttype_old">' + txtType + '</p>' +
                            '</div>' + 
                        '</div>' +
                    '</td>');
       } else if(i == 2){
        $(this).html('<td style="width:40%;">' +
                          '<div>' +
                                '<p><b>Opis:</b></p>' +
                                '<textarea type="text" name="updaterec" id="txtsmalldescription" ' +
                                 'style="width:100%;">'+ txtSmallDescriptionValue + '</textarea>' +
                                 '<p style="display:none" id="txtsmalldescription_old">' + txtSmallDescriptionValue + '</p>' + 
                          '</div>' +
                          '<div>' +
                                '<p style="margin-top:10px;"><b>Beleška agent:</b></p>' + 
                                '<textarea type="text" name="updaterec" id="txtmetadesc" ' + 
                                'style="width:100%;">' + txtMetadescValue + '</textarea>' +
                                '<p style="display:none" id="txtmetadesc_old">' + txtMetadescValue + '</p>' +
                          '</div>' +
                        '</td>');
       } 
    
  });

  $(this).parents("tr").find(".add, .edit").toggle();
  $(".add-new").attr("disabled", "disabled");
  $(this).parents("tr").find(".add").removeClass("add").addClass("update");
  $(this).parents("tr").find(".close").removeClass("close").addClass("exit");
    });

  // Close edit form
  $(document).on("click", ".exit", function(){ 
    $(this).parents("tr").find(".exit").removeClass("exit").addClass("close");
    $(this).parents("tr").find(".update").removeClass("update").addClass("add");
    $(this).parents("tr").find(".edit, .add").toggle();
    
    var id = $(this).attr("id");

    var txtref = $('#txtref_old').text();
    var txtname = $('#txtname_old').text();
    var txtprice = $('#txtprice_old').text();
    var txtSquareFeet = $('#txtSquareFeet_old').text();
    var txtLandArea = $('#txtLandArea_old').text();
    var txtaddress = $('#txtaddress_old').text();
    var txtType = $('#txttype_old').text();
    var txtsmalldescription = $('#txtsmalldescription_old').text();
    var txtmetadesc = $('#txtmetadesc_old').text();
    
    $(this).parents("tr").find("td:not(:last-child)").each(function(i){
        if (i == 1){
       $(this).html('<td style="width:45%;">' +
                       '<h4 id="'+ id + '_pName">'+ txtname +'</h4>' +
                       '<div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Broj nepokretnosti:</b></p>' +
                                '<p id="'+ id + '_pRef" style="display: inline-block; margin-top:10px;">'+ txtref + '</p>' +
                            '</div>' + 
                            '<div>' +
                                '<p style="display: inline-block;"><b>Kvadratura (m2):</b></p>' +
                                '<p id="'+ id + '_pSquareFeet" style="display: inline-block;">' + txtSquareFeet + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Površina placa (ar):</b></p>' +
                                '<p id="'+ id + '_pLandArea" style="display: inline-block;">' + txtLandArea + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Cena:</b></p>' +
                                '<p id="'+ id + '_pPrice" style="display: inline-block;">' + txtprice + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Adresa:</b></p>' +
                                '<p id="'+ id +'_pAddress" style="display: inline-block;">' + txtaddress + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Tip:</b></p>' +
                                '<p id="'+ id +'_pType" style="display: inline-block;">'+ txtType +'</p>' +
                            '</div>' +
                        '</div>' +
                    '</td>' 
                   );
       } 
       else if (i == 2){
        $(this).html('<td style="width:40%;">' +
                         '<div>' +
                              '<p style="display: inline-block;"><b>Opis:</b></p>' +
                              '<p id="' + id + '_pSmalldesc" style="display: inline-block;">'+ txtsmalldescription +'</p>' +
                         '</div>' +
                         '<div>' +
                              '<p style="margin-top:10px; "><b>Beleška agent:</b></p>' +
                              '<p id="'+ id + '_pMetadesc">'+ txtmetadesc +'</p>' +
                         '</div>' +
                     '</td>');
       }
    });
    
  });

</script>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!--<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>-->
  <!-- ***** Preloader End ***** -->

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                    <a href="index.php" class="logo">
                        <img src="../assets/images/2019/logo-neca-prom.jpg" alt="" style="max-width:250px; margin-top:25px;">
                    </a>

                    <ul class="nav">
                      <li><a <?php echo "href="."index.php?userId=".$_GET['userId'] ?>>Kreiraj nekretninu</a></li>
                      <li><a class="active" <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> >Lista svih Nekretnina</a></li>
                      <li><a <?php echo "href="."form.php?userId=".$_GET['userId'] ?> >Upload fotografija</a></li>
                      <li><a href="website.php">Web site</a></li>
                      <li><a href="logout.php">Odjavi se</a></li>
                      <li><a href="contact.html" style="display:none"></a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" style="display:none;">
    <div class="header-text">
    </div>
 </div>

 <!--<div  style="position:absolute; top: 0; right:0;">
        <a href="logout.php" class="btn btn-warning" >Logout</a>
    </div>-->
    <div class="container col-lg-12">
        <div class="table-wrapper">
            <div class="table-title">
                <div style="height: 50px;"></div>
                <div class="row">
                    <div class="col-sm-8"><h2> Detalji o nekretninama</h2></div>
                    <div class="col-sm-4">
                        <!--<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Dodaj novu</button>-->
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col-lg-3">
                        <fieldset>
                            <select id="typeSelectId" name="testDT" class="form-select">
                                <?php 
                                    require_once "database.php";
                                    $sql = "SELECT id, type_name FROM vw_getallpropertytypes ORDER BY id";
                                    $result = mysqli_query($conn, $sql);
                          
                                    while($rows = $result->fetch_assoc()){
                                        $typeName = $rows['type_name'];
                                        $typeId = $rows['id'];

                                        echo "<option value='$typeId'>$typeName</option>";
                                    };
                                ?>    
                            </select>
                       </fieldset>
                   </div>
                   <div class="col-lg-1">
                      <fieldset >
                          <button id="filterDataTableId" type="submit" name="filterProperties" class="orange-button">Filtriraj</button>
                      </fieldset>
                   </div>
               </div>
            </div>
        <table id="propertiesTableId" class="table table-bordered">
                <thead>
                    <tr style="width:90%;">
                        <th style="width:5%;">ID</th>
                        <th style="width:45%;">Naziv / Broj nepokretnosti / Kvadratura / Površina / Cena / Lokacija / Tip </th>
                        <th style="width:40%;">Opis / Beleška</th>
                        <th style="width:10%;">Akcije</th>
                    </tr>
                </thead>
                <tbody>
               <?php 
                  //include"dbcon.php"; 
                  require_once "database.php";
                  $query_pag_data = "SELECT * FROM vw_getallrepinformationsforedit ORDER BY ref DESC";
                  $result_pag_data = mysqli_query($conn, $query_pag_data);
                  while($row = mysqli_fetch_assoc($result_pag_data)) {
                      $property_id=$row['id']; 
                      $property_ref=$row['ref']; 
                      $property_name=$row['pro_name'];
                      $property_price=$row['price']; 
                      $property_address=$row['address']; 
                      $smalldesc=$row['pro_small_desc']; 
                      $metadesc=$row['metadesc']; 
                      $typeName=$row['type_name'];
                      $proType=$row['pro_type'];
                      $squareFeet=$row['square_feet'];
                      $landArea=$row['land_area'];
                ?>
                    <tr <?php echo "id=".$property_id."_".$proType."_" ?> style="width:90%;">
                        <td style="width:5%;">
                           <p <?php echo "id=".$property_id."_pId" ?>><?php echo $property_id; ?></p>
                        </td>
                        <td style="width:45%;">
                            <h4 <?php echo "id=".$property_id."_pName" ?>><?php echo $property_name; ?></h4>
                            <div>
                                <div>
                                    <p style="display: inline-block; margin-top:10px;"><b>Broj nepokretnosti:</b></p>
                                    <p <?php echo "id=".$property_id."_pRef" ?> style="display: inline-block; margin-top:10px;"><?php echo $property_ref; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Kvadratura (m2):</b></p>
                                    <p <?php echo "id=".$property_id."_pSquareFeet" ?> style="display: inline-block;"><?php echo $squareFeet; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Površina placa (ar):</b></p>
                                    <p <?php echo "id=".$property_id."_pLandArea" ?> style="display: inline-block;"><?php echo $landArea; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Cena:</b></p>
                                    <p <?php echo "id=".$property_id."_pPrice" ?> style="display: inline-block;"><?php echo $property_price; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Adresa:</b></p>
                                    <p <?php echo "id=".$property_id."_pAddress" ?> style="display: inline-block;"><?php echo $property_address; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Tip:</b></p>
                                    <p <?php echo "id=".$property_id."_pType" ?> style="display: inline-block;"><?php echo $typeName; ?></p>
                                </div>
                            </div>
                        </td>
                        <td style="width:40%;">
                            <div>
                                <p style="display: inline-block;"><b>Opis:</b></p>
                                <p <?php echo "id=".$property_id."_pSmalldesc" ?> style="display: inline-block;"><?php echo $smalldesc; ?></p>
                            </div>
                            <div>
                                <p style="margin-top:10px; "><b>Beleška agent:</b></p>
                                <p <?php echo "id=".$property_id."_pMetadesc" ?> ><?php echo $metadesc; ?></p>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <div class="add" title="Edit" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-check"></i></div>
                            <div class="edit" title="Edit" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-pencil"></i></div>
                            <div class="delete" title="Delete" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-trash-o"></i></div>
                            <div class="deleteimages" title="Delete Image" data-toggle="tooltip" id="<?php echo $property_id; ?>"><img src="../assets/images/2019/remove-image.svg" style="width:30px;"></img></div>
                            <div class="close" title="Exit" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-close"></i></div>
                        </td>
                    </tr>   
          <?php } ?>     
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="deleteusermodal" tabindex="-1" aria-labelledby="deleteusermodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteusermodalLabel">Delete User Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <input type="text" name="user_id" id="user_id">
                    <div class="modal-body">
                        <h4>Are you sure?</h4>
                    </div>    
                    <div class="modal-footer">
                        <button id="closeDeleteDataId" type="button" name="close_delete_data" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="finalDeleteDataId" type="button" name="delete_data" class="btn btn-danger">Yes | Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script> 

  </body>
</html>