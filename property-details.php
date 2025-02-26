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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
        body {touch-action: pan-y;}

        header, footer {
          display: none:
        }
        
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

  <!--<div class="sub-header" style="display:block">
    <div class="container">
      <div id="firstRowId" class="row">
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
        <div id="secondRowId" class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/2019/Necaprom_transparent.png" alt="" class="mainLogoImage">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" class="active" style="font-size: 18px">Naslovna</a></li>
                      <li><a href="properties.php" style="font-size: 18px">Prodaja</a></li>
                      <li><a href="rents.php" style="font-size: 18px">Izdavanje</a></li>
                      <li><a href="excursions.php" style="font-size: 18px">Izleti</a></li>
                      <li><a href="contact.html" style="font-size: 18px">Kontakt</a></li>
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

  <div id="btnScrollToTop" class="btnScrollToTopHidden">
    <img id="scrollToTopArrowId" src="assets/images/2019/scrollUpArrow.png"></img>
  </div>

  <div id='DivIdToPrint' style="display:none;">
    <?php 
            include"admin/database.php"; 
            $sql = "SELECT * FROM vw_getallpropertydetails WHERE id =".$_GET['prid'];
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                   if ($row["pro_type"] == 4){
                      $areaText = "Površina: ".$row["land_area_text"]." ar";
                   }
                   else {
                      $areaText = "Kvadratura: ".$row["square_feet_text"]." m<sup>2</sup>";

                      if($row["pro_type"] == 11){
                        $displayRefId = "display:none";
                      }
                      else {
                        $displayRefId = "display:block";
                      }
                  }    

                   echo "<div "."id=".$row["typeId"]." class="."col-lg-4"." data-position=".$row["price"]."-".$row["pro_type"].">".
                            "<div class="."item".">".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><img src=".$row["image_path"]."></a><br><br><br>".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><span class="."category".">".$row["pro_name"]."</span></a>".
                                "<div>".
                                    "<p class="."ref"." style=".$displayRefId."><b>Broj nepokretnosti: ".$row["ref"]."&nbsp;&nbsp;&nbsp;&nbsp;</b><b>".$areaText." m2&nbsp;&nbsp;&nbsp;&nbsp;<b>Cena: ".$row["price_text"]."</b></p>".
                                "</div>".
                                "<p style="."line-height:24px;".">".$row["pro_small_desc"]."</p>".
                              "</div>".
                          "</div>";
               }
            }
            else {
                echo "";
            }
            
            $conn-> close();
        ?>
