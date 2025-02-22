<?php
include"database.php"; 
 $id=$_POST['proId'];
 $imagesForDelete=$_POST['imagesForDelete'];
 
 $sql = "SELECT * FROM vw_getallimages WHERE id='$id'";
 $result = $conn-> query($sql);

 $images = explode(";", $imagesForDelete);
 
 if ($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
    {
        $imageOrder = $row["ordering"];

        if (in_array($imageOrder, $images))
        {
         $dirname = "../assets/images/properties/".$id."/".$row["image"];
         $dirnameMedium = "../assets/images/properties/".$id."/medium/".$row["image"];
         $dirnameOriginal = "../assets/images/properties/".$id."/original/".$row["image"];
         $dirnameThumb = "../assets/images/properties/".$id."/thumb/".$row["image"];
         unlink($dirname);
         unlink($dirnameMedium);
         unlink($dirnameOriginal);
         unlink($dirnameThumb);

         $sql = "delete from jos_osrs_photos where pro_id='$id' and ordering ='$imageOrder'";
         $conn->query($sql);
        }
    }
    
    /*$mainFolder = "../assets/images/properties/".$id;
    $medumFolder = "../assets/images/properties/".$id."/medium";
    $originalFolder = "../assets/images/properties/".$id."/original";
    $thumbFolder = "../assets/images/properties/".$id."/thumb";
    rmdir($medumFolder);
    rmdir($originalFolder);
    rmdir($thumbFolder);
    rmdir($mainFolder);*/
 }

 /* Reset ordering for deleted property */
 $sql1 = "SELECT * FROM jos_osrs_photos WHERE pro_id='$id'";
 $result1 = $conn-> query($sql1);
 $counter = 1;

 if ($result1-> num_rows > 0)
 {
   echo "Fotografije uspešno obrisane: ";

   while ($row1 = $result1-> fetch_assoc())
   { 
      $rowId = $row1["id"];
      $sqlUpdate = "UPDATE jos_osrs_photos SET ordering = ".$counter."  WHERE id=".$rowId;
      $conn->query($sqlUpdate);
      $counter = $counter + 1;
   }
 }

 /*$sql = "delete from jos_osrs_photos where pro_id='$id'";

 if ($conn->query($sql) === TRUE) {
    echo "Fotografije uspešno obrisane: ";
 }*/
?>