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
        <?php
        if (isset($_POST["submit"])) {

            require_once "database.php";
            
            $selectedPropertyId = $_POST["property"];
            $dir = "../assets/images/properties/".$selectedPropertyId;
            $dirMedium = $dir."/medium";
            $dirOriginal = $dir."/original";
            $dirThumb = $dir."/thumb";

            if(!is_dir($dir))
            {
                mkdir($dir, "0777", true);
                //echo "New folder created";
            }

            if(!is_dir($dirMedium))
            {
                mkdir($dirMedium, "0777", true);
            }

            if(!is_dir($dirOriginal))
            {
                mkdir($dirOriginal, "0777", true);
            }

            if(!is_dir($dirThumb))
            {
                mkdir($dirThumb, "0777", true);
            }

            //$countimg = 1;
            $maxOrderingId = "SELECT  MAX(ordering) AS MaxOrderingId FROM marinkom_jos1.jos_osrs_photos WHERE pro_id=".$selectedPropertyId;
            $resultMaxOrderingId = mysqli_query($conn, $maxOrderingId);
            $resultMaxOrderingValue = mysqli_fetch_array($resultMaxOrderingId, MYSQLI_ASSOC);
            $countimg = $resultMaxOrderingValue["MaxOrderingId"] + 1;

            foreach($_FILES["images"]["name"] as $i=>$name)
            {
                $imagename = $_FILES["images"]["name"][$i];
                $tmpname = $_FILES["images"]["tmp_name"][$i];
    
                $image_name = $_FILES['images']['tmp_name'][$i];
                $folder = $dir."/";
                $image_path = $folder.$_FILES['images']['name'][$i];
                move_uploaded_file($image_name, $image_path);

                $folderMedium = $dirMedium."/";
                $image_pathMedium = $folderMedium.$_FILES['images']['name'][$i];
                copy($image_path, $image_pathMedium);

                $folderOriginal = $dirOriginal."/";
                $image_pathOriginal = $folderOriginal.$_FILES['images']['name'][$i];
                copy($image_path, $image_pathOriginal);

                $folderThumb = $dirThumb."/";
                $image_pathThumb = $folderThumb.$_FILES['images']['name'][$i];
                copy($image_path, $image_pathThumb);

                $sql = "INSERT INTO jos_osrs_photos (pro_id, image, ordering) VALUES (?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $selectedPropertyId, $imagename, $countimg);
                $stmt->execute();

                $countimg = $countimg + 1;
            }

            /*$sql = "SELECT * FROM images ORDER BY sort";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = "<div class='col-lg-12 alert alert-success'>Sledeće fotografije su uspešno učitane!</div><div class='col-lg-12'>";

            while($row = $result->fetch_assoc()){
                $data .= '<div class="col-lg-4">
                             <div class="card-group">
                                 <div class="card mb-3">
                                     <a href="'.$row['path'].'">
                                        <img src="'.$row['path'].'" class="card-img-top" height="150">
                                     </a>
                                 </div>
                              </div>
                           </div>';
            }

            $data .= '</div>';*/

            echo "<div class='col-lg-12 alert alert-success'>Fotografije su uspešno učitane!</div>";
        }

        ?>
            <div class="row justify-content-center">
                <div class="col-lg-9 bg-light mt-4 px-4 p-2 rounded">
                    <h3 class="text-center text-info pb-2">Upload slika</h3>
                    <form action="form.php" enctype="multipart/form-data" method="POST">
                       <div class="col-lg-12 bg-light mt-4 px-4 p-2 rounded justify-content-center">
                          <select name="property" class="form-select">
                              <?php 
                                  require_once "database.php";
                                  $sql = "SELECT id, pro_name FROM marinkom_jos1.jos_osrs_properties ORDER BY pro_name";
                                  $result = mysqli_query($conn, $sql);
                           
                                   while($rows = $result->fetch_assoc()){
                                      $propertyName = $rows['pro_name'];
                                      $propertyId = $rows['id'];

                                      echo "<option value='$propertyId'>$propertyName</option>";
                                   };
                               ?>
                           </select>
                       </div> 
                       <div class="form-control mt-4">
                            <input class="form-control" type="file" name="images[]" multiple="multiple"/>
                        </div>
                        <div class="form-btn text-center">
                            <input class="btn btn-info btn-block mt-4" type="submit" name="submit" value="Upload" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 mt-4">
                    <div class="row p-2" id="images_preview">
                    </div>
                </div>
            </div>
</body>
</html>