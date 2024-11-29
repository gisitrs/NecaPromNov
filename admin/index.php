<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div  style="position:absolute; top: 0; right:0;">
        <a href="logout.php" class="btn btn-warning" >Logout</a>
    </div>
    <div class="container">
        <?php
        if (isset($_POST["submit1"])) {
           $selectedCategoryId = $_POST["propertyCategories"];
           $selectedTypeId =  $_POST["propertyTypes"];

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
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="ref" placeholder="Ref:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Naziv:">
            </div>
            <div class="form-group">
                <select name="propertyCategories">
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
            </div>
            <div class="form-group">
                <select name="propertyTypes">
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
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Kreiraj nekretninu" name="submit1">
            </div>
        </form>
    </div>
</body>
</html>