<?php
include"database.php"; 
 $id=$_POST['string'];
 
 $sql = "SELECT * FROM jos_osrs_photos WHERE pro_id='$id'";
 $result = $conn-> query($sql);
 
 if ($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
    {
        $dirname = "../assets/images/properties/".$id."/".$row["image"];
        $dirnameMedium = "../assets/images/properties/".$id."/medium/".$row["image"];
        $dirnameOriginal = "../assets/images/properties/".$id."/original/".$row["image"];
        $dirnameThumb = "../assets/images/properties/".$id."/thumb/".$row["image"];
        unlink($dirname);
        unlink($dirnameMedium);
        unlink($dirnameOriginal);
        unlink($dirnameThumb);
        
    }
    
    $mainFolder = "../assets/images/properties/".$id;
    $medumFolder = "../assets/images/properties/".$id."/medium";
    $originalFolder = "../assets/images/properties/".$id."/original";
    $thumbFolder = "../assets/images/properties/".$id."/thumb";
    rmdir($medumFolder);
    rmdir($originalFolder);
    rmdir($thumbFolder);
    rmdir($mainFolder);
 }

 $sql = "delete from jos_osrs_photos where pro_id='$id'";

 if ($conn->query($sql) === TRUE) {
    echo "Fotografije uspešno obrisane: ";
 }
?>