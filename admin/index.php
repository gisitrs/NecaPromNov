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

  <!--<script type="text/javascript">
       window.onbeforeunload = function() {
         var text = "Leave sajt";
         return text;
       }
  </script>-->

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                    <a href="index.php" class="logo">
                      <img src="../assets/images/2019/Necaprom_transparent.png" alt="" class="mainLogoImage">
                    </a>

                    <ul class="nav">
                      <li><a style="margin-left: -30px;" <?php echo "href="."index.php?userId=".$_GET['userId'] ?> class="active">Nova nekretnina</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> >Sve nekretnine</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."sold_properties_datatable.php?userId=".$_GET['userId'] ?> >Prodate nekretnine</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."form.php?userId=".$_GET['userId'] ?> >Dodaj fotografije</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='adminToWebsite("Edit", "Ovom akcijom napuštate admin sesiju, da li ste sigurni?");'>Sajt</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='adminLogOut("Edit", "Da li želite da napustite NecaProm admin?");'>Odjavi se</a></li>
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

  <!--<div class="main-banner" style="display:none;">
    <div class="header-text">
    </div>
  </div>-->

  <div class="col-lg-12">
        <?php
        if (isset($_POST["createProperty"])) { 
           $ref = $_POST["ref"];
           $proName = $_POST["fullname"];
           $proAlias = 'Test';
           $agentId = 1;
           $companyId = 0;

           $price = $_POST["price"];
           $proSmallDesc = $_POST["description"];
           $proType =  $_POST["propertyTypes"];
           $soldOn = '2024-11-30';

           $address = $_POST["address"];
           $squarefeet = $_POST["squarefeet"];
           $landarea = $_POST["landarea"];
           $metaDesc = $_POST["description1"];
           $created = '2024-11-30';
           $createdBy = $_GET["userId"];
           $removeDate = '2024-11-30';
           $isfeatured = $_POST["isfeatured"];

           $proPdfFile = '';
           $energy = '0.00';
           $climate = '0.00';
           $rentTime = '';

           //$squareFeet = '0.00';
           $lotSize = '0.00';
           $cclass = '';
           $eclass = '';

           if ($landarea == ""){
              $landarea = 0.0;
           }

           if ($squarefeet == ""){
              $squarefeet = 0.0;
           }

           //echo "<div class='alert alert-success'>land are = ".$landarea."</div>";

           //$selectedCategoryId = $_POST["propertyCategories"];
           
           require_once "database.php";
           $maxId = "SELECT  MAX(Id) AS MaxId FROM jos_osrs_properties";
           $resultMaxId = mysqli_query($conn, $maxId);
           $resultMaxValue = mysqli_fetch_array($resultMaxId, MYSQLI_ASSOC);
           $newId = $resultMaxValue["MaxId"] + 1;

           $sql = "INSERT INTO jos_osrs_properties (
                                                      id, ref, pro_name, pro_alias, agent_id, company_id, price,
                                                      pro_small_desc, pro_type, soldOn, address, metadesc,
                                                      created, created_by, remove_date, pro_pdf_file, energy,
                                                      climate, rent_time, lot_size, c_class, e_class, 
                                                      square_feet, land_area, isFeatured
                                                    ) 
                                                    VALUES ( ?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssss", $newId, $ref, $proName, $proAlias, $agentId, $companyId, $price, 
                                                   $proSmallDesc, $proType, $soldOn, $address, $metaDesc,
                                                   $created, $createdBy, $removeDate, $proPdfFile, $energy,
                                                   $climate, $rentTime, $lotSize, $cclass, $eclass,
                                                   $squarefeet, $landarea, $isfeatured);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Nova nekretnina ".$proName." je uspešno kreirana</div>";
            }
            else{
                die("Something went wrong");
            }

            /*$sql = "INSERT INTO jos_osrs_property_categories (pid, category_id) VALUES (?,?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);

            if ($prepareStmt) {
               mysqli_stmt_bind_param($stmt,"ss", $newId, $selectedCategoryId);
               mysqli_stmt_execute($stmt);
               //echo "<div class='alert alert-success'>Kategorija ".$selectedCategoryId." je uspešno dodata za novu nepokretnost</div>";
               echo "<div class='alert alert-success'>Nova nekretnina ".$proName." je uspešno kreirana</div>";
            }
            else{
               die("Something went wrong");
            }*/
        }
        
        /*if (isset($_POST["goToNewpage"])) {
            header("Location: form.php");
        }

        if (isset($_POST["goToDatatablePage"])) {
            header("Location: datatable.php?userId=".$_GET["userId"]);
        }*/

        ?>
    </div>
  
  <div class="contact section" style="margin-top: -30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 offset-lg-12">
        </div>
      </div>
    </div>
  </div>
  
  <div class="contact-content">
    <div class="container">
    <?php echo "<form id="."contact-form"." style="."width: 100%;"." action="."index.php?userId=".$_GET["userId"]." method="."post".">"  ?>
      <div class="row">
      <div class="section-heading text-center">
          <h3>Kreiraj nekretninu</h3>
      </div>
          <p>Broj nepokretnosti</p>
        <div class="col-lg-6">
            <div class="contact-content" style="margin-top: 0px;">
               
                  <div class="row">
                     <div class="col-lg-12">
                        <?php
                          require_once "database.php";
                          $maxRefId = "SELECT  MAX(ref) AS MaxRefId FROM jos_osrs_properties";
                          $resultMaxId = mysqli_query($conn, $maxRefId);
                          $resultMaxValue = mysqli_fetch_array($resultMaxId, MYSQLI_ASSOC);
                          $newRef = $resultMaxValue["MaxRefId"] + 1;
                           
                          echo "<fieldset>".
                                    "<input type="."name"." name="."ref"." autocomplete="."on"." required value=".$newRef.">".
                               "</fieldset>"
                        ?>
                     </div>
                     <div class="col-lg-12">
                        <fieldset>
                           <input type="name" name="fullname" placeholder="Naziv:" autocomplete="on" required>
                        </fieldset>
                     </div>
                     <div class="col-lg-12">
                        <fieldset>
                           <input type="phone" name="price" placeholder="Cena:" autocomplete="on" required>
                        </fieldset>
                     </div>
                     <div class="col-lg-12">
                         <fieldset>
                           <textarea name="description" placeholder="Opis:"></textarea>
                         </fieldset>
                     </div>
                     <div class="col-lg-4">
                        <div style="display: inline-block;">
                          <input type="hidden" id="isFeatured" name="isfeatured" style="margin-left:20px; width:30px; height:30px;" value="0">
                          <input type="checkbox" id="isFeatured" name="isfeatured" style="margin-left:20px; width:30px; height:30px;" value="1">
                        </div>
                        <div style="display: inline-block;">
                          <label for="isFeatured" style="margin-left: 15px; margin-bottom: 20px;">Istakni</label>
                        </div>
                     </div>
                 </div>
               </form>
            </div>
        </div>

        <div class="col-lg-6">
          <div class="contact-content" style="margin-top: 0px;">
            <div class="row">
              <div class="col-lg-12">
                 <fieldset>
                    <input type="phone" name="address" placeholder="Adresa:" autocomplete="on" required>
                 </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                     <!--<select name="propertyCategories" class="form-select">
                        
                           require_once "database.php";
                           $sql = "SELECT id, category_name FROM jos_osrs_categories";
                           $result = mysqli_query($conn, $sql);
                           
                           while($rows = $result->fetch_assoc()){
                               $categoryName = $rows['category_name'];
                               $categoryId = $rows['id'];

                               echo "<option value='$categoryId'>$categoryName</option>";
                           };
                        
                      </select>-->
                      <input type="phone" name="squarefeet" placeholder="Kvadratura (m&sup2):" autocomplete="on">
                  </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <input type="phone" name="landarea" placeholder="Površina placa (ar):" autocomplete="on">
                  </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                     <select name="propertyTypes" class="form-select">
                        <?php 
                           require_once "database.php";
                           $sql = "SELECT id, type_name FROM jos_osrs_types";
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
              <div class="col-lg-12" style="margin-top:10px;">
                  <fieldset>
                     <textarea name="description1" placeholder="Beleška za agenta:" style="height: 100px;"></textarea>
                  </fieldset>
              </div>
              <div class="col-lg-12" style="margin-top: 0px;">
                  <fieldset >
                     <button type="submit" name="createProperty" class="orange-button">Kreiraj</button>
                  </fieldset>
              </div>
            </div>
        </div>

      </div>
     </form>
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
  <script src="customAdmin.js"></script> 
  </body>
</html>