</div>

  <div id="printableAreaId" class="section best-deal" style="margin-top:-30px;">
    <div class="container">
      <div id="thirdRowId" class="row">
        <?php 
            include"admin/database.php";
            $sql = "SELECT * FROM vw_getallpropertydetails WHERE id =".$_GET['prid'];
            $result = $conn-> query($sql);
            $counter = 1;
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                    echo "<div class="."col-lg-12"."style="."margin-top: 10px;".">
                          <div class="."section-heading".">
                              <h2>".$row["pro_name"]."</h2>
                          </div>
                          </div>
                          <div class="."col-lg-12".">
                              <div class="."tabs-content".">
                                  <div class="."row".">
                                      <div class="."nav-wrapper". ">
                                      </div> 
                                      <div class="."tab-content"." id="."myTabContent1".">
                                          <div>
                                              <div class="."row".">";
               }
            }
            else {
                echo "";
            }
            
            $conn-> close();
        ?>
        <div class="col-lg-6">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <?php 
                include"admin/database.php";
                $sql = "SELECT * FROM vw_getallimages WHERE ordering != 1 AND id =".$_GET['prid'];
                $result = $conn-> query($sql);
                $counter = 1;
            
                if ($result-> num_rows > 0)
                {
                  while ($row = $result-> fetch_assoc())
                  {
                    echo "<button class="."d-block"." type="."button"." data-bs-target="."#carouselExampleIndicators"." data-bs-slide-to=".$counter." ></button>";
                    $counter++;
                  }
                }
                else {
                 echo "";
                }
            
                $conn-> close();
             ?>
            </div>
          <div class="carousel-inner">
          <div class="carousel-item active">
           <?php 
            include"admin/database.php";
            $sql = "SELECT * FROM vw_getallpropertydetails WHERE id =".$_GET['prid'];
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                echo "<img src=".$row["image_path"]." class="."d-block".">";
               }
            }
            else {
                echo "";
            }
            
            $conn-> close();
          ?>
        </div>
        <?php 
            include"admin/database.php";
            $sql = "SELECT * FROM vw_getallimages WHERE ordering != 1 AND id =".$_GET['prid'];
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                    echo "<div class="."carousel-item".">
                            <img src="."assets/images/properties/".$row["id"]."/".$row["image"]." class="."d-block".">
                          </div>";
               }
            }
            else {
                echo "";
            }
            
            $conn-> close();
          ?>
          <button class="carousel-control-prev" style="margin-left:10%;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"style="background-color: #767676; border-radius:50%; "></span>
           <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" style="margin-right:10%;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #767676; border-radius:50%; "></span>
           <span class="visually-hidden">Next</span>
          </button>
          </div>
          </div>
          <div>
              <button type="submit" id="printButton" class="btn btn-primary" style="margin-top:30px; margin-bottom:30px; background-color: #36389b; border:none" onclick='printDiv();'>Štampaj</button>
          </div>
          </div>
          <?php 
            include"admin/database.php";
            $sql = "SELECT * FROM vw_getallpropertydetails WHERE id =".$_GET['prid'];
            $result = $conn-> query($sql);
            $counter = 1;
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                   if ($row["pro_type"] == 4){
                       $areaText = "Površina: ";

                       if (explode('.',$row["land_area_text"])[1] <> '0'){
                           $areaText1 = $row["land_area_text"];
                       }
                       else {
                           $areaText1 = $row["land_area_roundtext"];
                       }

                       $areaValue = "<span>".$areaText1." a</span>";
                       $displayRefId = "display:block";
                   }
                   else {
                      $areaText = "Kvadratura: ";
                      $areaValue = "<span>".$row["square_feet_text"]." m<sup>2</sup></span>";

                      if($row["pro_type"] == 11){
                        $displayRefId = "display:none";
                      }
                      else {
                        $displayRefId = "display:block";
                      }
                   }

                    echo "<div class="."col-lg-3".">
                              <div class="."info-table"." style=".$displayRefId.">
                                <ul>
                                  <li>Broj nepokretnosti: <span>".$row["ref"]."</span></li>
                                </ul>
                              </div>
                              <br>
                              <div class="."info-table".">
                                <ul>
                                   <li>".$areaText.$areaValue."</span></li>
                                </ul>
                              </div>
                              <br>
                              <div class="."info-table".">
                                <ul>
                                   <li>Cena: <span>".$row["price_text"]."</span></li>
                                </ul>
                              </div>
                              <br>
                              <h4 style="."margin-top:20px;".">Informacije o nepokretnosti</h4>
                              <p style="."font-weight:500; margin-bottom:30px;".">".$row["pro_small_desc"]."</p>
                          </div>";
               }
            }
            else {
                echo "";
            }
            
            $conn-> close();
        ?>
          <div class="col-lg-3">
              <div class="contact-content" style="margin-top:0px;">
                <form id="contact-form" style="width: 100%;" action="https://formsubmit.co/igor94grozdanic@gmail.com" method="post">
                <div id="fourthRowId" class="row">
                  <div class="col-lg-12">
                      <fieldset>
                         <!--<label for="subject">Naslov</label>-->
                         <input type="subject" name="subject" id="subject" placeholder="Naslov..." autocomplete="on" >
                      </fieldset>
                  </div>
                  <div class="col-lg-12">
                     <fieldset>
                        <!--<label for="name">Vaše ime</label>-->
                        <input type="name" name="name" id="name" placeholder="Vaše ime..." autocomplete="on" required>
                     </fieldset>
                  </div>
                  <div class="col-lg-12">
                     <fieldset>
                        <!--<label for="phone">Telefon</label>-->
                        <input type="phone" name="phone" id="phone" placeholder="Telefon..." autocomplete="on" required>
                     </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                         <!--<label for="email">Vaš email</label>-->
                         <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Vaš email..." required="">
                      </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                         <!--<label for="message">Poruka</label>-->
                         <textarea name="message" id="message" placeholder="Poruka"></textarea>
                      </fieldset>
                  </div>
                  <div class="col-lg-12" style="margin-top: 0px;">
                      <fieldset >
                         <button type="submit" id="form-submit" class="orange-button" style="background-color: #36389b; border:none">Pošalji</button>
                      </fieldset>
                  </div>
               </div>
             </form>
            </div>
          </div>
          </div>
        </div>
        </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>

  <div>
  <div class="container text-center" >
   <h2 class="display-6 fw-bold py-5">Galerija</h2>
   <div id="fifthRowId" class="row">
   <?php 
                include"admin/database.php";
                $sql = "SELECT * FROM vw_getallimages WHERE id =".$_GET['prid'];
                $result = $conn-> query($sql);
                $counter = 1;
            
                if ($result-> num_rows > 0)
                {
                  while ($row = $result-> fetch_assoc())
                  {
                    echo "<a class="."col-lg-4"." href="."assets/images/properties/".$row["id"]."/".$row["image"]."?image=".$counter." data-toggle="."lightbox"." data-gallery="."photo_gallery".">
                              <img src=".$row["image_path"]." ?image=".$counter." class="."img-fluid1"." >
                          </a>";
                    $counter++;
                  }
                }
                else {
                 echo "";
                }
            
                $conn-> close();
             ?>
    </div>
  </div>
</div>

