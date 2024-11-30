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

            $dir="upload/";

            if(!is_dir($dir))
            {
                mkdir($dir, "0777", true);
            }

            $countimg = 0;

            foreach($_FILES["images"]["name"] as $i=>$name)
            {
                $imagename = $_FILES["images"]["name"][$i];
                $tmpname = $_FILES["images"]["tmp_name"][$i];
    
                $image_name = $_FILES['images']['tmp_name'][$i];
                $folder = "upload/";
                $image_path = $folder.$_FILES['images']['name'][$i];
                move_uploaded_file($image_name, $image_path);

                $sql = "INSERT INTO images (path) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $image_path);
                $stmt->execute();
            }
        }

        ?>
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-9 bg-light mt-4 px-4 p-2 rounded">
                        <h3 class="text-center text-info pb-2">Upload slika</h3>
                        <!--<form action="upload.php" method="POST" enctype="multipart/form-data" id="image_upload">
                            <div class="form-group">
                                <div class="form-control">
                                    <input type="file" name="image1" class="form-control" id="image" multiple="multiple" placeholder="Izaberite sliku">
                                        <label for="image" class="file-label">Izaberite fajl</label>
                                    </input>
                                </div>
                            </div>
                            <div class="form-btn text-center">
                                <input id="submit" type="submit" value="Upload" name="submit" class="btn btn-info btn-block">
                            </div>
                            <h5 class="text-center text-success" id="result"></h5>
                        </form>-->
                        <form action="form.php" enctype="multipart/form-data" method="POST">
                            <div class="form-control">
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
            </div>
        </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $("#image").on('change', function(){
            var filename = $(this).val();
            $(".file-label").html(filename);
          });
          
          /*$("#submit1").click(function(){
            $.ajax({
                  url: 'insert.php',
                  method: 'post',
                  processData: false,
                  contentType: false,
                  cache: false,
                  data: new FormData(this),
                  success: function(response){
                    $("#result").html(response);
                  }
              });
          }); */   

          /*$("#image_upload").submit(function(e){
              e.preventDefault();
              $.ajax({
                  url: 'insert.php',
                  method: 'post',
                  processData: false,
                  contentType: false,
                  cache: false,
                  data: new FormData(this),
                  success: function(response){
                    $("#result").html(response);
                  }
              });
              alert("Cao");
          });*/

        });
    </script>
</body>
</html>