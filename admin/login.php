<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
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

  <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM jos_users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php?userId=".$user["id"]);
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
    ?>

        <div class="contact-content" style="margin-top: 100px; display: flex; flex-direction: row; align-items: center; justify-content: center;">
            <div class="col-lg-3">
            </div>
            <form id="contact-form" action="login.php" method="post" class="col-lg-6">
              <div class="col-lg-12" style="margin-top: 50px;">
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Unesite email..." autocomplete="on" >
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                         <input type="password" name="password" id="password"  placeholder="Unesite šifru..." required="">
                      </fieldset>
                  </div>
                  <div class="col-lg-12" style="margin-top: 0px; display: flex; flex-direction: row; align-items: center; justify-content: center;">
                      <fieldset >
                         <button type="submit" name="login" class="orange-button">Login</button>
                      </fieldset>
                  </div>
                  <div style="margin-top:20px; display: none; flex-direction: row; align-items: center; justify-content: center;">
                    <p>Još niste registrovani 
                        <br>
                        <a href="registration.php" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                            Sign Up
                        </a>
                    </p>
                  </div>
              </div>
          </form>
          <div class="col-lg-3">
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