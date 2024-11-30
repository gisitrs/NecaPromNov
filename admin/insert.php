<?php
    require_once "database.php";
    
    foreach ($_FILES['images']['name'] as $i => $value) {
        $image_name = $_FILES['images']['tmp_name'][$i];
        $folder = "upload/";
        $image_path = $folder.$_FILES['images']['name'][$i];
        move_uploaded_file($image_name, $image_path);

        $sql = "INSERT INTO images (path) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $image_path);
        $stmt->execute();
    }

    echo "Image uploaded successfully";
?>