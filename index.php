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
                        <img src="assets/images/2019/Necaprom_transparent.png" alt="" style="max-width:250px; margin-top:25px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" class="active">Naslovna</a></li>
                      <li><a href="properties.php">Prodaja</a></li>
                      <li><a href="rents.php">Izdavanje</a></li>
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
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Kupovina i prodaja nekretnina</span>
          <h2>Procena vrednosti nekretnina</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Zakup nekretnina</span>
          <h2>Pravna pomoć</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
           <span class="category">Marketing nekretnina</span>
           <h2>Poreski saveti</h2>
        </div>
      </div>
      <div class="item item-4">
        <div class="header-text">
            <span class="category">Dozvole i licence</em></span>
            <h2>Saveti o tržištu</h2>
        </div>
      </div>
      <div class="item item-5">
        <div class="header-text">
           <!--<span class="category">Sokobanja, <em>Srbija</em></span>-->
           <h2>Investicioni saveti</h2>
        </div>
      </div>
    </div>
  </div>

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
          <a id="villagesfilter" data-position="5">Seos. domaćinstva</a>
        </li>
        <li>
          <a id="issuingbfilter" data-position="7">Poslovni prostor</a>
        </li>
        <li>
          <a id="apartmentsfilter" data-position="11">Izdavanje apartmana</a>
        </li>
        <li>
          <a id="replacementsfilter" data-position="8">Zamene</a>
        </li>
      </ul>

        <div class="col-lg-4">
           <div class="double-slider-box">
              <h4 class="range-title">Raspon cene</h4>
              <br/>
              <div class="range-slider">
                 <span class="slider-track"></span>
                 <input type="range" name="min_val" class="min-val" min="0" max="600000" value="10000" step="1000" oninput="slideMin()">
                 <input type="range" name="max_val" class="max-val" min="0" max="600000" value="350000" step="1000" oninput="slideMax()">
                 <div class="tooltip1 min-tooltip"></div>
                 <div class="tooltip1 max-tooltip"></div>
              </div>
              <div class="input-box">
                 <div class="min-box">
                   <div class="input-wrap">
                      <span class="input-addon">€</span>
                      <input id="minRangeValue" type="text" name="min_input" class="input-field min-input" onchange="setMinInput()">
                   </div>
                 </div>
                 <div class="max-box">
                   <div class="input-wrap">
                      <span class="input-addon">€</span>
                      <input id="maxRangeValue" type="text" name="max_input" class="input-field max-input" onchange="setMaxInput()">
                   </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-lg-4">
           <div class="double-slider-box">
              <h4 class="range-title">Raspon površine</h3>
              <br/>
              <div class="input-box">
                 <div class="min-box">
                   <div class="input-wrap">
                      <span class="input-addon">m2</span>
                      <input id="minRangeValue" type="text" name="min_input" class="input-field min-input" onchange="setMinInput()">
                   </div>
                 </div>
                 <div class="max-box">
                   <div class="input-wrap">
                      <span class="input-addon">m2</span>
                      <input id="maxRangeValue" type="text" name="max_input" class="input-field max-input" onchange="setMaxInput()">
                   </div>
                 </div>
              </div>
              <!--<h4 class="range-title">Raspon površine</h3>-->
              <div class="input-box" style="margin-top:20px;">
                 <div class="min-box">
                   <div class="input-wrap">
                      <span class="input-addon">ar</span>
                      <input id="minRangeValue" type="text" name="min_input" class="input-field min-input" onchange="setMinInput()">
                   </div>
                 </div>
                 <div class="max-box">
                   <div class="input-wrap">
                      <span class="input-addon">ar</span>
                      <input id="maxRangeValue" type="text" name="max_input" class="input-field max-input" onchange="setMaxInput()">
                   </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-lg-1">
            <button type="button" class="btn btn-primary" style="margin-top:20px; background-color: #bf6735;"  onclick="filterProperties()">Filtriraj</button>
        </div>
        <div class="col-lg-3">
            <select id="sortDropdownId" onchange="sortProperties()" class="form-select" style="margin-top:20px;">
               <option value="0">Sortiraj</option>
               <option value="1">Po ceni uzlazno</option>
               <option value="2">Po ceni silazno</option>
               <option value="3">Po kvadraturi uzlazno</option>
               <option value="4">Po kvadraturi silazno</option>
            </select>
        </div>
        </div>
        </div>
        <div class="row" id="mylist" style="margin-top: 20px;">
        <?php 
            require_once "admin/database.php";
            $sql = "SELECT * FROM vw_getallproperties";
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0)
            {
               while ($row = $result-> fetch_assoc())
               {
                   echo "<div "."id=".$row["typeId"]." class="."col-lg-4"." data-position=".$row["price"]."-".$row["pro_type"].">".
                            "<div class="."item".">".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><img src="."assets/images/properties/".$row["id"]."/".$row["image"]."></a>".
                                "<a href="."property-details.php?prid=".$row["id"]."&typeid=".$row["pro_type"]."><span class="."category".">".$row["ref"].", ".$row["pro_name"]."</span></a>".
                                "<p class="."price"."><b> Cena: ".$row["price_text"]."</b></p>".
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

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 offset-lg-12">
          <div class="section-heading text-center">
            <h2>Kontaktirajte nas</h2>
          </div>
          <p style="color:#fff">
            Sokobanja je jedna od najpopularnijih destinacija u Srbiji, kada je banjski turizam u pitanju. 
            Smeštena je u jugoistočnoj Srbiji, u kotlini između planina Rtanj i Ozren, a kroz grad protiče 
            reka Moravica.<br><br>

            Privatni smeštaj je najčešći odabir gostiju u Sokobanji, a iz godine u godinu upravo ovaj vid 
            smeštaja beleži konstantan porast. Novi apartmani, studija i sobe prve kategorije su sređeni po 
            najsavremenijim svetskim standardima, tako da u potpunosti zadovoljavaju sve profile gostiju. 
            Smeštaj u banji se deli na apartmane, studije, sobe prve kategorije, sobe druge kategorije, 
            kuće i vile za odmor i hotelski smeštaj. <br><br>

            Banja svojim posetiocima u svojoj ponudi nudi veliki broj izletišta, kao što su Lepterija, 
            Sokograd, vodopad Ripaljka, izvor Moravice i Bovansko jezero. <br><br>
            
            Smeštena u prirodnim lepotama koje je okružuju, čist vazduh i prijatna klima tokom većeg dela godine, 
            kao i izuzetna gostoljubivost domaćina, dobitna su kombinacija i jaki aduti Sokobanja, koja je zbog 
            svih svojih prirodnih lepota i najlepša banja u Srbiji.<br><br>

            Agencija u prometu I zakupu nepokretnosti “Necaprom” je prva agencija takve delatnosti u Sokobanji, 
            osnovana davne 1998. godine. U ponudi je trenutno stotine raznih nepokretnosti, počev od stanova, 
            kuća, lokala, seoskih domaćinstva, pa do placeva I videndica. Agenti naše agencije su iskusni u svom 
            poslu I svaki posao dovode do krajnje realizacije. <br><br>
            
            Pored posredovanja u prometu nepokretnosti, agencija “Necaprom” ima I svoju menjačnicu, šalter PTT,
             kao I uslužne delatnosti kopiranja, slanje faksa I štampanje sa USB fleša I diska. <br><br>
            
            Usluga I ljubaznost naših radnika je na najvišem nivou, I zbog takvih svari agencija ima svoju dugu tradiciju.<br><br>   
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1037.5796067120725!2d21.875422355737182!3d43.64446409781809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47543a59102de07d%3A0x21da38fed4b0a32!2sNECA%20PROM!5e1!3m2!1ssr!2srs!4v1737491422775!5m2!1ssr!2srs" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <!--<h6>069/54 53 577<br><span>Broj telefona</span></h6>-->
                <a href="tel:0695453577" style="font-size: 16px; color: #000"><b>069/54 53 577</b><br><span style="color:#aaaaaa">Broj telefona</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <a href="mailto: necaprom@ptt.rs" style="font-size: 16px; color: #000"><b>necaprom@ptt.rs</b><br><span style="color:#aaaaaa">Email</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="contact-content" style="margin-top: 0px;">
            <form id="contact-form" style="width: 100%;" action="https://formsubmit.co/igor94grozdanic@gmail.com" method="post">
            <div class="row">
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
                     <button type="submit" id="form-submit" class="orange-button">Pošalji</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> 

  <!--<footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
    </div>
  </footer>-->

  <!-- Footer Start -->
  <div class="col-lg-12 container-fluid bg-dark text-light footer mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!--<div class="col-lg-4 col-md-6">
                    <a href="index.php" class="logo">
                        <img src="assets/images/2019/Necaprom_transparent.png" alt="" style="max-width:250px; margin-top:25px;">
                    </a>
                </div>-->
                <div class="col-lg-6 col-md-6">
                    <h4 id="indexTextId44" class="text-light mb-4" style="color:#FFF;">Adresa</h4>
                    <p id="indexTextId45" class="mb-2" style="color:#FFF;"><i class="fa fa-map-marker-alt me-3"></i>Svetog Save 19, Sokobanja</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>018/884-111; 069/54 53 577 Nemanja</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>018/833-072</p>
                    <p class="mb-2" style="color:#FFF;"><i class="fa fa-phone-alt me-3"></i>063/831-8-144 Zoran</p>
                    <a class="mb-2" href="mailto: necaprom@ptt.rs" style="font-size: 13px; color:orange;"><i class="fa fa-envelope me-3"></i>necaprom@ptt.rs</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-light mb-4">Brzi linkovi</h4>
                    <ul class="text-light">
                      <li><a href="properties.php" style="color:#FFF;">Prodaja</a></li>
                      <li><a href="rents.php" style="color:#FFF;">Izdavanje</a></li>
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
                    <div class="col-md-9 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="https://www.necaprom.com">www.necaprom.com</a>, All Right Reserved.
                    </div>
                    <div class="col-md-3 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Created By <a href="https://www.gisit.rs">
                        <img src="assets/images/2019/Gisit_transparent.png" alt="" style="max-width:100px;">
                        </a>
                    </div>
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
  <script src="assets/js/range.js"></script> 

  </body>
</html>