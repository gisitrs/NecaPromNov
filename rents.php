<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link href="assets/images/2019/Logo1.png" rel="icon">

    <title>Neca Prom D.O.O.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
        body {touch-action: pan-y;}
    </style>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
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

  <!--<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope" href="mailto: necaprom@ptt.rs"></i> necaprom@ptt.rs</li>
            <li><i class="fa fa-map"></i> Svetog Save 19, Sokobanja</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>-->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/2019/Necaprom_transparent.png" alt="" class="mainLogoImage">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Naslovna</a></li>
                      <li><a href="properties.php">Prodaja</a></li>
                      <li><a href="rents.php" class="active">Izdavanje</a></li>
                      <li><a href="vacations.php">Letovanje</a></li>
                      <li><a href="excursions.php">Izleti</a></li>
                      <li><a href="contact.html">Kontakt</a></li>
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
  
  <div class="main-banner" style="display:none;">
     <div class="header-text">
     </div>
  </div>

  <!-- ***** Header Area End ***** -->

  <!--<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>-->

  <div class="section properties">
    <div class="container">
    <div class="row">
      <?php 
            require_once "admin/database.php";
            $sql = "SELECT * FROM vw_getallpropertiesforrent";
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                   /*$sql1 = "SELECT [image] FROM marinkom_jos1.jos_osrs_photos WHERE pro_id =".$row["id"]."  AND ordering = 1"; 
                   $result1 = $conn-> query($sql1);*/
                   /* assets/images/property-01.jpg */
                   /* assets/images/properties/".$row["image"]. */
                   echo "<div "."id=".$row["typeId"]." class="."col-lg-4".">".
                            "<div class="."item".">".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><img src=".$row["image_path"]."></a>".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><span class="."category".">".$row["ref"].", ".$row["pro_name"]."</span></a>".
                                "<div><p class="."price"."><b> Cena: ".$row["price_text"]."</b></p>".
                                "<p class="."squareFeet"."><b>Kvadratura: ".$row["square_feet_text"]." m2</b></p></div><br/><br/>".
                                "<p>".$row["pro_small_desc"]."</p>".
                              "</div>".
                          "</div>";
               }
            }
            else {
                echo "0 results";
            }
            
            $conn-> close();
        ?>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <div class="col-lg-12 container-fluid bg-dark text-light footer mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!--<div class="col-lg-4 col-md-6">
                    <a href="index.php" class="logo">
                        <img src="assets/images/2019/logo-neca-prom.jpg" alt="" style="max-width:250px; margin-top:25px;">
                    </a>
                </div>-->
                <div class="col-lg-4 col-md-4">
                    <h4 id="indexTextId44" class="text-light mb-4" style="color:#FFF;">Adresa</h4>
                    <p id="indexTextId45" class="mb-2" style="color:#FFF;"><i class="fa fa-map-marker-alt me-3"></i>Svetog Save 19, Sokobanja</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 id="indexTextId44" class="text-light mb-4" style="color:#FFF;">Kontakt</h4>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>018/884-111; 069/54 53 577 Nemanja</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>018/833-072</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>063/831-8-144 Zoran</p>
                    <a class="mb-2" href="mailto: necaprom@ptt.rs" style="font-size: 13px; color:#36389b;"><i class="fa fa-envelope me-3"></i>necaprom@ptt.rs</a>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-light mb-4">Brzi linkovi</h4>
                    <ul class="text-light">
                      <li><a href="index.php" class="active" style="color:#FFF;">Naslovna</a></li>
                      <li><a href="properties.php" style="color:#FFF;">Prodaja</a></li>
                      <li><a href="vacations.php" style="color:#FFF;">Letovanje</a></li>
                      <li><a href="excursions.php" style="color:#FFF;">Izleti</a></li>
                      <li><a href="contact.html" style="color:#FFF;">Kontakt</a></li>
                    </ul> 
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:-30px; padding-bottom: 25px;">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center" style="font-size: 11px;">
                       Sadržaj sajta je vlasništvo Neca Prom D.O.O. Sokobanja
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <div style="padding-bottom: 15px; padding-top: 15px; background-color: #FFFFFF;">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center" style="font-size:11px;">
                   <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                   <b>Created By</b> <a href="https://www.gisit.rs">
                   <img src="assets/images/2019/Gisit_transparent.png" alt="" style="max-width:100px;">
                   </a>
                </div>
            </div>
        </div>
    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>