<?php
include"database.php"; 
 $id=$_POST['string'];
 $sql = "delete from marinkom_jos1.jos_osrs_property_categories where pid='$id'";
 if ($conn->query($sql) === TRUE) {
    $sql = "delete from marinkom_jos1.jos_osrs_photos where pro_id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        $sql = "delete from marinkom_jos1.jos_osrs_properties where id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            $dirname = "../assets/images/properties/".$id;
            unlink($dirname);
            rmdir($dirname);
            echo "<p class='btn btn-info' align='center'>Record deleted successfully</p>";
        }
    }
 } else {
  echo "Error deleting record: " . $conn->error;
 } 
 
?>