<div id="otherPropertiesId" class="section properties">
    <div class="container">
    <div class="section-heading">
        <h2>Povezane nepokretnosti</h2>
    </div>
    <div id="lastRow" class="row">
        <?php 
            include"admin/database.php";
            $sql = "SELECT * FROM vw_getallpropertydetails WHERE pro_type = ".$_GET['typeid']." AND id != ".$_GET['prid'];
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                  if ($row["pro_type"] == 4){
                     if (explode('.',$row["land_area_text"])[1] <> '0'){
                        $areaText = $row["land_area_text"]." a";
                     }
                     else {
                        $areaText = $row["land_area_roundtext"]." a";
                     }
                  }
                  else {
                      $areaText = $row["square_feet_text"]." m<sup>2</sup>";
                  }   

                   echo "<div "."id=".$row["typeId"]." class="."col-lg-4".">".
                            "<div class="."item".">".
                              "<div class="."img_lg".">".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><img src=".$row["image_path"]." class="."img_lg"."></a>".
                              "</div>".
                              /*"<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><img src=".$row["image_path"]."></a>".*/
                              "<div style="."text-align:center".">".
                                 "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><span class="."category".">".$row["pro_name"]."</span></a>".
                              "</div>".
                              "<div class="."parent".">".
                                 "<div style="."text-align:center".">".
                                     "<div class="."child"." style="."width:33%".">".
                                         "<img src="."assets/images/icon-house-numbering.png"." style="."width:35px;height:35px; display:inline-block;"."><br><p style="."font-weight:500;display:inline-block;margin-left:3px;"."><b>".$row["ref"]."</b></p><br/>".
                                     "</div>".
                                 "</div>".
                                 "<div style="."text-align:center".">".
                                     "<div class="."child"." style="."width:34%".">".
                                         "<img src="."assets/images/icon-area.png"." style="."width:35px;height:35px; display:inline-block;"."><br><p style="."font-weight:500;display:inline-block;margin-left:3px;"."><b>".$areaText."</b></p><br/>".
                                     "</div>".
                                 "</div>".
                                 "<div style="."text-align:center".">".
                                     "<div class="."child"." style="."width:33%;".">".
                                         "<img src="."assets/images/icon-shopping.png"." style="."width:35px;height:35px; display:inline-block;"."><br><p style="."font-weight:500;display:inline-block;margin-left:3px;"."><b>".$row["price_text"]."</b></p><br/>".
                                     "</div>".
                                 "</div>".
                              "</div>".
                              "<br/><br/>".
                              "<p style="."font-weight:500;line-height:24px;".">".$row["pro_small_desc"]."<b>".$row["isFeatured"]."</b></p>".
                            "</div>".
                          "</div>";
               }
            }
            else {
                echo "";
            }
            
            $conn-> close();
        ?>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <div class="col-lg-12">
  <div class="col-lg-12 container-fluid bg-dark text-light footer mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!--<div class="col-lg-4 col-md-6">
                    <a href="index.php" class="logo">
                        <img src="assets/images/2019/logo-neca-prom.jpg" alt="" style="max-width:250px; margin-top:25px;">
                    </a>
                </div>-->
                <div class="col-lg-3 col-md-3">
                    <h4 id="indexTextId44" class="text-light mb-4" style="color:#FFF;">Adresa</h4>
                    <p id="indexTextId45" class="mb-2" style="color:#FFF;"><i class="fa fa-map-marker-alt me-3"></i>Svetog Save 19, Sokobanja</p>
                </div>
                <div class="col-lg-3 col-md-3">
                    <h4 id="indexTextId44" class="text-light mb-4" style="color:#FFF;">Kontakt</h4>
                    <a href="tel:0638318144" class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>063/83 18 144 Zoran</a><br/>
                    <a href="tel:0695453577" class="mb-2" style="color:#FFF; margin-top:10px;"><i class="fa fa-phone-alt me-3"></i>069/54 53 577 Nemanja</a><br/>
                    <a href="tel:018884111" class="mb-2" style="color:#FFF; margin-top:10px;"><i class="fa fa-phone-alt me-3"></i>018/884-111</a><br/>
                    <a class="mb-2" href="mailto: necaprom19@gmail.com" style="font-size: 16px; color:#9fa1f5; margin-top:10px;"><i class="fa fa-envelope me-3"></i>necaprom19@gmail.com</a>
                </div>
                <div class="col-lg-3 col-md-3">
                    <h4 class="text-light mb-4">Licenca</h4>
                    <ul class="text-light">
                      <li><a href="" style="color:#FFF;">Broj licence: 976</a></li>
                    </ul> 
                </div>
                <div class="col-lg-3 col-md-3">
                    <h4 class="text-light mb-4">Brzi linkovi</h4>
                    <ul class="text-light">
                      <li><a href="index.php" class="active" style="color:#FFF;">Naslovna</a></li>
                      <li><a href="properties.php" style="color:#FFF;">Prodaja</a></li>
                      <li><a href="rents.php" style="color:#FFF;">Izdavanje</a></li>
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
  <script src="assets/js/print.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  </body>
  
  <script>
      $(document).ready(function(){
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);

          if (urlParams.get('typeid') == 11){
              $("#otherPropertiesId").css("display", "none");
          }
          else {
              $("#otherPropertiesId").css("display", "block");
          }
      });
  </script>

</html>