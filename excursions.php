<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Property Listing by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
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

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
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
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <h1>Neca</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Naslovna</a></li>
                      <li><a href="properties.php">Prodaja</a></li>
                      <li><a href="rents.php">Izdavanje</a></li>
                      <li><a href="vacations.php">Letovanje</a></li>
                      <li><a href="excursions.php" class="active">Izleti</a></li>
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
            $conn = mysqli_connect("127.0.0.1:3306", "root", "WeAreGisTeam2013", "marinkom_jos1");
            if ($conn -> connect_error) 
            {
               die("Connection failed:".$conn-> connect_error);
            }
            
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
                                "<a href="."property-details.html"."><img src="."assets/images/properties/".$row["id"]."/".$row["image"]."></a>".
                                
                                "<span class="."category".">".$row["ref"].", ".$row["pro_name"]."</span>".
                                "<p class="."price"."><b> Cena: ".$row["price"]."</b></p>".
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
                <div class="col-lg-4 col-md-6">
                    <a href="index.php" class="logo">
                        <h1 style="color:#FFF;">Neca Prom D.O.O.</h1>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 id="indexTextId44" class="text-light mb-4" style="color:#FFF;">Adresa</h4>
                    <p id="indexTextId45" class="mb-2" style="color:#FFF;"><i class="fa fa-map-marker-alt me-3"></i>Svetog Save 19, Sokobanja</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>018/884-111; 069/54 53 577 Nemanja</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>018/833-072</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>063/831-8-144 Zoran</p>
                    <a class="mb-2" href="mailto: petar.krizan.dimnjaci@gmail.com" style="font-size: 13px; color:orange;"><i class="fa fa-envelope me-3"></i>petar.krizan.dimnjaci@gmail.com</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Brzi linkovi</h4>
                    <ul class="text-light">
                      <li><a href="index.php" class="active" style="color:#FFF;">Naslovna</a></li>
                      <li><a href="properties.php" style="color:#FFF;">Prodaja</a></li>
                      <li><a href="rents.php" style="color:#FFF;">Izdavanje</a></li>
                      <li><a href="vacations.php" style="color:#FFF;">Letovanje</a></li>
                      <li><a href="contact.html" style="color:#FFF;">Kontakt</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

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