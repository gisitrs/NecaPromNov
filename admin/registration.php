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
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $userName = $_POST["username"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           $params = "{"."admin_style".":".","."admin_language".":".","."language".":".","."editor".":".","."helpsite".":".","."timezone".":"."}";
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM jos_users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO jos_users (name, username, email, password, params) VALUES ( ?, ?, ? ,?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssss",$fullName, $userName, $email, $passwordHash, $params);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>

        <div class="contact-content" style="margin-top: 20px; display: flex; flex-direction: row; align-items: center; justify-content: center;">
            <div class="col-lg-3">
            </div>
            <form id="contact-form" action="registration.php" method="post" class="col-lg-6">
              <div class="col-lg-12" style="margin-top: 20px;">
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="fullname" id="fullname" placeholder="Puno ime..." autocomplete="on" >
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="username" id="username" placeholder="Korisničko ime..." autocomplete="on" >
                    </fieldset>
                  </div>
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
                  <div class="col-lg-12">
                      <fieldset>
                         <input type="password" name="repeat_password" id="repeatpassword"  placeholder="Potvrdite šifru..." required="">
                      </fieldset>
                  </div>
                  <div class="col-lg-12" style="margin-top: 0px; display: flex; flex-direction: row; align-items: center; justify-content: center;">
                      <fieldset >
                         <button type="submit" name="submit" class="orange-button">Register</button>
                      </fieldset>
                  </div>
                  <div style="margin-top:10px; display: flex; flex-direction: row; align-items: center; justify-content: center;">
                    <p>Već ste registrovani 
                        <br>
                        <a href="login.php" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                            Login
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