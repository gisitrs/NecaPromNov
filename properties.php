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
                      <li><a href="index.php" style="font-size: 18px">Naslovna</a></li>
                      <li><a href="properties.php" class="active" style="font-size: 18px">Prodaja</a></li>
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

  <div class="section properties" style="margin-top: 20px;">
    <div class="container">
        <div class="row" id="testRowCSS">
            <ul id="filterButtonsId" class="properties-filter" style="cursor:pointer">
                <li>
                    <a id="rlestfilter" class="is_active" data-position="0">Sve nekretnine</a>
                </li>
                <li>
                    <a id="housesfilter" data-position="1">Kuće</a>
                </li>
                <li>
                    <a id="flatsfilter" data-position="2">Stanovi</a>
                </li>
                <li>
                    <a id="cottagesfilter" data-position="3">Vikendice</a>
                </li>
                <li>
                    <a id="parcelsfilter" data-position="4">Placevi</a>
                </li>
                <li>
                    <a id="villagesfilter" data-position="5">Seoska domaćinstva</a>
                </li>
                <li>
                    <a id="issuingbfilter" data-position="7">Poslovni prostor</a>
                </li>
                <li style="display:none;">
                    <a id="apartmentsfilter" data-position="11">Izdavanje apartmana</a>
                </li>
                <li style="display:none;">
                    <a id="replacementsfilter" data-position="8">Zamene</a>
                </li>
            </ul>

            <div id="btnScrollToTop" class="btnScrollToTopHidden">
                <img id="scrollToTopArrowId" src="assets/images/2019/scrollUpArrow.png"></img>
            </div>
            
            <div class="container" style="margin-top: -50px;">
                <div class="row">
                    <div class="col-lg-4">
                        <select id="sortDropdownId" onchange="sortProperties()" class="form-select" >
                            <option value="0">Sortiraj</option>
                            <option value="1">Po ceni uzlazno</option>
                            <option value="2">Po ceni silazno</option>
                            <option value="3">Po kvadraturi uzlazno</option>
                            <option value="4">Po kvadraturi silazno</option>
                        </select>
                    </div>
                    <div class="col-lg-4" style="height: 20px;">
                    </div>
                    <div class="col-lg-4" style="margin-top: 8px;">
                        <button type="button" class="collapsible" onclick="collapseDivs()">Opcije za filtriranje 
                           <img id="collapseArrowId" src="assets/images/2019/arrow-down.jpg" style="width:20px; backgrpound-color:#36389b; float:right;">
                           </img>
                        </button>
                    </div>
                </div>
            </div>

            <div id="toggledivid" class="container col-lg-12 content1" style="width:98%; margin-top: -5px; border-radius: 5px; border: 5px solid ; border-color: #36389b;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="double-slider-box content1">
                            <h4 class="range-title">Raspon cene</h4>
                            <br/>
                            <div class="range-slider">
                                <span class="slider-track"></span>
                                <?php 
                                include "slider-component.php";
                                ?>
                                <div class="tooltip1 min-tooltip"></div>
                                <div class="tooltip1 max-tooltip"></div>
                            </div>
                            <div class="input-box">
                                <div class="min-box">
                                    <div class="input-wrap">
                                        <span class="input-addon">€</span>
                                        <input id="minRangeValue" type="text" name="min_input" class="input-field min-input" style="font-size: 16px;" onchange="setMinInput()">
                                    </div>
                                </div>
                                <div class="max-box">
                                    <div class="input-wrap" style="width: 110%;">
                                        <span class="input-addon">€</span>
                                        <input id="maxRangeValue" type="text" name="max_input" class="input-field max-input" style="font-size: 16px;" onchange="setMaxInput()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-4">
                        <div class="double-slider-box content1">
                            <h4 class="range-title">Površina objekta</h4>
                            <br/>
                            <div class="range-slider">
                                <span class="slider-track-SF1"></span>
                                <?php 
                                   include "slider_sf1-component.php";
                                ?>
                                <div class="tooltip1 min-tooltip-sf1"></div>
                                <div class="tooltip1 max-tooltip-sf1"></div>
                            </div>
                            <div class="input-box">
                                <div class="min-box">
                                   <div class="input-wrap">
                                       <span class="input-addon">m<sup>2</sup></span>
                                       <input id="minSquareValue" type="text" name="min_objsf_input" class="input-field min-input-sf1" style="font-size: 16px;" onchange="setMinInputSF1()">
                                   </div>
                                </div>
                                <div class="max-box">
                                    <div class="input-wrap">
                                        <span class="input-addon">m<sup>2</sup></span>
                                        <input id="maxSquareValue" type="text" name="max_objsf_input" class="input-field max-input-sf1" style="font-size: 16px;" onchange="setMaxInputSF1()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="double-slider-box content1">
                            <h4 class="range-title">Površina placa</h4>
                            <br/>
                            <div class="range-slider">
                                <span class="slider-track-SF2"></span>
                                <?php 
                                    include "slider_sf2-component.php";
                                ?>
                                <div class="tooltip1 min-tooltip-sf2"></div>
                                <div class="tooltip1 max-tooltip-sf2"></div>
                            </div>
                            <div class="input-box">
                                <div class="min-box">
                                    <div class="input-wrap">
                                        <span class="input-addon">ar</span>
                                        <input id="minSquareParcelValue" type="text" name="min_input" class="input-field min-input-sf2" style="font-size: 16px;" onchange="setMinInputSF2()">
                                    </div>
                                </div>
                                <div class="max-box">
                                    <div class="input-wrap">
                                        <span class="input-addon">ar</span>
                                        <input id="maxSquareParcelValue" type="text" name="max_input" class="input-field max-input-sf2" style="font-size: 16px;" onchange="setMaxInputSF2()">
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="col-lg-4 content1">
                    </div>
                    <div class="col-lg-4 content1">
                        <button type="button" class="btn btn-primary" style="margin-top:20px; margin-bottom:5px; background-color: #36389b; width:100%; border:none"  onclick="filterProperties()">Filtriraj</button>
                    </div>
                    <div class="col-lg-4">
                    <!--<select id="sortDropdownId" onchange="sortProperties()" class="form-select" style="margin-top:20px;">
                            <option value="0">Sortiraj</option>
                            <option value="1">Po ceni uzlazno</option>
                            <option value="2">Po ceni silazno</option>
                            <option value="3">Po kvadraturi uzlazno</option>
                            <option value="4">Po kvadraturi silazno</option>
                        </select>-->
                    </div>
                </div> <!-- row close div -->
            </div>
            
            <div class="row" id="mylist" style="margin-top: 20px;">
                <?php 
                    require_once "admin/database.php";
                    $sql = "SELECT * FROM vw_getallpropertiesforsale";
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

                            echo "<div "."id=".$row["typeId"]." class="."col-lg-4"." data-position=".$row["price"]."-".$row["pro_type"]."-".$row["square_feet"]."-".$row["land_area_text"]."-".$row["isFeatured"].">".
                                     "<div class="."item".">".
                                         "<div class="."img_lg".">".
                                            "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><img src=".$row["image_path"]." class="."img_lg"."></a>".
                                         "</div>".
                                         "<div style="."text-align:center".">".
                                            "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><span class="."category".">".$row["pro_name"]."</span></a>".
                                         "</div>".
                                         "<div class="."parent".">".
                                            "<div style="."text-align:center".">".
                                                "<div class="."child"." style="."width:33%".">".
                                                    "<img src="."assets/images/icon-house-numbering.png"." style="."width:35px;height:35px; display:inline-block;"."><br><p style="."display:inline-block;margin-left:3px;"."><b>".$row["ref"]."</b></p><br/>".
                                                "</div>".
                                            "</div>".
                                            "<div style="."text-align:center".">".
                                                "<div class="."child"." style="."width:34%".">".
                                                    "<img src="."assets/images/icon-area.png"." style="."width:35px;height:35px; display:inline-block;"."><br><p style="."display:inline-block;margin-left:3px;"."><b>".$areaText."</b></p><br/>".
                                                "</div>".
                                            "</div>".
                                            "<div style="."text-align:center".">".
                                                "<div class="."child"." style="."width:33%;".">".
                                                    "<img src="."assets/images/icon-shopping.png"." style="."width:35px;height:35px; display:inline-block;"."><br><p style="."display:inline-block;margin-left:3px;"."><b>".$row["price_text"]."</b></p><br/>".
                                                "</div>".
                                            "</div>".
                                         "</div>".
                                         "<br/><br/>".
                                         "<p style="."line-height:24px;".">".$row["pro_small_desc"]."</p>".
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
  <script src="assets/js/range.js"></script> 

  </body>
</html>