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
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
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
                      <li><a href="index.php" class="active">Kreiraj nekretninu</a></li>
                      <li><a <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> >Lista svih Nekretnina</a></li>
                      <li><a href="form.php">Upload fotografija</a></li>
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
 
 <div class="col-lg-12">

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
           $metaDesc = $_POST["description1"];
           $created = '2024-11-30';
           $createdBy = $_GET["userId"];
           $removeDate = '2024-11-30';

           $proPdfFile = '';
           $energy = '0.00';
           $climate = '0.00';
           $rentTime = '';

           $squareFeet = '0.00';
           $lotSize = '0.00';
           $cclass = '';
           $eclass = '';
           $success = 1;

           $selectedCategoryId = $_POST["propertyCategories"];
           
           require_once "database.php";
           $maxId = "SELECT  MAX(Id) AS MaxId FROM marinkom_jos1.jos_osrs_properties";
           $resultMaxId = mysqli_query($conn, $maxId);
           $resultMaxValue = mysqli_fetch_array($resultMaxId, MYSQLI_ASSOC);
           $newId = $resultMaxValue["MaxId"] + 1;

           $sql = "INSERT INTO jos_osrs_properties (
                                                      id, ref, pro_name, pro_alias, agent_id, company_id, price,
                                                      pro_small_desc, pro_type, soldOn, address, metadesc,
                                                      created, created_by, remove_date, pro_pdf_file, energy,
                                                      climate, rent_time, square_feet, lot_size, c_class, e_class
                                                    ) 
                                                    VALUES ( ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssss", $newId, $ref, $proName, $proAlias, $agentId, $companyId, $price, 
                                                   $proSmallDesc, $proType, $soldOn, $address, $metaDesc,
                                                   $created, $createdBy, $removeDate, $proPdfFile, $energy,
                                                   $climate, $rentTime, $squareFeet, $lotSize, $cclass, $eclass);
                mysqli_stmt_execute($stmt);
                //echo "<div class='alert alert-success'>Nova nekretnina ".$proName." je uspešno kreirana</div>";
            }
            else{
                die("Something went wrong");
                $success = 0;
            }

            $sql = "INSERT INTO jos_osrs_property_categories (pid, category_id) VALUES (?,?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);

            if ($prepareStmt) {
               mysqli_stmt_bind_param($stmt,"ss", $newId, $selectedCategoryId);
               mysqli_stmt_execute($stmt);
               //echo "<div class='alert alert-success'>Kategorija ".$selectedCategoryId." je uspešno dodata za novu nepokretnost</div>";
            }
            else{
               die("Something went wrong");
               $success = 0;
            }

            if ($success = 1){
                echo "<script>alert("."Uspešno je kreirana ".$proName." nekretnina".")</script>";
            }
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
            <h2>Kreiraj Nekretninu</h2>
          </div>
        <div class="col-lg-6">
            <div class="contact-content" style="margin-top: 0px;">
               
                  <div class="row">
                     <div class="col-lg-12">
                        <fieldset>
                           <input type="name" name="ref" placeholder="Ref:" autocomplete="on" required>
                        </fieldset>
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
                     <select name="propertyCategories" class="form-select">
                        <?php 
                           require_once "database.php";
                           $sql = "SELECT id, category_name FROM marinkom_jos1.jos_osrs_categories";
                           $result = mysqli_query($conn, $sql);
                           
                           while($rows = $result->fetch_assoc()){
                               $categoryName = $rows['category_name'];
                               $categoryId = $rows['id'];

                               echo "<option value='$categoryId'>$categoryName</option>";
                           };
                        ?>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-12" style="margin-top:35px;">
                  <fieldset>
                     <select name="propertyTypes" class="form-select">
                        <?php 
                           require_once "database.php";
                           $sql = "SELECT id, type_name FROM marinkom_jos1.jos_osrs_types";
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
              <div class="col-lg-12" style="margin-top:35px;">
                  <fieldset>
                     <textarea name="description1" placeholder="Beleška za agenta:"></textarea>
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