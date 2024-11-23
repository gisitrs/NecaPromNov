<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

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
                    <a href="index.html" class="logo">
                        <h1>Villa</h1>
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
          <span class="category">Toronto, <em>Canada</em></span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Melbourne, <em>Australia</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Miami, <em>South Florida</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
    <div class="row">
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

        <div class="col-lg-8">
           <div class="double-slider-box">
              <h3 class="range-title">Raspon cene</h3>
              <div class="range-slider">
                 <span class="slider-track"></span>
                 <input type="range" name="min_val" class="min-val" min="0" max="600000" value="10000" oninput="slideMin()">
                 <input type="range" name="max_val" class="max-val" min="0" max="600000" value="350000" oninput="slideMax()">
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
        <div class="col-lg-3">
            <select id="sortDropdownId" class="form-select" style="margin-top:20px;">
               <option value="0">Sortiraj</option>
               <option value="1">Manja ka većoj</option>
               <option value="2">Veća ka manjoj</option>
            </select>
        </div>
        <div class="col-lg-1">
            <button type="button" class="btn btn-primary" style="margin-top:20px;"  onclick="filterProperties()">Filtriraj</button>
        </div>
        </div>
        </div>
        <div class="row" id="mylist">
        <?php 
            $conn = mysqli_connect("127.0.0.1:3306", "root", "WeAreGisTeam2013", "marinkom_jos1");
            if ($conn -> connect_error) 
            {
               die("Connection failed:".$conn-> connect_error);
            }

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
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h2>Kontaktirajte nas</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>010-020-0340<br><span>Broj telefona</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>info@villa.co<br><span>Email</span></h6>
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

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
    </div>
  </footer>

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