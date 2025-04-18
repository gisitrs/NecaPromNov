<?php
include"database.php"; 
 $imagesForChangeOrder=$_POST['imagesForChangeOrder'];

 // Use foreach to iterate through the array
 foreach ($imagesForChangeOrder as $image) {
   $photo = explode("_", $image);
   $photoId = $photo[0];
   $photoOrder = $photo[1];

   $sqlUpdate = "UPDATE jos_osrs_photos SET ordering = ".$photoOrder."  WHERE id=".$photoId;
   $conn->query($sqlUpdate);
 }
?>